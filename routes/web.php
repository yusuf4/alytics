<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [FormController::class, 'index']);
Route::post('/createform', [FormController::class, 'createForm']);


// Admin Panel
// ======= Список url-ов  ============
Route::get('/admin', [AdminController::class, 'index']);

//  ======== Список проверок========
Route::get('/admin/check', [AdminController::class, 'checkP']);
