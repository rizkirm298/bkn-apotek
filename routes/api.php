<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\APIProduk;
use App\Http\Controllers\APIResep;
use App\Http\Controllers\APIObat;

Route::get('/produk',[APIProduk::class,'getProduk']);
Route::post('/produk',[APIProduk::class,'addProduk']);
Route::put('/produk/{produk}',[APIProduk::class,'updateProduk']);
Route::delete('/produk/{produk}',[APIProduk::class,'deleteProduk']);


Route::get('/resep',[APIResep::class,'getResep']);
Route::post('/resep',[APIResep::class,'addResep']);
Route::put('/resep/{resep}',[APIResep::class,'updateResep']);
Route::delete('/resep/{resep}',[APIResep::class,'deleteResep']);

Route::get('/obat',[APIObat::class,'getObat']);
Route::post('/obat',[APIObat::class,'addObat']);
Route::put('/obat/{obat}',[APIObat::class,'updateObat']);
Route::delete('/obat/{obat}',[APIObat::class,'deleteObat']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
