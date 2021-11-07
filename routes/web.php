<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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
Route::view('/','home')->name('home');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function(){
        Route::view('/login','admin.login')->name('login');
        Route::post('/login',[AdminController::class, 'login'])->name('login');
        
    });
    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function(){
        Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
        // Route::post('/logout',[AdminController::class, 'logout'])->name('logout');
        Route::get('/logout',[AdminController::class, 'logout'])->name('logout');

        // ************** Students Section Start *********************

        // Route::get('/students',[AdminController::class, 'students'])->name('students');
        // Route::post('/students',[AdminController::class, 'students'])->name('students');
        // Route::get('/blocked-students',[AdminController::class, 'blockedStudents'])->name('blocked-students');
        // Route::post('/blocked-students',[AdminController::class, 'blockedStudents'])->name('blocked-students');
        // Route::get('/students/register',[AdminController::class, 'showRegistrationForm'])->name('students.register');
        // Route::post('/students/register',[AdminController::class, 'register'])->name('students.register');
        // Route::get('/students/edit/{reg?}',[AdminController::class, 'edit'])->name('students.edit');
        // Route::post('/students/edit/{reg?}',[AdminController::class, 'update'])->name('students.edit');
        // Route::delete('/students/delete/{reg?}',[AdminController::class, 'destroy'])->name('students.delete');
        // Route::post('/students/restore/{reg?}',[AdminController::class, 'restore'])->name('students.restore');
        // Route::get('/students/change-password/{reg?}',[AdminController::class, 'changeStudentPasswordForm'])->name('students.change-password');
        // Route::post('/students/change-password/{reg?}',[AdminController::class, 'changeStudentPassword'])->name('students.change-password');
        
         // ************** Students Section End *********************
    

        






    });
});
