<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/add-ticket', [App\Http\Controllers\TicketController::class, 'addTicket'])->name('add.ticket');
Route::get('/ticket', [App\Http\Controllers\TicketController::class, 'ticket'])->name('ticket');
Route::get('/ticket-view{ticket_id}', [App\Http\Controllers\TicketController::class, 'ticketView'])->name('ticket.view');
Route::get('/close{ticket_id}', [App\Http\Controllers\TicketController::class, 'close'])->name('ticket.close');
Route::post('/confirm{ticket_id}', [App\Http\Controllers\TicketController::class, 'confirm'])->name('ticket.confirm');
