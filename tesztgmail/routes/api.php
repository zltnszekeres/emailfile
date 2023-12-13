<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
use App\Http\Controllers\MailController;
use App\Http\Controllers\FileController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('send_mail', [MailController::class, 'index']);

Route::get('file_upload', [FileController::class, 'index']);
Route::post('file_upload', [FileController::class, 'store'])->name('file.store');

