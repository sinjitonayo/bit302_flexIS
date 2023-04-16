<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::post('/postLogin', [LoginController::class, 'postLogin']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('index');
    });
});
