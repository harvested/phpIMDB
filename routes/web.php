<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\UserController;

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

Route::get('/search', function(Request $request) {
	$search = $request->input('search');
	$searchController = new SearchController;
	return $searchController->search($search);
});

Route::get('/login', function() {
	return view('login');
})->name('login');

Route::get('/movie/{movie}', [MovieController::class, 'show'])->name('movie');
Route::get('/actor/{actor}', [ActorController::class, 'show'])->name('actor');
