<?php

use App\Http\Controllers\AdminSubjectController;
use App\Http\Controllers\AuthGeneralController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/questions',[HomeController::class,'questions'])->name('questions');

//Admin routes
Route::prefix('dashboard')->middleware(['auth','verified'])->group(function(){
    Route::get('/', [AuthGeneralController::class, 'index'])->name('dashboard');
    Route::resource('/subjects',AdminSubjectController::class);
    //save a past question to system
    Route::post('/pastQuestion',[AuthGeneralController::class, 'storeQuestion'])->name('pastQuestion.store');
});

require __DIR__.'/auth.php';