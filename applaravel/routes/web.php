<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\OwnerController;

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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/pet', function(){
    return view('pet.index');
});
*/

// Route::get('pet/create', [PetController::class, 'create']);
// accedemos a la clase PetController, y al metodo create

Route::resource('pet', PetController::class);
Route::resource('owner', OwnerController::class);