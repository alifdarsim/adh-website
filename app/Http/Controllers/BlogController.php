<?php

namespace App\Http\Controllers;


use App\Models\Resources;
use Exception;
use Illuminate\Http\Request;
use Str;
use App\Models\Mainmenu;
use App\Models\Submenu;
use App\Models\PageType;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) return $this->datatable();
        $pages = Resources::join('pagetype', 'resources.type', '=', 'pagetype.id')
        ->orderBy('resources.created_at', 'desc')
        ->get(['resources.*','pagetype.*']);
        return view('cms.blogs.index', compact('pages'));
    }

    public function datatable()
    {
        $pages = Resources::join('pagetype', 'resources.type', '=', 'pagetype.id')
        ->orderBy('resources.created_at', 'desc')
        ->get(['resources.*','pagetype.*']);
        return datatables()->of($pages)
            ->make(true);
    }

    public function create()
    {
        $menus = Mainmenu::all(); 
        $pagetype = PageType::all(); 
        return view('cms.blogs.create', compact('menus','pagetype'));
    }

    public function edit($id)
    {
        $page = Resources::select('resources.*', 'main_menu.menu_title', 'submenu.sub_menu_title','pagetype.type_name')
        ->join('main_menu', 'main_menu.id', '=', 'resources.main_menu_tbl_id')
        ->join('submenu', 'submenu.id', '=', 'resources.sub_menu_tbl_id')
        ->join('pagetype', 'pagetype.id', '=', 'resources.type')
        ->where('resources.id', $id)
        ->first();
    $menus = Mainmenu::all(); 
    $pagetype = PageType::all(); 
    $submenus = DB::table('resources')
    ->select('submenu.sub_menu_title', 'submenu.id as sub_id', 'resources.id')
    ->join('submenu', 'submenu.main_menu_tbl_id', '=', 'resources.main_menu_tbl_id')
    ->where('resources.id', $id)
    ->get();
    if (!$page) {
        return "Cms not exist";
    }
 
    return view('cms.blogs.edit', compact('page', 'menus','submenus','pagetype'));
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
            'tag' => $request->input('tags'),
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
            'category' => 'required',
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
            'main_menu_tbl_id' => $request->category,
            'sub_menu_tbl_id' => $request->keyword,
            'title' => $request->title,
            'type' => $request->type,
            'slug' => $request->slug,
            'banner' => config('app.app_page') . '/resources/' . $file_name,
            'content' => $request["content"],
            'description' => $description,
            'status' => $request->status,
            'author' => $request->author,
            'post_date' => $request->post_date,
            'tag' => $request->input('tags'),
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

        // Check if the page is already featured
        if ($page->featured == 1) {
            // If already featured, no need to do anything
            return [
                'success' => false,
                'message' => 'Page is already featured'
            ];
        }
        
        // Get all featured pages
        $featuredPages = Resources::where('featured', 1)->get();
        
        // Check if there are more than 3 featured pages
        if ($featuredPages->count() >= 3) {
            // Remove the first featured page (assuming they are ordered by some criteria)
            $firstFeaturedPage = $featuredPages->first();
            $firstFeaturedPage->update(['featured' => 0]);
        }
        
        // Update the selected page to be featured
        $page->update(['featured' => 1]);
        
        return [
            'success' => true,
            'message' => 'Page updated successfully'
        ];
    }

    public function getKeywords($categoryId)
    {
        $submenus = Submenu::where('main_menu_tbl_id', $categoryId)->get();
        $keywords = [];
        
        foreach ($submenus as $submenu) {
            $keywords[$submenu->id] = [
                'sub_menu_title' => $submenu->sub_menu_title,
                'main_menu_tbl_id' => $submenu->main_menu_tbl_id,
                'id' => $submenu->id,
            ];
        }
        
        return response()->json(['keywords' => $keywords]);
    }
}
