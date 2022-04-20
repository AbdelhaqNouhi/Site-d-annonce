<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OffreController;
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
// Route::resource('Offre', OffreController::class);


if(Route::post('/register', [UsersController::class, 'addUser'])){
    echo "User created";
};
Route::post('/login', [UsersController::class, 'login']);



Route::post('/AddOffre', [OffreController::class, 'addOffre']);
Route::get('/GetOffre', [OffreController::class, 'getOffre']);
Route::put('/UpdateOffre/{id}', [OffreController::class, 'updateOffre']);
Route::delete('/DeleteOffre/{id}', [OffreController::class, 'deleteOffre']);

