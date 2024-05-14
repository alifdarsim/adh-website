<?php

namespace App\Http\Controllers;
use App\Models\TradingCategory;
use App\Models\Trading;
use Illuminate\Http\Request;

class TradingController extends Controller
{
    public function index()
    {
       
        if (\request()->ajax()) return $this->datatable();
        $pages = TradingCategory::get();
        return view('cms.trading.index', compact('pages'));
    }

    public function datatable()
    {
   
        $pages = TradingCategory::get();
        return datatables()->of($pages)
            ->make(true);
    }

    public function create()
    {
        $categories = TradingCategory::all();
        return view('cms.trading.create', ['tradingCategories' => $categories]);
    }

    public function edit($id)
    {
        $page = TradingCategory::find($id);
        if (!$page) return "Cms not exist";
        return view('cms.trading.edit', compact('page'));
    }
    public function update_details($id)
    {
        $page = TradingCategory::find($id);
        if (!$page) return "Cms not exist";
        return view('cms.trading.edit_detail_page', compact('page'));
    }


    public function update($id, Request $request)
    {
        // get page content
        $request->validate([
            'title' => 'required|max:255|min:3',
            'slug' => 'required|max:255|min:3',
        
        ]);


        // if image is not update then use the old image
        $data = [
            'category_type' => $request->title,
            'slug' => $request->slug,
            
        ];

       

        $updated = TradingCategory::find($id)->update($data);
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
            
        ]);
       
        $inserted = TradingCategory::insert([
     
            'category_type' => $request->title,
            'slug' => $request->slug,
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
        $deleted = Trading::find($id)->delete();
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
            $path = public_path() . '/Trading/' . $image_name;
            file_put_contents($path, $image);
            $content = str_replace($base64string, config('app.app_page') . '/Trading/' . $image_name, $content);
        }
        return $content;
    }

    function getAllBase64($content) {
        $base64 = [];
        preg_match_all('/data:image\/([a-zA-Z]*);base64,([^"]*)/', $content, $base64);
        return $base64;
    }

    // to flag the Trading as featured, auto remove all other featured Trading of the same type
    public function featured($id)
    {
        $page = Trading::where('id', $id)->first();
        // update the featured status for the page, and remove all other featured pages
        Trading::where('id', '!=', $id)
            ->where('type', $page->type)
            ->update(['featured' => 0]);
        $page->update(['featured' => 1]);
        return [
            'success' => true,
            'message' => 'Page updated successfully'
        ];
    }
}
