<?php

namespace App\Http\Controllers;

use App\Models\Mainmenu;
use App\Models\Submenu;
use Exception;
use Illuminate\Http\Request;
use Str;
use Illuminate\Support\Facades\DB;
class MenufilterController extends Controller
{
    public function index()
    {
     
        if (\request()->ajax()) return $this->datatable();
        $pages = DB::table('main_menu')
        ->select('main_menu.*', 'submenu.sub_menu_title','submenu.id as sub_id')
        ->join('submenu', 'main_menu.id', '=', 'submenu.main_menu_tbl_id')
        ->get();
    return view('cms.menu.index', compact('pages'));
    }

    public function datatable()
    {
        $pages = DB::table('main_menu')
        ->select('main_menu.*', 'submenu.sub_menu_title','submenu.id as sub_id')
        ->join('submenu', 'main_menu.id', '=', 'submenu.main_menu_tbl_id')
        ->get();
        return datatables()->of($pages)
            ->make(true);
    }

    public function create()
    {
        $menus = Mainmenu::all(); 
        return view('cms.menu.create', compact('menus'));
    }

    public function edit($sub_id)
    {
       
        $page = DB::table('submenu')
        ->select('submenu.*', 'main_menu.*','submenu.id as sub_id')
        ->join('main_menu', 'submenu.main_menu_tbl_id', '=', 'main_menu.id')
        ->where('submenu.id', $sub_id)
        ->first();
       if (!$page) {
       return "Submenu does not exist";
        }
        $menus = Mainmenu::all();
        return view('cms.menu.edit',  compact('page', 'menus'));
    }

    public function update($id, Request $request)
    {
        // get page content
        $request->validate([
            'main_menu' => 'required|max:255',
            'sub_menu' => 'required|max:255',
        ]);
        $data = [
            'main_menu_tbl_id' => $request->main_menu,
            'sub_menu_title' => $request->sub_menu,
        ];

        $updated = Submenu::find($id)->update($data);
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
            'main_menu_id' => 'required|max:255|min:1',
        ]);

        $inserted = Submenu::insert([
            'main_menu_tbl_id' => $request->main_menu_id,
            'sub_menu_title' => $request->title,
        ]);

        if ($inserted) {
            return [
                'success' => true,
                'message' => 'Added successfully'
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
        $deleted = Submenu::find($id)->delete();
        if ($deleted) return success('Keyword deleted successfully');
        else return error('Something is wrong');
    }

    function convertBase64ToImage($matches , $content) {
        foreach ($matches[0] as $key => $value) {
            $base64string = $value;
            $extension = explode('/', explode(';', $base64string)[0])[1];
            $image = $matches[2][$key];
            $image = base64_decode($image);
            $image_name = Str::uuid() . $key . '.' . $extension;
            $path = public_path() . '/Mainmenu/' . $image_name;
            file_put_contents($path, $image);
            $content = str_replace($base64string, config('app.app_page') . '/Mainmenu/' . $image_name, $content);
        }
        return $content;
    }

    function getAllBase64($content) {
        $base64 = [];
        preg_match_all('/data:image\/([a-zA-Z]*);base64,([^"]*)/', $content, $base64);
        return $base64;
    }

    // to flag the Mainmenu as featured, auto remove all other featured Mainmenu of the same type
    public function featured($id)
    {
        $page = Mainmenu::where('id', $id)->first();
        // update the featured status for the page, and remove all other featured pages
        Mainmenu::where('id', '!=', $id)
            ->where('type', $page->type)
            ->update(['featured' => 0]);
        $page->update(['featured' => 1]);
        return [
            'success' => true,
            'message' => 'Page updated successfully'
        ];
    }
}
