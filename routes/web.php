<?php

use Illuminate\Support\Facades\Route;

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

Route::inertia('/', 'Homepage');
Route::inertia('/properties', 'Properties');
Route::inertia('/landlords', 'Landlords');
Route::inertia('/tenants', 'Tenants');
Route::inertia('/offices', 'Offices');
Route::inertia('/users', 'Users');
Route::inertia('/areas', 'Areas');
