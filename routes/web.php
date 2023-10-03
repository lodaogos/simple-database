<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\JobsController;

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

Route::get('/', [DataController::class, 'index'])->name('data');

Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');

Route::get('/form', function() {
    return view('form');
})->name('form');

Route::post('/create', [DataController::class, 'create']);