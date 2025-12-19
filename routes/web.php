<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentdbController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ImageController;

Route::get('show/{id}', function($id) {
    return "สวัสดีชาวโลก รหัส:".$id;
});

Route::get("/", [TestController::class, 'main']);
Route::get("people", [TestController::class, 'people']);
Route::get("major", [TestController::class, 'major']);
Route::get("contact", [TestController::class, 'contact']);

Route::get("students", [StudentController::class, 'index']);
Route::post('students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('students/delete', [StudentController::class, 'delete'])->name('students.delete');
Route::post('students/update', [StudentController::class, 'update'])->name('students.update');

Route::resource('studentdb', StudentdbController::class);

Route::resource('teachers', TeacherController::class);

Route::get('upload', [ImageController::class, 'index']);
Route::post('upload', [ImageController::class, 'store'])->name('upload.store');