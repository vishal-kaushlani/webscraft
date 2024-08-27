<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('frontend.home'); // Home page
})->name('home');

Route::get('/about', function () {
    return view('frontend.about'); // About page
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact'); // Contact page
})->name('contact');

Route::get('/services', function () {
    return view('frontend.services'); // Services page
})->name('services');

Route::get('/blog', function () {
    return view('frontend.blog'); // Blog page
})->name('blog');

Route::get('/portfolio', function () {
    return view('frontend.portfolio'); // Portfolio page
})->name('portfolio');

Route::get('/team', function () {
    return view('frontend.team'); // Team page
})->name('team');
Route::get('/service', function () {
    return view('frontend.team'); // Team page
})->name('service');
