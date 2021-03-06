<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\DemandeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('Offre', OffreController::class);


Route::post('/register', [UsersController::class, 'addUser']);
Route::post('/login', [UsersController::class, 'login']);



Route::get('/GetOffre', [OffreController::class, 'getOffre']);
Route::post('/AddOffre', [OffreController::class, 'addOffre']);
Route::get('/GetOneOffre/{id}', [OffreController::class, 'getOneOffre']);
Route::post('/UpdateOffre/{id}', [OffreController::class, 'updateOffre']);
Route::delete('/DeleteOffre/{id}', [OffreController::class, 'deleteOffre']);


Route::get('/GetDemande', [DemandeController::class, 'GetDemande']);
Route::post('/AddDemande', [DemandeController::class, 'AddDemande']);
Route::get('/GetOneDemande/{id}', [DemandeController::class, 'GetOneDemande']);
Route::post('/UpdateDemande/{id}', [DemandeController::class, 'UpdateDemande']);
Route::delete('/DeleteDemande/{id}', [DemandeController::class, 'DeleteDemande']);

