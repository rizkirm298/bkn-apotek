<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class APIProduk extends Controller
{
      public function getProduk(){
        return Produk::all();
    }
    //add/tambah
    public function addProduk(){
        request()->validate([
            "kode_obat"=>"required",
            "nama_obat"=>"required",
            "expired_date"=>"required",
            "jumlah"=>"required",
            "hargaPerUnit"=>"required",
            "image"=>"required",
        ]);
        return Produk::create([
            "kode_obat"=>request("kode_obat"),
            "nama_obat"=>request("nama_obat"),
            "expired_date"=>request("expired_date"),
            "jumlah"=>request("jumlah"),
            "hargaPerUnit"=>request("hargaPerUnit"),
            "image"=>request("image"),
        ]);
    }
//updatr
     public function updateProduk( Produk $produk) {
         request()->validate([
             "nama_obat"=>"required",
             "jumlah"=>"required",
             "hargaPerUnit"=>"required",
             "image"=>"required"
            ]);
            $success = $produk->update([
                "nama_obat"=>request("nama_obat"),
                "jumlah"=>request("jumlah"),
                "hargaPerUnit"=>request("hargaPerUnit"),
                "image"=>request("image")
            ]);
            
            return [
                "success" => $success,
                "status" => 200
            ];
        }

        //delete
        public function deleteProduk( Produk $produk) {
            $success = $produk->delete();
            return [
                "success" => $success,
                "status" => 200
            ];
        }
}
