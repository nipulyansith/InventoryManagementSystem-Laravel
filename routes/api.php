<?php

use App\Http\Controllers\ItemApiController;

Route::get('items', [ItemApiController::class, 'index']); //Get all items
Route::get('items/{id}', [itemApiController::class, 'show']); //Get a single item
Route::post('items', [itemApiController::class,'store']); //Create a new item
Route::put('items/{id}', [itemApiController::class, 'update']); //Update an item
Route::delete('/items/{id}',[ItemApiController::class, 'destroy' ]); //Delete an item

