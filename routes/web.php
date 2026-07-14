<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;

// =========================
// SITEMAP
// =========================
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');



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
Route::get('/home-2-new', fn() => view('home-2'));

// =========================
// ABOUT
// =========================
Route::get('/about', fn() => view('about-us'));
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
Route::get('/privacy-policy', fn() => view('privacy-policy'))->name('privacy.policy');
Route::get('/terms-and-conditions', fn() => view('terms-and-conditions'))->name('terms.conditions');


use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminDashboardController;

Route::get('/connecters-list', function () {
    return view('connecters-list');
})->name('connecters.list');

Route::post('/connecters-list/apply', [ApplicationController::class, 'submit'])->name('connecters.apply');

Route::get('/become-a-sponser', function () {
    return view('become-a-sponser');
});
Route::post('/become-a-sponser/apply', [ApplicationController::class, 'submitSponsor'])->name('sponsor.apply');

Route::get('/become-a-partner', function () {
    return view('become-a-partner');
});
Route::post('/become-a-partner/apply', [ApplicationController::class, 'submitPartner'])->name('partner.apply');

Route::get('/become-a-speaker', function () {
    return view('become-a-speaker');
});
Route::get('/career', [App\Http\Controllers\JobController::class, 'careers'])->name('careers.index');
Route::get('/internship', [App\Http\Controllers\JobController::class, 'internships'])->name('internships.index');
Route::get('/career/{slug}', [App\Http\Controllers\JobController::class, 'careerDetail'])->name('careers.detail');
Route::get('/internship/{slug}', [App\Http\Controllers\JobController::class, 'internshipDetail'])->name('internships.detail');
Route::post('/jobs/apply', [ApplicationController::class, 'submitJobApplication'])->name('jobs.apply');
Route::get('/events', fn() => view('events'));
Route::get('/event-details/{slug?}', function ($slug = 'c-suite-strategy-transcending-market-vulnerabilities') {
    return view('event-details', compact('slug'));
});
Route::post('/event-details/apply', [ApplicationController::class, 'submitRsvp'])->name('rsvp.apply');

Route::post('/contact/submit', [ApplicationController::class, 'submitContact'])->name('contact.submit');
// =========================
// ADMIN — Auth
// =========================
Route::get('/admin/login',  [AdminLoginController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Protected admin routes
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard/{section?}', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Connectors API (real DB)
    Route::get('/admin/api/connectors', [AdminDashboardController::class, 'connectors'])->name('admin.api.connectors');
    Route::post('/admin/api/connectors/{id}', [AdminDashboardController::class, 'updateConnector'])->name('admin.api.connectors.update');

    // Partners API (real DB)
    Route::get('/admin/api/partners', [AdminDashboardController::class, 'partners'])->name('admin.api.partners');
    Route::post('/admin/api/partners/{id}', [AdminDashboardController::class, 'updatePartner'])->name('admin.api.partners.update');

    // Sponsors API (real DB)
    Route::get('/admin/api/sponsors', [AdminDashboardController::class, 'sponsors'])->name('admin.api.sponsors');
    Route::post('/admin/api/sponsors/{id}', [AdminDashboardController::class, 'updateSponsor'])->name('admin.api.sponsors.update');

    // Jobs & Applications API (real DB)
    Route::get('/admin/api/posted-jobs', [AdminDashboardController::class, 'postedJobs'])->name('admin.api.posted-jobs');
    Route::post('/admin/api/posted-jobs', [AdminDashboardController::class, 'savePostedJob'])->name('admin.api.posted-jobs.create');
    Route::post('/admin/api/posted-jobs/{id}', [AdminDashboardController::class, 'savePostedJob'])->name('admin.api.posted-jobs.update');
    Route::delete('/admin/api/posted-jobs/{id}', [AdminDashboardController::class, 'deletePostedJob'])->name('admin.api.posted-jobs.delete');
    Route::get('/admin/api/job-applications', [AdminDashboardController::class, 'jobApplications'])->name('admin.api.job-applications');
    Route::post('/admin/api/job-applications/{id}', [AdminDashboardController::class, 'updateJobApplication'])->name('admin.api.job-applications.update');

    // Contacts API
    Route::get('/admin/api/contacts', [AdminDashboardController::class, 'contacts'])->name('admin.api.contacts');
    Route::post('/admin/api/contacts/{id}', [AdminDashboardController::class, 'updateContactStatus'])->name('admin.api.contacts.update');

    // Jobs full page views
    Route::get('/admin/posted-jobs/create', [AdminDashboardController::class, 'createJobPage'])->name('admin.posted-jobs.create-page');
    Route::get('/admin/posted-jobs/edit/{id}', [AdminDashboardController::class, 'editJobPage'])->name('admin.posted-jobs.edit-page');
    Route::post('/admin/posted-jobs/save', [AdminDashboardController::class, 'savePostedJobForm'])->name('admin.posted-jobs.save-form');
    Route::post('/admin/posted-jobs/update/{id}', [AdminDashboardController::class, 'updatePostedJobForm'])->name('admin.posted-jobs.update-form');
});

Route::get('/check-db', function() {
    return response()->json(\App\Models\Contact::latest()->get());
});