<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PhotoController;
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
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'show']);
Route::get('/adminquiz', [AdminController::class, 'showQuiz']);
Route::post('/adminquiz', [AdminController::class, 'createQuestion']);
Route::post('/adminquiz/answer', [AdminController::class, 'createAnswer']);
Route::post('/adminquiz/deleteAnswer', [AdminController::class, 'deleteAnswer']);
Route::post('/adminquiz/deleteQuestion', [AdminController::class, 'deleteQuestion']);

Route::get('/adminphotos', [PhotoController::class, 'show']);
Route::post('/adminphotos', [PhotoController::class, 'addPhoto']);
