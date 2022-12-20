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

    public function cobaEditBarang(Request $req){
        $item = barang::find($req->Id);
        $param["barang"] = $item;

        return view('editBarangAdmin', $param);
    }

    public function cobaDeleteBarang(Request $req){
        barang::destroy($req->Id);

        return redirect('/tambahBarangAdmin');
    }

    public function editbarang(Request $req){
        /*$item = barang::find($req->Id);
        $item->Nama_Barang = $req->nama_barang;
        $item->Ukuran = $req->ukuran;
        $item->Id_Brand = $req->id_brand;
        $item->Kategori = $req->kategori;
        $item->Harga = $req->harga;
        $item->save();*/

        barang::whereId($req->Id)->update($req->all());

        return redirect('/tambahBarangAdmin');
    }
}
