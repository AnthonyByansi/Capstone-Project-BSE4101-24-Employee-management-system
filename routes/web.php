<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;

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


Route::get('/employee', 'App\Http\Controllers\employeeController@employee')->middleware(['auth','isAdmin']);;
Route::get('/index', 'App\Http\Controllers\employeeController@index') ->middleware(['auth']);;
Route::get('/', function () {
    return view('first');
});
Route::get('/addEmployee','App\Http\Controllers\employeeController@addEmp')->middleware(['auth','isAdmin']);
Route::get('/employee-team', 'App\Http\Controllers\employeeController@team')->middleware(['auth','isAdmin']);;
Route::get('/employeeDashboard', 'App\Http\Controllers\employeeController@employeeDash')->middleware('auth');
Route::get('/profile', function () {

    return view('profile');
})->middleware('auth');

Route::get('/profile-detail', 'App\Http\Controllers\employeeController@detail')->middleware('auth');
Route::get('/emp-profile-detail', 'App\Http\Controllers\employeeController@empdetail')->middleware('auth');
Route::get('/profile-settings', 'App\Http\Controllers\employeeController@profileset')->middleware('auth');
Route::get('/emp-profile-settings', function () {
    return view('emp-profile-settings');
})->middleware('auth');
Route::get('/leave', 'App\Http\Controllers\employeeController@leave')->middleware(['auth']);
Route::post('/setpass', 'App\Http\Controllers\employeeController@setpass')->middleware(['auth']);
Route::get('/emp-leave', 'App\Http\Controllers\employeeController@empleave');
Route::get('/edit-form', function () {
    return view('edit-form');
})->name('edit')->middleware(['auth','isAdmin']);

Route::post('/data', 'App\Http\Controllers\employeeController@store')->middleware(['auth','isAdmin']);
Route::post('/leave-data', 'App\Http\Controllers\employeeController@leaveStore')->middleware('auth');
Route::post('/update/{id}', 'App\Http\Controllers\employeeController@update')->middleware(['auth','isAdmin']);
Route::get('/approve/{id}', 'App\Http\Controllers\employeeController@approve')->middleware(['auth','isAdmin']);
Route::get('/makeadmin/{id}', 'App\Http\Controllers\employeeController@admin')->middleware(['auth','isAdmin']);
Route::get('/delete/{id}', 'App\Http\Controllers\employeeController@delete')->middleware(['auth','isAdmin']);
Route::get('/delete-user/{id}', 'App\Http\Controllers\employeeController@deleteuser')->middleware(['auth','isAdmin']);

Route::get('/leave-delete/{id}', 'App\Http\Controllers\employeeController@deleteleave');
Route::get('/edit/{id}', 'App\Http\Controllers\employeeController@edit')->middleware(['auth','isAdmin']);;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
