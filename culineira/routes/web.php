<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\Browse\ListController;

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

//Landing page.
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
Route::post('/detail/updateList/{id}', [DetailController::class, 'updateList']);
Route::post('/detail/forwardRecipe/{id}', [DetailController::class, 'forwardRecipe']);

//Profile page.
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/updateSocmed', [ProfileController::class, 'updateSocmed']);
Route::post('/profile/updateProfile', [ProfileController::class, 'updateProfile']);
Route::post('/profile/updateImage', [ProfileController::class, 'updateImage']);

//My kitchen page.
Route::get('/kitchen', [KitchenController::class, 'index'])->name('kitchen');
Route::post('/kitchen/addRecipeToList', [KitchenController::class, 'addRecipeToList']);
Route::post('/kitchen/addNewList', [KitchenController::class, 'addNewList']);
Route::post('/kitchen/addItemShelf', [KitchenController::class, 'addItemShelf']);
Route::post('/kitchen/deleteList', [KitchenController::class, 'deleteList']);
Route::post('/kitchen/deleteItemShelf', [KitchenController::class, 'deleteItemShelf']);
Route::post('/kitchen/updateItemShelf/{id}', [KitchenController::class, 'updateItemShelf']);
Route::post('/kitchen/starred/{id}', [KitchenController::class, 'starred']);

//Browse page.
    //List page.
    Route::get('/kitchen/browse-list/{id}', [ListController::class, 'index']);
    Route::post('/kitchen/browse-list/starred/{id}', [ListController::class, 'starred']);
    Route::post('/kitchen/browse-list/update/{id}', [ListController::class, 'update']);
    Route::post('/kitchen/browse-list/destroy/{id}', [ListController::class, 'destroy']); //For delete list
    Route::post('/kitchen/browse-list/deleteRecipeList/{id}', [ListController::class, 'deleteRecipeList']); //For delete recipe in a list
    Route::post('/kitchen/browse-list/addRecipeToList/{id}', [ListController::class, 'addRecipeToList']);

//Community page.
Route::get('/community', [CommunityController::class, 'index'])->name('community');
Route::post('/community/openChat/{id}', [CommunityController::class, 'openChat']);
Route::post('/community/sendChat/{id}', [CommunityController::class, 'sendChat']);
Route::post('/community/createGroup', [CommunityController::class, 'createGroup']);
Route::post('/community/editGroup/{id}', [CommunityController::class, 'editGroup']);
Route::post('/community/promote/{id}', [CommunityController::class, 'promote']);
Route::post('/community/demote/{id}', [CommunityController::class, 'demote']);
Route::post('/community/kick/{id}', [CommunityController::class, 'kick']);
Route::post('/community/invite/{id}', [CommunityController::class, 'invite']);
Route::post('/community/leave/{id}', [CommunityController::class, 'leave']);
Route::post('/community/uninvite/{id}', [CommunityController::class, 'uninvite']);
Route::post('/community/deleteGroup/{id}', [CommunityController::class, 'deleteGroup']);

