<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
class APITransaksi extends Controller
{
    public function getTransaksi(){
        return Transaksi::all();
    }
    public function addTransaksi(){
        request()->validate([
            "nomor_transaksi"=>"required",
            "tgl_transaksi"=>"required",
            "nama_kasir"=>"required",
            "total_bayar"=>"required",
            "obat_id"=>"required",
            "resep_id"=>"required",
        ]);
        return Transaksi::create([
            "nomor_transaksi"=>request("nomor_transaksi"),
            "tgl_transaksi"=>request("tgl_transaksi"),
            "nama_kasir"=>request("nama_kasir"),
            "total_bayar"=>request("total_bayar"),
            "obat_id"=>request("obat_id"),
            "resep_id"=>request("resep_id"), 
        ]);
    }
        public function updateTransaksi( Transaksi $transaksi){
            request()->validate([
                "nomor_transaksi"=>"required",
                "tgl_transaksi"=>"required",
                "nama_kasir"=>"required",
                "total_bayar"=>"required",
                "obat_id"=>"required",
                "resep_id"=>"required",
            ]);
            $success = $transaksi->update([
                "nomor_transaksi"=>request("nomor_transaksi"),
                "tgl_transaksi"=>request("tgl_transaksi"),
                "nama_kasir"=>request("nama_kasir"),
                "total_bayar"=>request("total_bayar"),
                "obat_id"=>request("obat_id"),
                "resep_id"=>request("resep_id"),
            ]);
            return [
                "success" => $success,
                "status" => 200
            ];
    }
    public function deleteTransaksi( Resep $transaksi){
        $success = $transaksi->delete();
        return [
            "success" => $success,
            "status" => 200
        ];
}
}
