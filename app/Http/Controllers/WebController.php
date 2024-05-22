<?php

namespace App\Http\Controllers;

use App\Models\Resources;
use App\Models\Mainmenu;
use App\Models\PageType;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $resources = Resources::paginate(2);
        $menus = Mainmenu::all(); 
        $pagetype = PageType::all(); 
        return view('resource.index', ['resources' => $resources,'menus'=> $menus,'pagetype' => $pagetype]);
    }

    public function filterResources(Request $request)
{
    $insightType = $request->input('insight_type');
    $menuFilter = $request->input('menu_filter');
    $searchQuery = $request->input('search_query');

    $query = Resources::query();

    if ($insightType != '') {
        $query->where('type', $insightType);
    }

    if ($menuFilter != '') {
        $query->where('main_menu_tbl_id', $menuFilter);
    }

    if ($searchQuery != '') {
        $query->where(function($q) use ($searchQuery) {
            $q->where('title', 'like', '%' . $searchQuery . '%')
              ->orWhere('description', 'like', '%' . $searchQuery . '%');
        });
    }
    $filteredResources = $query->get();

    $view = View::make('resource.index', ['resources' => $filteredResources]);
    return response()->json(['html' => $view->render()]);
}
     
public function show_details_resources($slug)
{
    $resource = Resource::where('slug', $slug)->firstOrFail();
    return view('resource.details', compact('resource'));
}


}
