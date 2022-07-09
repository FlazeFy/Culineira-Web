<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
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
Route::post('/create', [LandingController::class, 'create']);
Route::post('/login/postFeedback', [LandingController::class, 'postFeedback']);

//Recipe page.
Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe');
Route::post('/recipe/store', [RecipeController::class, 'store']);
Route::post('/recipe/storeFull', [RecipeController::class, 'storeFull']);
Route::post('/recipe/storeDependencies', [RecipeController::class, 'storeDependencies']);
Route::post('/recipe/update/{id}', [RecipeController::class, 'update']);
Route::post('/recipe/updateVisibility/{id}', [RecipeController::class, 'updateVisibility']);
Route::post('/recipe/destroy/{id}', [RecipeController::class, 'destroy']);

//Detail page.
Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');
Route::post('/detail/sendComment/{id}', [DetailController::class, 'sendComment']);
Route::post('/detail/likes/{id}', [DetailController::class, 'likes']);

//Profile page.
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
