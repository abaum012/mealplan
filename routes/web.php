<?php

use App\Http\Controllers\RecipeController;
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

Route::middleware('auth')->group(function() {
    Route::resource('recipes', RecipeController::class)
        ->only('create','store','edit','update','destroy');
});
Route::resource('recipes', RecipeController::class)
    ->only('index', 'show')
    ->name('index', 'recipes');

require __DIR__.'/auth.php';
