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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/template', [App\Http\Controllers\SurveyController::class, 'index'])->name('template');
Route::get('/preview/{id}', [App\Http\Controllers\SurveyController::class, 'preview'])->name('preview');


Route::post('/survey', [App\Http\Controllers\SurveyController::class, 'create'])->name('survey');
Route::get('/survey/{id}', [App\Http\Controllers\SurveyController::class, 'show'])->name('survey_new');

Route::post('/survey/addquestion', [App\Http\Controllers\QuestionsController::class, 'add_question'])->name('add_question');
Route::post('/survey/addSection', [App\Http\Controllers\SectionsController::class, 'create'])->name('add_section');
Route::post('/survey/addPart', [App\Http\Controllers\PartsController::class, 'create'])->name('add_part');

Route::post('/survey/viewSection', [App\Http\Controllers\SectionsController::class, 'show'])->name('view_section');
Route::post('/survey/viewPart', [App\Http\Controllers\PartsController::class, 'show'])->name('view_part');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');






