<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students/new', function () {
    return view('students.new');
});

Route::get('/students', [StudentController::class,'index'])->name('sutends.index');
Route::get('/students/create',[StudentController::class,'create']);
Route::post('/students',[StudentController::class,'store'])->name('students.store');
Route::post('/students/new',[StudentController::class,'store'])->name('students.store');

Route::get('/seconde',[GroupController::class,'showSeconde']);
Route::get('/premiere',[GroupController::class,'showPremière']);
Route::get('/terminale',[GroupController::class,'showTerminale']);