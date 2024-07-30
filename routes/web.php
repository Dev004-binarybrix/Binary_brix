<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.website.home');
})->name('home');

Route::get('/services', function () {
    return view('pages.website.services');
})->name('services');

Route::get('/custom-software-development', function () {
    return view('pages.website.services.custom-software');
})->name('custom-software');

Route::get('/web-application-development', function () {
    return view('pages.website.services.web-application');
})->name('web-application');

Route::get('/mobile-application-development', function () {
    return view('pages.website.services.mobile-application');
})->name('mobile-application');

Route::get('/high-tech-game-development', function () {
    return view('pages.website.services.high-tech-game');
})->name('high-tech-game');

Route::get('/cloud-based-development', function () {
    return view('pages.website.services.cloud-base-develpoment');
})->name('cloud-based');

Route::get('/dev-ops-development', function () {
    return view('pages.website.services.dev-ops');
})->name('dev-ops');

Route::get('/e-commerce-development', function () {
    return view('pages.website.services.ecommerence');
})->name('e-commerce');

Route::get('/ui-ux-design-and-development', function () {
    return view('pages.website.services.ui-ux');
})->name('ui-ux-design');

Route::get('/iot-development', function () {
    return view('pages.website.services.iot');
})->name('iot-development');

Route::get('/expert-qa-testing', function () {
    return view('pages.website.services.expert-qa-testing');
})->name('expert-qa-testing');

// Portfolio Routes

Route::get('/mobile-spendsail', function() {
    return view('pages.website.portfolio.portfolio-details-mobile-spendsail');
})->name('mobile-spendsail');

Route::get('/mobile-tropical', function() {
    return view('pages.website.portfolio.portfolio-details-mobile-tropical-bound');
})->name('mobile-tropical');

Route::get('/web-spendsail', function() {
    return view('pages.website.portfolio.portfolio-details-web-spendsail');
})->name('web-spendsail');

Route::get('/web-tropical', function() {
    return view('pages.website.portfolio.portfolio-details-web-tropicalbound');
})->name('web-tropical');
