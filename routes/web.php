<?php

use App\Http\Controllers\layoutController;
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
    return view('user.layout');
});

Route::get('/octopus/index',[layoutController::class, 'index']);
Route::get('/octopus/list',[layoutController::class, 'list']);
Route::get('/octopus/forms', [layoutController::class, 'form']);
Route::get('/octopus/calendar', [layoutController::class, 'calendar']);
Route::get('/octopus/ui-elements-modals', [layoutController::class, 'ui']);
