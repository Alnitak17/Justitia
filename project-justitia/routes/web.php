<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigatieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PhotoController;

Route::controller(NavigatieController::class)->group(function () {
    //Route::get('naam blade file', 'method naam in SpelerController')->name('Leuke naam');
    Route::get('/home', 'index')->name('homeNav');
    Route::get('/quiz', 'quiz')->name('quizNav');
    Route::get('/rechter', 'rechter')->name('rechterNav');
    Route::get('/matroos', 'matroos')->name('matroosNav');
    Route::get('/hint', 'hint')->name('hintNav');
    Route::get('/oordeel', 'oordeel')->name('oordeelNav');
    Route::get('/resultaat', 'resultaat')->name('resultaatNav');
    Route::get('/sluiten', 'sluiten')->name('sluitenNav');
    Route::get('/credits', 'credits')->name('creditsNav');
    Route::get('/foto', 'foto')->name('fotoNav');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin', [AdminController::class, 'show']);
Route::get('/adminquiz', [AdminController::class, 'showQuiz']);
Route::post('/adminquiz', [AdminController::class, 'createQuestion']);
Route::post('/adminquiz/answer', [AdminController::class, 'createAnswer']);
Route::post('/adminquiz/deleteAnswer', [AdminController::class, 'deleteAnswer']);
Route::post('/adminquiz/deleteQuestion', [AdminController::class, 'deleteQuestion']);

Route::get('/adminphotos', [PhotoController::class, 'show']);
Route::post('/adminphotos', [PhotoController::class, 'addPhoto']);
