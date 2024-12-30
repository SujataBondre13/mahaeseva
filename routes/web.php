<?php

use App\Http\Controllers\Back_Controller;
use App\Http\Controllers\Contact_Controller;
use App\Http\Controllers\Front_Controller;
use App\Http\Controllers\Service_Controller;

use Illuminate\Support\Facades\Route;

// Admin
// Route::get('/admin-1', function () {
//     return view('admin\dashboard');
// });

// Dashboard
Route::get('/admin-1', [Back_Controller::class, 'Count']);

// Service CRUD (admin)
Route::get('/admin/service/list', [Service_Controller::class, 'List']);
Route::get('/admin/service/create', [Service_Controller::class, 'Create']);
Route::post('/admin/service/store', [Service_Controller::class, 'Store']);
Route::get('/admin/service/view/{id}', [Service_Controller::class, 'View']);
Route::get('/admin/service/delete/{id}', [Service_Controller::class, 'Destroy']);
Route::get('/admin/service/edit/{id}', [Service_Controller::class, 'Edit']);
Route::post('/admin/service/update', [Service_Controller::class, 'Update']);

// Contact CRUD (admin)
Route::get('/admin/contact/list', [Contact_Controller::class, 'List']);
Route::post('/admin/contact/store', [Contact_Controller::class, 'Store']);
Route::get('/admin/contact/delete/{id}', [Contact_Controller::class, 'Destroy']);


// Website
Route::get('/', [Front_Controller::class, 'Index_Services']);
Route::get('/contact', [Front_Controller::class, 'Contact']);
Route::get('/services', [Front_Controller::class, 'Service']);
Route::get('/about', [Front_Controller::class, 'About']);





