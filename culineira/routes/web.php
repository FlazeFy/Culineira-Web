<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
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

// Route::get('/', function () {
//     return view('RecipePage');
// });

//Route::resource('/recipe', RecipeController::class);
Route::get('/', [LandingController::class, 'index']);
Route::post('/login', [LandingController::class, 'login']);
Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe');
Route::post('/recipe/store', [RecipeController::class, 'store']);
Route::post('/recipe/storeFull', [RecipeController::class, 'storeFull']);
Route::post('/recipe/storeDependencies', [RecipeController::class, 'storeDependencies']);
Route::post('/recipe/update/{id}', [RecipeController::class, 'update']);
Route::post('/recipe/updateVisibility/{id}', [RecipeController::class, 'updateVisibility']);
Route::post('/recipe/destroy/{id}', [RecipeController::class, 'destroy']);
