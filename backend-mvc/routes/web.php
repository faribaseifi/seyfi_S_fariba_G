<?php

use App\Controllers\BasketController;
use App\Controllers\ProductController;
use App\Core\Routing\Route;

Route::get('/',[ProductController::class,'index']); // get all products
Route::get('/craete_product',[ProductController::class,'store']); // create 10 product

Route::get('/basket',[BasketController::class,'index']); //show items in basket
Route::post('/add-to-basket',[BasketController::class,'store']); //add product to basket
Route::post('/update-basket',[BasketController::class,'update']); //increase-decrease-remove item from basket
Route::post('/delete-basket',[BasketController::class,'delete_basket']); //delete all items from basket
