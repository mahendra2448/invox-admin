<?php

use App\Http\Controllers\InputController;
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

Route::redirect('/', '/invapp/login', 301);
Route::redirect('/dashboard', '/inv/dashboard', 301);

Route::middleware(['auth'])->prefix('inv')->name('inv.')->group(function() {
    Route::view('/dashboard', 'dashboard')->name('dash');

    Route::controller(InputController::class)->group(function(){

    });
});

require __DIR__.'/auth.php';
