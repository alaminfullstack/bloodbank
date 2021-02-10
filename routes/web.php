<?php

use App\Http\Controllers\FrontEndController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/',[FrontEndController::class,'Home'])->name('Home');
Route::get('/dashboard',[FrontEndController::class,'Home'])->name('Home')->middleware(['auth:sanctum', 'verified']);
Route::get('/home',[FrontEndController::class,'Home'])->name('Home')->middleware(['auth:sanctum', 'verified']);
Route::get('/request-for-blood',[FrontEndController::class,'RequestForBlood'])->name('RequestForBlood');
Route::get('/requested-blood',[FrontEndController::class,'RequestedBlood'])->name('RequestedBlood');
Route::get('/blood-donor',[FrontEndController::class,'BloodDonor'])->name('BloodDonor');
Route::get('/blog',[FrontEndController::class,'Blog'])->name('Blog');
