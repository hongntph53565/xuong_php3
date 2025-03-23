<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('welcome');
// });


//điều hướng qua action controller
//php artisan make:controller TeenController (PascalCase)

//http://127.0.0.1:8000/list-product
Route::get('list-product', [ProductController::class, 'showProduct']);

// // Gửi dữ liệu qua controller
// // Slug
// //

// //http://127.0.0.1:8000/get-product/1
// Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);

// // Params

// //http://127.0.0.1:8000/update-product?id=1&name=iphone
// Route::get('update-product', [ProductController::class, 'updateProduct']);


// Route::get('/information', [ProductController::class, 'information']);

Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
    Route::get('list-users', [UserController::class, 'listUsers'])->name('listUsers');
    Route::get('add-user', [UserController::class, 'addUser'])->name('addUser');
    Route::post('add-user', [UserController::class, 'addPostUser'])->name('addPostUser');
    Route::get('delete-user/{userId}', [UserController::class, 'deleteUser'])->name('deleteUser');
    Route::get('update-user/{userId}', [UserController::class, 'updateUser'])->name('updateUser');
    Route::post('update-user', [UserController::class, 'updatePostUser'])->name('updatePostUser');
});
