<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\SupplierController;
use App\Models\Ingredient;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [HomeController::class, "index"]);

Route::get('/users', [AdminController::class, 'user'])->name('users');



// Show the form (GET request)
Route::get('/adduser', [AdminController::class, 'showAddUserForm'])->name('showAddUserForm');

// Handle form submission (POST request)
Route::post('/adduser', [AdminController::class, 'adduser'])->name('adduser');


Route::get('/edituser/{id}', [AdminController::class, 'editUser'])->name('edituser');
Route::post('/updateuser/{id}', [AdminController::class, 'updateUser'])->name('updateuser');

Route::get('/usersearch', [AdminController::class, 'usersearch'])->name('usersearch');


Route::delete('/deletemenu/{id}', [AdminController::class, 'deletemenu'])->name('deletemenu');


Route::get("/foodmenu", [AdminController::class, "foodmenu"])->name('foodmenu');

Route::post("/uploadfood", [AdminController::class, "upload"]);

Route::get("/deleteuser/{id}", [AdminController::class, "deleteuser"]);

Route::get("/updateview/{id}", [AdminController::class, "updateview"]);

Route::post("/update/{id}", [AdminController::class, "update"]);

Route::post("/reservation", [AdminController::class, "reservation"]);

Route::get("/recipes", [AdminController::class, "recipes"]);




Route::get("/viewreservation", [AdminController::class, "viewreservation"]);

Route::get("/viewchef", [AdminController::class, "viewchef"]);

Route::post("/uploadchef", [AdminController::class, "uploadchef"]);

Route::get("/updatechef/{id}", [AdminController::class, "updatechef"]);

Route::post("/updatefoodchef/{id}", [AdminController::class, "updatefoodchef"]);

Route::get("/deletechef/{id}", [AdminController::class, "deletechef"]);

Route::post("/addcart/{id}", [HomeController::class, "addcart"]);

Route::get("/showcart/{id}", [HomeController::class, "showcart"]);

Route::get("/remove/{id}", [HomeController::class, "remove"]);





Route::post("/orderconfirm", [HomeController::class, "orderconfirm"]);

Route::get("/orders", [AdminController::class, "orders"]);

Route::get("/on_the_way/{id}", [AdminController::class, "on_the_way"])->name('on_the_way');

Route::get("/delivered/{id}", [AdminController::class, "delivered"])->name('delivered');

// Route::get("/print_pdf/{id}",[AdminController::class,"print_pdf"])->middleware(['auth', 'admin']);

// routes/web.php
Route::get('/print_pdf/{id}', [AdminController::class, 'print_pdf'])->name('print_pdf');


Route::get("/search", [AdminController::class, "search"]);

Route::get('/myorders', [HomeController::class, 'myorders']);

Route::get('/ingredients', [IngredientController::class, 'index']);


// Route::post('/adduser', [HomeController::class, 'store'])->name('adduser');

Route::prefix('admin')->middleware('auth', 'role:admin')->group(function () {
    Route::resource('suppliers', SupplierController::class);
});

Route::get('/suppliers', [SupplierController::class, 'index'])->name('admin.suppliers');

// Route::get('/addsuppliers', [SupplierController::class, 'addsuppliers'])->name('admin.addsuppliers');

// Route to show the form for adding a new supplier
Route::get('/addsuppliers', [SupplierController::class, 'showAddSupplierForm'])->name('admin.addsuppliers.form');

// Route to handle the form submission
Route::post('/addsuppliers', [SupplierController::class, 'storeSupplier'])->name('admin.addsuppliers');

Route::get('/suppliers/{id}/edit', [SupplierController::class, 'edit'])->name('admin.edit');

Route::put('/suppliers/{id}', [SupplierController::class, 'update'])->name('admin.updatesuppliers');

// In web.php or routes file

Route::delete('/suppliers/{id}', [SupplierController::class, 'destroy'])->name('admin.delete');


Route::get('/analysisorders-api', [OrderController::class, 'analysisorders_api']);
Route::get('/analysisorders', [OrderController::class, 'index']);
Route::get('/analysisorders/search', [OrderController::class, 'search']);


// Route::get('/test-email', function () {
//     $order = \App\Models\Order::first(); // or use a specific order ID
//     Mail::to($order->email)->send(new \App\Mail\OrderStatusChanged($order));
//     return 'Test email sent!';
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});




































Route::controller(HomeController::class)->group(function () {
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});


Route::get("/redirects", [HomeController::class, "redirects"]);

Route::get("/Addfoodmenu", function () {
    return view('admin.Addfoodmenu');
})->name('AddFood');

Route::get("/Addchef", function () {
    return view('admin.Addchef');
})->name('AddChef');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [HomeController::class, "redirects"])->name('dashboard');
