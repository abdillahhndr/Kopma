<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/barangs',[BarangController::class,'index']);
Route::post('/barangs',[BarangController::class,'creates']);
Route::get('/barangs/{id}/edit',[BarangController::class,'edit']);
Route::get('barangs/{id}',[BarangController::class,'show']);
Route::put('/barangs/{id}',[BarangController::class,'update']);
Route::delete('/barangs/{id}',[BarangController::class,'destroy']);

Route::get('/kategoris',[KategoriController::class,'index']);
Route::post('/kategoris',[KategoriController::class,'creates']);
Route::get('/kategoris/{id}/edit',[KategoriController::class,'edit']);
Route::get('kategoris/{id}',[KategoriController::class,'show']);
Route::put('/kategoris/{id}',[KategoriController::class,'update']);
Route::delete('/kategoris/{id}',[KategoriController::class,'destroy']);

Route::get('/suppliers',[SupplierController::class,'index']);
Route::post('/suppliers',[SupplierController::class,'creates']);
Route::get('/suppliers/{id}/edit',[SupplierController::class,'edit']);
Route::get('/suppliers/{id}',[SupplierController::class,'show']);
Route::put('/suppliers/{id}',[SupplierController::class,'update']);
Route::delete('/suppliers/{id}',[SupplierController::class,'destroy']);

Route::get('/transaksis',[TransaksiController::class,'index']);
Route::post('/transaksis',[TransaksiController::class,'creates']);
Route::get('/transaksis/{id}/edit',[TransaksiController::class,'edit']);
Route::get('/transaksis/{id}',[TransaksiController::class,'show']);
Route::put('/transaksis/{id}',[TransaksiController::class,'update']);
Route::delete('/transaksis/{id}',[TransaksiController::class,'destroy']);




// Route::post('/login', function (Request $request) {
//     $credentials = $request->validate([
//         'email' => 'required|email',
//         'password' => 'required',
//     ]);

//     if (Auth::attempt($credentials)) {
//         $user = Auth::user();
//         $token = $user->createToken('access_token')->plainTextToken;
//         return response()->json(['access_token' => $token]);
//     }

//     throw ValidationException::withMessages([
//         'email' => __('auth.failed'),
//     ]);
// });
