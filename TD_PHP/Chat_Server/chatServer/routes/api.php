<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatCtrl;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/channels', [ChatCtrl::class, 'getChannels']);

Route::get('channels/{chatRoomId}/messages', [ChatCtrl::class, 'getChatRoomIdMessages']);

Route::post('channels/{chatRoomId}/messages', [ChatCtrl::class, 'postMessage']);