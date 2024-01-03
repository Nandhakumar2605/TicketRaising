<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function ( ) {
    return view('welcome');
});
// routes/web.php


Route::get('/tickets/home',[TicketController::class,'Home'])->name('tickets.home');
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');

//Admin routes
Route::get('/Admin/Adminhome',[AdminController::class,'AdminHome'])->name('Admin.Adminhome');
Route::get('/Admin/AdminCreate',[AdminController::class,'AdminCreate'])->name('Admin.AdminCreate');
Route::Post('/Admin',[AdminController::class,'store'])->name('Admin.store');
Route::get('/Admin/message',[AdminController::class,'ticketview'])->name('Admin.message');


Route::get('/Admin/AdminLogin',[LoginController::class,'AdminLogin'])->name('Admin.Adminlogin');
Route::post('authenticate',[LoginController::class,'authenticate']);