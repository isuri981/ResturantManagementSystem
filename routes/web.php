<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[HomeController::class,"index"]);

Route::get('/users', [AdminController::class, 'user'])->name('users');

Route::post('/adduser', [AdminController::class, 'adduser'])->name('adduser');

Route::delete('/deletemenu/{id}', [AdminController::class, 'deletemenu'])->name('deletemenu');


Route::get("/foodmenu",[AdminController::class,"foodmenu"])->name('foodmenu');

Route::post("/uploadfood",[AdminController::class,"upload"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::post("/update/{id}",[AdminController::class,"update"]);

Route::post("/reservation",[AdminController::class,"reservation"]);

Route::get("/viewreservation",[AdminController::class,"viewreservation"]);

Route::get("/viewchef",[AdminController::class,"viewchef"]);

Route::post("/uploadchef",[AdminController::class,"uploadchef"]);

Route::get("/updatechef/{id}",[AdminController::class,"updatechef"]);

Route::post("/updatefoodchef/{id}",[AdminController::class,"updatefoodchef"]);

Route::get("/deletechef/{id}",[AdminController::class,"deletechef"]);

Route::post("/addcart/{id}",[HomeController::class,"addcart"]);

Route::get("/showcart/{id}",[HomeController::class,"showcart"]);

Route::get("/remove/{id}",[HomeController::class,"remove"]);

Route::post("/orderconfirm",[HomeController::class,"orderconfirm"]);

Route::get("/orders",[AdminController::class,"orders"]);

Route::get("/on_the_way/{id}",[AdminController::class,"on_the_way"])->middleware(['auth', 'admin']);

Route::get("/delivered/{id}",[AdminController::class,"delivered"])->middleware(['auth', 'admin']);

Route::get("/print_pdf/{id}",[AdminController::class,"print_pdf"])->middleware(['auth', 'admin']);


Route::get("/search",[AdminController::class,"search"]);











Route::controller(HomeController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});


Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get("/Addfoodmenu", function (){
    return view ('admin.Addfoodmenu');
})->name('AddFood');

Route::get("/Addchef", function (){
    return view ('admin.Addchef');
})->name('AddChef');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[HomeController::class,"redirects"])->name('dashboard');
    
