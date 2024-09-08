<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FormController::class,'index'])->name('home');
Route::post('/submit',[FormController::class,'store'])->name('submit');
