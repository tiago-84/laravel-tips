<?php

use App\Http\Controllers\Form\TestController;
use App\Http\Controllers\UserController;
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


Route::get('/', function () {
    return view('welcome');
});

Route::get('listagem-usuario',[UserController::class, 'listUser'] );

//** VERBO GET */
Route::get('usuarios',[TestController::class, 'listAllUsers'])->name('users.listAll');
Route::get('usuarios/novo',[TestController::class, 'formAddUser'])->name('users.formAddUser');
Route::get('usuarios/editar/{user}',[TestController::class, 'formEditUser'])->name('users.formEditUser');
Route::get('usuarios/{user}',[TestController::class, 'listUser'])->name('users.list');


//** VERBO POST */
Route::post('usuarios/store', [TestController::class, 'storeUser'])->name('user.store');

//** VERBO PUT/PATCH*/
Route::patch('usuarios/editar/{user}',[TestController::class, 'edit'])->name('users.edit');

//** VERBO DELETE */
Route::delete('usuarios/destroy/{user}', [TestController::class, 'destroy'])->name('user.destroy');

