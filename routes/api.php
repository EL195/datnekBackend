<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\LangueController;

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
 
Route::get('langue', [LangueController::class, 'index']);
Route::get('langueune/{id}', [LangueController::class, 'show']);
Route::post('add', [LangueController::class, 'store']);
Route::put('update', [LangueController::class, 'update']);
Route::delete('delete/{id}', [LangueController::class, 'delete']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
