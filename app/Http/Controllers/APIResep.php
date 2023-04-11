<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Resep;

class APIResep extends Controller{
    public function getResep(){
        return Resep::all();
    }
    public function addResep(){
        request()->validate([
            "no_resep"=>"required",
            "tgl_resep"=>"required",
            "nama_pasien"=>"required",
            "nama_dokter"=>"required",
            "jumlah_obatresep"=>"required"
        ]);
        return Resep::create([
            "no_resep"=>request("no_resep"),
            "tgl_resep"=>request("tgl_resep"),
            "nama_pasien"=>request("nama_pasien"),
            "nama_dokter"=>request("nama_dokter"),
            "jumlah_obatresep"=>request("jumlah_obatresep")
        ]);
    }
    public function updateResep( Resep $resep){
        request()->validate([
            "nama_pasien"=>"required",
            "nama_dokter"=>"required",
            "obat_resep"=>"required",
        ]);
        $success = $resep->update([
            "nama_pasien"=>request("nama_pasien"),
            "nama_dokter"=>request("nama_dokter"),
            "obat_resep"=>request("obat_resep"),     
        ]);
        return [
            "success" => $success,
            "status" => 200
        ];
    }
        public function deleteResep( Resep $resep){
            $success = $resep->delete();
            return [
                "success" => $success,
                "status" => 200
            ];
    }
}
