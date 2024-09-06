<?php

use App\Http\Controllers\SendMailController;
use App\Jobs\SendNotificationJob;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/email/send', [SendMailController::class, 'store'])->name('send.email');

Route::get('/send-notification-to-all', function(){
    
});
