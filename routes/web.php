<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/cache', function() {
    Artisan::call('cache:clear');
  
    dd("Cache Clear All");
});


Auth::routes();

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/jobs', [PagesController::class, 'jobs'])->name('jobs');
Route::get('/job_details/{id}', [PagesController::class, 'job_details'])->name('job_details');
Route::get('/about_us', [PagesController::class, 'about_us'])->name('about_us');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/store_message', [ContactController::class, 'store_message'])->name('store_message');
Route::get('/category/{id}', [PagesController::class, 'category'])->name('category');

//jobs
Route::get('/my_jobs', [JobController::class, 'my_jobs'])->name('my_jobs');
Route::get('/add_job', [JobController::class, 'add_job'])->name('add_job');
Route::post('/store_job', [JobController::class, 'store_job']);
Route::get('/edit_job/{id}', [JobController::class, 'edit_job'])->name('edit_job');
Route::post('/update_job/{id}', [JobController::class, 'update_job']);
Route::get('/delete_job/{id}', [JobController::class, 'delete_job']);


Route::get('/apply_job/{id}', [JobController::class, 'apply_job']);
Route::get('/applied_jobs', [JobController::class, 'applied_jobs'])->name('applied_jobs');
Route::get('/applicant_list/{id}', [JobController::class, 'applicant_list'])->name('applicant_list');

//users
Route::get('/profile', [UsersController::class, 'profile'])->name('profile');
Route::post('/update_profile', [UsersController::class, 'update_profile'])->name('update_profile');

//admin
Route::get('/adminLogin', [AdminsController::class, 'login'])->name('adminLogin');
Route::post('/adminLoginPage', [AdminsController::class, 'loginPage'])->name('adminLoginPage');
Route::get('/adminDashboard', [AdminsController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('/categories', [AdminsController::class, 'categories'])->name('categories');
Route::post('/add_categories', [AdminsController::class, 'add_categories'])->name('add_categories');

Route::get('/job_list', [AdminsController::class, 'job_list'])->name('job_list');
Route::get('/admin_contacts', [AdminsController::class, 'admin_contacts'])->name('admin_contacts');
