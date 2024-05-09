<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CaseStudiesController;
use Illuminate\Support\Facades\Route;



Route::get('/cms/login', [LoginController::class, 'showLoginForm'])->name('cms.login');
Route::post('/cms/login', [LoginController::class, 'login']);

Route::get('/cms', function () {
    return redirect()->route('cms.login');
});

// Define a route with a locale/translation middleware group
Route::group(['middleware' => 'CmsGuard'], function () {

    Route::get('/blogs/featured/{id}', [BlogController::class, 'featured'])->name('cms.blogs.featured');
    Route::resource('/blogs', BlogController::class)->only(['index'])->names('cms.blogs'); 
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('cms.blogs.create'); 
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('cms.blogs.edit'); 
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('cms.blogs.destroy'); 
    Route::get('/index', [BlogController::class, 'index'])->name('index');
    Route::post('/blogs', [BlogController::class, 'store'])->name('cms.blogs.store'); 
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('cms.blogs.update'); 

    Route::resource('/case-studies', CaseStudiesController::class, ['names' => 'cms.case-studies']);
    Route::resource('/articles', ArticlesController::class, ['names' => 'cms.articles']);

    Route::post('/cms/logout', [LoginController::class, 'logout'])->name('cms.logout');


});


