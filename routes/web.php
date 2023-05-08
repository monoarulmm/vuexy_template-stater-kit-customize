<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\laravel_example\UserManagement;
use App\Http\Controllers\FormController;
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

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');
Route::get('/list', [FormController::class, 'index'])->name('list');
Route::get('single/{id}', [FormController::class, 'show'])->name('single');

Route::get('update_form/{id}', [FormController::class, 'edit'])->name('update_form');

Route::patch('update_form/{id}', [FormController::class, 'update'])->name('update');

Route::delete('destroy/{id}', [FormController::class, 'destroy'])->name('destroy');

Route::get('print_pdf/{id}', [FormController::class, 'print_pdf']);

Route::get('show_pdf/{id}', [FormController::class, 'show_pdf']);

// authentication
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name(
  'auth-register-basic'
);

Route::get('/form', [FormController::class, 'create'])->name('form_disply');
Route::post('form_store', [FormController::class, 'store'])->name('form_store');

// Route::group(['middleware' => ['role:admin']], function () {

//     Route::post('form_store', [FormController::class, 'store'])->middleware('auth')->name('form_store');
// });
// Route::get('form', [FormController::class, 'create'])->middleware('verified')->name('form_display');

Route::get('form', [FormController::class, 'create'])->name('form-display');
// Route::post('form_store', [FormController::class, 'store'])->middleware('verified')->name('form_store');
// Route::post('/change_setting', $controller_path . '\pages\AccountSettingsAccount@index')->name('change_setting');
