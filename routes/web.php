<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
Route::middleware('guest')->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'create'])
                ->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

});

Route::middleware('auth')->group(function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/admin', function(){
            return view('admin.index');
        });
    });
    Route::group(['middleware' => ['role:teacher']], function () {
        Route::get('/teacher', function(){
            return view('teacher.index');
        });
    });
    Route::group(['middleware' => ['role:student']], function () {
        Route::get('/student', function(){
            return view('student.index');
        });
    });

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});