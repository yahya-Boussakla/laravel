<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
}); 


// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/contact', [ContactController::class, 'create']);




// Route::post('/contact', 'ContactController@store');
Route::post('/contact', [ContactController::class, 'store']);