<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseStudiesController;
use Illuminate\Support\Facades\Route;

// Define a route with a locale/translation middleware group
Route::group(["prefix" => "/cms"], function () {
    Route::get('/', function () {
        return redirect()->route('cms.blogs.index');
    });

    Route::get('/blogs/featured', [BlogController::class, 'featured'])->name('cms.blogs.featured');
    Route::resource('/blogs', BlogController::class, ['names' => 'cms.blogs']);

    Route::resource('/case-studies', CaseStudiesController::class, ['names' => 'cms.case-studies']);
    Route::resource('/articles', ArticlesController::class, ['names' => 'cms.articles']);

//    Route::group(["prefix" => "post"], function () {
//        Route::get('/', [PostController::class, 'index'])->name('admin.post.index');
//        Route::get('/create', [PostController::class, 'create'])->name('admin.post.create');
//        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
//        Route::delete('/', [PostController::class, 'destroy'])->name('admin.post.destroy');
//        Route::post('/', [PostController::class, 'store'])->name('admin.post.store');
//        Route::post('/{id}', [PostController::class, 'update'])->name('admin.post.update');
//        Route::get('/datatable', [PostController::class, 'datatable'])->name('admin.post.datatable');
//        Route::get('/quick_view', [PostController::class, 'quick_view'])->name('admin.post.quick_view');
//        Route::get('/featured/{id}', [PostController::class, 'featured'])->name('admin.post.featured');
//    });

});


