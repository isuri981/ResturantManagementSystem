<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[HomeController::class,"index"]);

Route::get("/users",[AdminController::class,"user"]);

Route::get("/foodmenu",[AdminController::class,"foodmenu"])->name('foodmenu');

Route::post("/uploadfood",[AdminController::class,"upload"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get("/Addfoodmenu", function (){
    return view ('admin.Addfoodmenu');
})->name('AddFood');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[HomeController::class,"redirects"])->name('dashboard');
    
