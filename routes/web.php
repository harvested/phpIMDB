<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SearchController;

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

Route::get('/test', function() {
	return view('test');
});

Route::get('/search', function(Request $request) {
	$param = $request->all();
	var_dump($param); exit;
	$searchController = new SearchController;
	return $searchController->search($request);
});

Route::get('/actor/{actor}', [ActorController::class, 'show']);

