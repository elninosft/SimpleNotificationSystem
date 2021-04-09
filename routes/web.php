<?php

use App\Http\Controllers\PublishMessageController;
use App\Http\Controllers\SubscribeController;
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

Route::get('/publish-message', [PublishMessageController::class, 'publishMessage']);


Route::get('/subscribe-one', [SubscribeController::class, 'subscribeOne']);
Route::get('/subscribe-two', [SubscribeController::class, 'subscribeTwo']);
