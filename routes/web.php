<?php

use Illuminate\Support\Facades\Route;

// =========================
// HOME PAGES
// =========================
Route::get('/', fn() => view('index'));
Route::get('/home-2', fn() => view('index-2'));
Route::get('/home-3', fn() => view('index-3'));
Route::get('/home-4', fn() => view('index-4'));
Route::get('/home-5', fn() => view('index-5'));
Route::get('/home-6', fn() => view('index-6'));
Route::get('/home-7', fn() => view('index-7'));
Route::get('/home-8', fn() => view('index-8'));

// =========================
// ABOUT
// =========================
Route::get('/about-1', fn() => view('about-us-v1'));
Route::get('/about-2', fn() => view('about-us-v2'));

// =========================
// SERVICES
// =========================
Route::get('/services-1', fn() => view('service-v1'));
Route::get('/services-2', fn() => view('service-v2'));
Route::get('/service-details', fn() => view('service-details'));

// =========================
// TEAM
// =========================
Route::get('/team-1', fn() => view('team-v1'));
Route::get('/team-2', fn() => view('team-v2'));
Route::get('/team-details', fn() => view('team-details'));

// =========================
// PROJECTS
// =========================
Route::get('/projects-1', fn() => view('project-v1'));
Route::get('/projects-2', fn() => view('project-v2'));
Route::get('/projects-3', fn() => view('project-v3'));

Route::get('/project-details-1', fn() => view('project-details-v1'));
Route::get('/project-details-2', fn() => view('project-details-v2'));

// =========================
// SHOP
// =========================
Route::get('/shop', fn() => view('shop-grid'));
Route::get('/shop-details', fn() => view('shop-details'));
Route::get('/cart', fn() => view('cart'));
Route::get('/checkout', fn() => view('checkout'));

// =========================
// BLOG
// =========================
Route::get('/blog-1', fn() => view('blog-v1'));
Route::get('/blog-2', fn() => view('blog-v2'));
Route::get('/blog-details', fn() => view('blog-details'));

// =========================
// OTHER PAGES
// =========================
Route::get('/testimonial', fn() => view('testimonial'));
Route::get('/pricing', fn() => view('pricing'));
Route::get('/faq', fn() => view('faq'));
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/404', fn() => view('404'));