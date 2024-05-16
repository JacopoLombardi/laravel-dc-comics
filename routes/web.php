<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\Pagecontroller;

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



// Home Page
Route::get('/', [Pagecontroller::class, 'index'])->name('homePage');


///////////////////////////////////


// NewPage
Route::get('/newPage', [Pagecontroller::class, 'newPage'])->name('newPage');




