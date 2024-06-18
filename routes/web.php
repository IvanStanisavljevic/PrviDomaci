<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;



Route::view("/about", view:"about");

Route::get("/", [HomepageController::class, "index"]);
Route::get("/shop", [\App\Http\Controllers\ShopController::class, "index"]);

// Kada se dođe na 127.0.0.1:8000/contactphp
// -> ucitaj ContactController
// -> iz tog controllera  pozovi f-ju index
Route::get("/contact", [\App\Http\Controllers\ContactController::class, 'index']);


Route::get("/admin/all-contacts", [\App\Http\Controllers\ContactController::class, "getAllContacts"]);
