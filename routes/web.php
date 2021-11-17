
<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminController;
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


//movies related routes

//view all movies if authenticated
Route::get('/',  [MovieController::class, 'index'])->middleware('auth');

//create movie view
Route::get('/create', [MovieController::class, 'create'])->middleware('auth');;

//validate movie data and persist in database 
Route::post('/create', [MovieController::class, 'store']);

//edit movie view 
Route::get('/edit/{movie}', [MovieController::class, 'edit'])->middleware('auth');;

//validate and persist update  in DB
Route::post('/edit/{movie}', [MovieController::class, 'update']);

//delete movie
Route::post('/delete/{movie}', [MovieController::class, 'destroy']);


//user related routes

//login 

//view
Route::get('/login', [AdminController::class, 'loginView'])->name('login');

//auth and redirect
Route::post('/login', [AdminController::class, 'login']);

//logout
//logout and redirect to login
Route::post('/logout', [AdminController::class, 'logout']);


//registration
//view
Route::get('/register', [AdminController::class, 'create']);
//validation and persisting 
Route::post('/register', [AdminController::class, 'store']);


