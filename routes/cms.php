<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CaseStudiesController;
use App\Http\Controllers\TradingController;
use Illuminate\Support\Facades\Route;



Route::get('/cms/login', [LoginController::class, 'showLoginForm'])->name('cms.login');
Route::post('/cms/login', [LoginController::class, 'login']);

Route::get('/cms', function () {
    return redirect()->route('cms.login');
});

// Define a route with a locale/translation middleware group
Route::group(['middleware' => 'CmsGuard',"prefix" => "/cms"], function () {
    //blog start
    Route::get('/blogs/featured/{id}', [BlogController::class, 'featured'])->name('cms.blogs.featured');
    Route::resource('/blogs', BlogController::class)->only(['index'])->names('cms.blogs'); 
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('cms.blogs.create'); 
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('cms.blogs.edit'); 
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('cms.blogs.destroy'); 
   
    Route::post('/blogs', [BlogController::class, 'store'])->name('cms.blogs.store'); 
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('cms.blogs.update'); 
     //blog end

   // case-studies start 
    Route::resource('/case-studies', CaseStudiesController::class, ['names' => 'cms.case-studies']);
    Route::get('/case-studies/featured/{id}', [CaseStudiesController::class, 'featured'])->name('cms.case-studies.featured');
    Route::get('/case-studies/create', [CaseStudiesController::class, 'create'])->name('cms.case-studies.create'); 
    Route::get('/case-studies/{id}/edit', [CaseStudiesController::class, 'edit'])->name('cms.case-studies.edit'); 
    Route::delete('/case-studies/{id}', [CaseStudiesController::class, 'destroy'])->name('cms.case-studies.destroy'); 

    Route::post('/case-studies', [CaseStudiesController::class, 'store'])->name('cms.case-studies.store'); 
    Route::put('/case-studies/{id}', [CaseStudiesController::class, 'update'])->name('cms.case-studies.update'); 
     // case-studies end 
      // articles  start 
    Route::resource('/articles', ArticlesController::class, ['names' => 'cms.articles']);
    Route::get('/articles/featured/{id}', [ArticlesController::class, 'featured'])->name('cms.articles.featured');
    Route::get('/articles/create', [ArticlesController::class, 'create'])->name('cms.articles.create'); 
    Route::get('/articles/{id}/edit', [ArticlesController::class, 'edit'])->name('cms.articles.edit'); 
    Route::delete('/articles/{id}', [ArticlesController::class, 'destroy'])->name('cms.articles.destroy'); 

    Route::post('/articles', [ArticlesController::class, 'store'])->name('cms.articles.store'); 
    Route::put('/articles/{id}', [ArticlesController::class, 'update'])->name('cms.articles.update');  
        // articles  end  

      // trading  start 
      Route::resource('/trading', TradingController::class, ['names' => 'cms.trading']);
      Route::get('/trading/featured/{id}', [TradingController::class, 'featured'])->name('cms.trading.featured');
      Route::get('/trading/create', [TradingController::class, 'create'])->name('cms.trading.create'); 
      Route::get('/trading/{id}/edit', [TradingController::class, 'edit'])->name('cms.trading.edit'); 
      Route::delete('/trading/{id}', [TradingController::class, 'destroy'])->name('cms.trading.destroy'); 
  
      Route::post('/trading', [TradingController::class, 'store'])->name('cms.trading.store'); 
      Route::put('/trading/{id}', [TradingController::class, 'update'])->name('cms.trading.update'); 
      
      Route::get('/trading/{id}/detailspage', [TradingController::class, 'update_details'])->name('cms.detailspage.update_details');
          // trading  end    
          

    Route::post('/cms/logout', [LoginController::class, 'logout'])->name('cms.logout');


});


