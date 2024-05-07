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

    Route::get('/blogs/featured/{id}', [BlogController::class, 'featured'])->name('cms.blogs.featured');
    Route::resource('/blogs', BlogController::class, ['names' => 'cms.blogs']);
    Route::resource('/case-studies', CaseStudiesController::class, ['names' => 'cms.case-studies']);
    Route::resource('/articles', ArticlesController::class, ['names' => 'cms.articles']);

});


