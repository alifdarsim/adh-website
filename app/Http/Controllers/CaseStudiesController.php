<?php

namespace App\Http\Controllers;

use App\Models\Resources;
use Exception;
use Illuminate\Http\Request;
use Str;

class CaseStudiesController extends Controller
{
    public function index()
    {
      
        if (\request()->ajax()) return $this->datatable();
        $pages = Resources::where('type', 'case studies')->get();
        return view('cms.case-studies.index', compact('pages'));
    }

    public function datatable()
    {
        $pages = Resources::where('type', 'case studies')->get();
        return datatables()->of($pages)
            ->make(true);
    }

    public function create()
    {
        return view('cms.case-studies.create');
    }

    public function edit($id)
    {
        $page = Resources::find($id);
        if (!$page) return "Cms not exist";
        return view('cms.case-studies.edit', compact('page'));
    }

    public function update($id, Request $request)
    {
        // get page content
        $request->validate([
            'title' => 'required|max:255|min:3',
            'slug' => 'required|max:255|min:3',
            'type' => 'required|max:255|min:1',
            'status' => 'required|max:255|min:1',
            'author' => 'required|max:255|min:1',
            'content' => 'required|min:3',
            'post_date' => 'required|date',
        ]);

        $content = $request->content;
        // Remove HTML tags and trim the content
        $plainText = strip_tags($content);
        $description = substr($plainText, 0, 100);

        // if image is not update then use the old image
        $data = [
            'title' => $request->title,
            'type' => $request->type,
            'slug' => $request->slug,
            'content' => $request->content,
            'description' => $description,
            'status' => $request->status,
            'author' => $request->author,
            'post_date' => $request->post_date,
        ];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = request()->file('image');
            $file_name = Str::uuid() . '.' . $file->extension();
            $file->move(public_path('resources'), $file_name);
            $data['banner'] = config('app.app_page') . '/resources/' . $file_name;
        }

        $base64 = $this->getAllBase64($data['content']);
        $data['content'] = $this->convertBase64ToImage($base64, $data['content']);
        $data['content'] = str_replace('../../../..', config('app.app_page'), $data['content']);
        $updated = Resources::find($id)->update($data);
        if ($updated) {
            return [
                'success' => true,
                'message' => 'Page updated successfully'
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Page not updated'
            ];
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|min:3',
            'slug' => 'required|max:255|min:3',
            'type' => 'required|max:255|min:1',
            'status' => 'required|max:255|min:1',
            'author' => 'required|max:255|min:1',
            'content' => 'required|min:3',
            'post_date' => 'required|date',
        ]);
        $file = request()->file('image');
        $file_name = Str::uuid() . '.' . $file->extension();
        $file->move(public_path('resources'), $file_name);
        $content = $request["content"];
        // Remove HTML tags and trim the content
        $plainText = strip_tags($content);
        $description = substr($plainText, 0, 100);

        $inserted = Resources::insert([
            'menu_type' => 'casestudies',
            'title' => $request->title,
            'type' => $request->type,
            'slug' => $request->slug,
            'banner' => config('app.app_page') . '/resources/' . $file_name,
            'content' => $request["content"],
            'description' => $description,
            'status' => $request->status,
            'author' => $request->author,
            'post_date' => $request->post_date,
        ]);

        if ($inserted) {
            return [
                'success' => true,
                'message' => 'Page added successfully'
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Page not added'
            ];
        }
    }

    public function destroy($id)
    {
        $deleted = Resources::find($id)->delete();
        if ($deleted) return success('Page deleted successfully');
        else return error('Something is wrong');
    }

    function convertBase64ToImage($matches , $content) {
        foreach ($matches[0] as $key => $value) {
            $base64string = $value;
            $extension = explode('/', explode(';', $base64string)[0])[1];
            $image = $matches[2][$key];
            $image = base64_decode($image);
            $image_name = Str::uuid() . $key . '.' . $extension;
            $path = public_path() . '/resources/' . $image_name;
            file_put_contents($path, $image);
            $content = str_replace($base64string, config('app.app_page') . '/resources/' . $image_name, $content);
        }
        return $content;
    }

    function getAllBase64($content) {
        $base64 = [];
        preg_match_all('/data:image\/([a-zA-Z]*);base64,([^"]*)/', $content, $base64);
        return $base64;
    }

    // to flag the resources as featured, auto remove all other featured resources of the same type
    public function featured($id)
    {
        $page = Resources::where('id', $id)->first();
        // update the featured status for the page, and remove all other featured pages
        Resources::where('id', '!=', $id)
            ->where('type', $page->type)
            ->update(['featured' => 0]);
        $page->update(['featured' => 1]);
        return [
            'success' => true,
            'message' => 'Page updated successfully'
        ];
    }
}
