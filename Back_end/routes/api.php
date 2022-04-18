<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use app\controllers\UsersController;
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

Route::post('/register', [UsersController::class, 'addUser']);
Route::get('/users', [UsersController::class, 'getuser']);



Route::post('/AddOffre', [OffreController::class, 'addOffre']);
Route::get('/GetOffre', [OffreController::class, 'getOffre']);
