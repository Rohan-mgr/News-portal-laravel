<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsArticleController;
use App\Http\Controllers\todoListController;

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

Route::get('/', [NewsArticleController::class, 'index'])->name("home")->middleware(['auth']);
Route::get('/login', [NewsArticleController::class, "handleLogin"])->name("login");
Route::get('/signup', [NewsArticleController::class, "handleSignup"])->name("signup");
Route::post('/signup', [NewsArticleController::class, "handleRegistration"])->name("signup");
Route::post("/login", [NewsArticleController::class, "handlePostLogin"])->name("login");
Route::get("/logout", [NewsArticleController::class, "handleLogout"])->name("logout");

Route::post('/save-todo', [todoListController::class, 'saveTodo'])->name("saveTodo")->middleware(['auth']);
Route::get("/delete/{id}", [todoListController::class, 'deleteItem'])->middleware(['auth']);
Route::get("/edit/{id}", [todoListController::class, 'EditItem'])->middleware(['auth']);
Route::get("/edit", function() {return redirect("/");});
Route::post("/edit", [todoListController::class, 'updateItem'])->middleware(['auth']);