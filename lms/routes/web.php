<?php
use App\Http\Controllers\StudentController; //add reference for creating methods 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'students/trash/{id}',
    [StudentController::class, 'trash']
)->name('students.trash'); //this method/route is a soft delete: deletes from view, but not from db, and also logged deletedAt

Route::get(
    'students/trashed',
    [StudentController::class, 'trashed']
)->name('students.trashed'); //accesses all deleted entries

Route::get(
    'students/restore/{id}',
    [StudentController::class, 'restore']
)->name('students.restore'); //restores from deleted

Route::resource('students', StudentController::class); // function that adds method