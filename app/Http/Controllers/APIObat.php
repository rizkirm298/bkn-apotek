<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Obat;

class APIObat extends Controller{
    public function getObat(){
        return Obat::all();
    }
    //add/tambah
    public function addObat(){
        request()->validate([
            "kode_obat"=>"required",
            "nama_obat"=>"required",
            "expired_date"=>"required",
            "jumlah"=>"required",
            "hargaPerUnit"=>"required",
        ]);
        return Obat::create([
            "kode_obat"=>request("kode_obat"),
            "nama_obat"=>request("nama_obat"),
            "expired_date"=>request("expired_date"),
            "jumlah"=>request("jumlah"),
            "hargaPerUnit"=>request("hargaPerUnit"),
        ]);
    }
//updatr
     public function updateObat( Obat $obat) {
         request()->validate([
             "nama_obat"=>"required",
             "jumlah"=>"required",
             "hargaPerUnit"=>"required",
            ]);
            $success = $obat->update([
                "nama_obat"=>request("nama_obat"),
                "jumlah"=>request("jumlah"),
                "hargaPerUnit"=>request("hargaPerUnit"),
            ]);
            
            return [
                "success" => $success,
                "status" => 200
            ];
        }

        //delete
        public function deleteObat( Obat $obat) {
            $success = $obat->delete();
            return [
                "success" => $success,
                "status" => 200
            ];
        }

}