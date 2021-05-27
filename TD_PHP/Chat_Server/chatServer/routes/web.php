<?php

use App\Http\Controllers\ChatCtrl;
use App\Models\Chat;
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

Route::get("/home", [ChatCtrl::class, "home"]);

Route::get("/chat/{idChannel}", [ChatCtrl::class, "showMessages"]);

Route::post('/login', [ChatCtrl::class, 'login']);
