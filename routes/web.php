<?php

use App\Http\Controllers\QuestionController;
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


Route::get('/questions', [QuestionController::class, 'index']);
Route::get('/questions/create', [QuestionController::class, 'create']);
Route::post('/questions', [QuestionController::class, 'store']);
Route::get('/questions/{id}', [QuestionController::class, 'show']);
Route::get('/questions/{id}/edit', [QuestionController::class, 'edit']);
Route::put('/questions/{id}', [QuestionController::class, 'update']);
Route::delete('/questions/{id}', [QuestionController::class, 'destroy']);
