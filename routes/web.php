<?php

use Illuminate\Support\Facades\Route;

// Define a route with a locale/translation middleware group
Route::group(['middleware' => 'setlocale'], function () {
    Route::get('/', fn() => view('index'))->name('index');

    // ** Offering Routes **
    Route::get('/offering-research', fn() => view('offering.research'))->name('offering.research');
    Route::get('/offering-strategy', fn() => view('offering.strategy'))->name('offering.strategy');
    Route::get('/offering-operation', fn() => view('offering.operation'))->name('offering.operation');
    Route::get('/offering-digital', fn() => view('offering.digital'))->name('offering.digital');

    Route::get('/offering-develop', fn() => view('offering.develop'))->name('offering.develop');
    Route::get('/offering-marketing', fn() => view('offering.marketing'))->name('offering.marketing');
    Route::get('/offering-merger', fn() => view('offering.merger'))->name('offering.merger');
    Route::get('/offering-procurement', fn() => view('offering.procurement'))->name('offering.procurement');

    Route::get('/offering-commodity', fn() => view('offering.commodity'))->name('offering.commodity');
    Route::get('/offering-service', fn() => view('offering.service'))->name('offering.service');
    Route::get('/offering-intelligence-marketplace', fn() => view('offering.intelligence-marketplace'))->name('offering.intelligence-marketplace');
    // ** Offering Routes **

    // ** Industry Routes **
    Route::get('/industry-aero', fn() => view('industry.aero'))->name('industry.aero');
    // ** Industry Routes **

    // ** Expert Routes **
    Route::get('/expert', fn() => view('expert.index'))->name('expert.index');
    // ** Expert Routes **

    // ** Expert Routes **
    Route::get('/about-us-team', fn() => view('about-us.team'))->name('about-us.team');
    Route::get('/about-us-contact', fn() => view('about-us.contact'))->name('about-us.contact');
    Route::get('/about-us-career', fn() => view('about-us.career'))->name('about-us.career');
    // ** Expert Routes **
});

