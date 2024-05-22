<?php

use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TradingController;
use App\Http\Controllers\MenufilterController;
use Illuminate\Support\Facades\Route;



Route::get('/cms/login', [LoginController::class, 'showLoginForm'])->name('cms.login');
Route::post('/cms/login', [LoginController::class, 'login']);

Route::get('/cms', function () {
    return redirect()->route('cms.login');
});

// Define a route with a locale/translation middleware group
Route::group(['middleware' => 'CmsGuard',"prefix" => "/cms"], function () {
   
   //menu start
   Route::resource('/menu', MenufilterController::class)->only(['index'])->names('cms.menu'); 
   Route::get('/menu/create', [MenufilterController::class, 'create'])->name('cms.menu.create'); 
   Route::get('/menu/{id}/edit', [MenufilterController::class, 'edit'])->name('cms.menu.edit'); 
   Route::delete('/menu/{id}', [MenufilterController::class, 'destroy'])->name('cms.menu.destroy'); 
   Route::post('/menu', [MenufilterController::class, 'store'])->name('cms.menu.store'); 
   Route::put('/menu/{id}', [MenufilterController::class, 'update'])->name('cms.menu.update'); 
 



  //menu end
   
    //blog start
    Route::get('/getKeywords/{categoryId}', [ResourcesController::class, 'getKeywords'])->name('getKeywords');



    Route::get('/blogs/featured/{id}', [ResourcesController::class, 'featured'])->name('cms.blogs.featured');
    Route::resource('/blogs', ResourcesController::class)->only(['index'])->names('cms.blogs'); 
    Route::get('/blogs/create', [ResourcesController::class, 'create'])->name('cms.blogs.create'); 
    Route::get('/blogs/{id}/edit', [ResourcesController::class, 'edit'])->name('cms.blogs.edit'); 
    Route::delete('/blogs/{id}', [ResourcesController::class, 'destroy'])->name('cms.blogs.destroy'); 
   
    Route::post('/blogs', [ResourcesController::class, 'store'])->name('cms.blogs.store'); 
    Route::put('/blogs/{id}', [ResourcesController::class, 'update'])->name('cms.blogs.update'); 
     //blog end

 
    

      // trading  start 
      Route::resource('/trading', TradingController::class, ['names' => 'cms.trading']);
      Route::get('/trading/featured/{id}', [TradingController::class, 'featured'])->name('cms.trading.featured');
      Route::get('/trading/create', [TradingController::class, 'create'])->name('cms.trading.create'); 

      Route::delete('/trading/{id}', [TradingController::class, 'destroy'])->name('cms.trading.destroy'); 
  
      Route::post('/trading', [TradingController::class, 'store'])->name('cms.trading.store'); 
      Route::put('/trading/{id}', [TradingController::class, 'update'])->name('cms.trading.update'); 
      
      Route::get('/trading/{id}/detailspage', [TradingController::class, 'update_details'])->name('cms.detailspage.update_details');
          // trading  end    
          

    Route::post('/cms/logout', [LoginController::class, 'logout'])->name('cms.logout');


});


