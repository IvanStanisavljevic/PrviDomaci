<?php

use Illuminate\Support\Facades\Route;

Route::view("/", view:"welcome");
Route::view("/shop", view:"shop");
Route::view("/about", view:"about");
Route::view("/contact", view:"contact");

