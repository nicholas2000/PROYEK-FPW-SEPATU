<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function listBarang(){
        //get list barang
        $listBarang = barang::get();
        return view('tambahBarangAdmin', ["listBarang" => $listBarang]);
    }

    public function cobaTambahBarang(Request $req){
        barang::insert([
            "Nama_Barang"=>$req->nama_barang,
            "Ukuran"=>$req->ukuran,
            "Id_Brand"=>$req->id_brand,
            "Kategori"=>$req->kategori,
            "Harga"=>$req->harga
        ]);
        return redirect('/tambahBarangAdmin');
    }
}
