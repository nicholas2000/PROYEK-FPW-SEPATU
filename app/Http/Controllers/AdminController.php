<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\brand;
use App\Models\kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function listBarang()
    {
        //get list barang
        $listBarang = barang::get();
        //get list brand
        $listBrand = brand::get();
        //get list kategori
        $listKategori = kategori::get();
        return view('tambahBarangAdmin', ["listBarang" => $listBarang, "listBrand" => $listBrand, "listKategori" => $listKategori]);
    }

    public function listBrand(){
        //get list brand
        $listBrand = brand::get();
        return view('tambahBrand', ["listBrand" => $listBrand]);
    }

    public function listKategori(){
        //get list kategori
        $listKategori = kategori::get();
        return view('tambahKategoriAdmin', ['listKategori' => $listKategori]);
    }

    public function listUser()
    {
        //get list barang
        $listUser = User::get();
        return view('editUserAdmin', ["listUser" => $listUser]);
    }

    public function cobaTambahBrand(Request $req){
        brand::insert([
            "Nama_brand" => $req->nama_brand
        ]);
        return redirect('/tambahBrandAdmin');
    }

    public function cobaTambahKategori(Request $req){
        kategori::insert([
            "Nama_Kategori" => $req->nama_kategori
        ]);
        return redirect('/tambahKategoriAdmin');
    }

    public function cobaTambahBarang(Request $req)
    {
        barang::insert([
            "Nama_Barang" => $req->nama_barang,
            "Ukuran" => $req->ukuran,
            "Id_Brand" => $req->brand,
            "Kategori" => $req->kategori,
            "Harga" => $req->harga
        ]);
        return redirect('/tambahBarangAdmin');
    }

    public function cobaEditBarang(Request $req)
    {
        $item = barang::find($req->Id);
        $param["barang"] = $item;

        return view('editBarangAdmin', $param);
    }

    public function cobaEditBrand(Request $req){
        $item = brand::find($req->Id_Brand);
        $param["brand"] = $item;

        return view('editBrandAdmin', $param);
    }

    public function cobaEditKategori(Request $req){
        $item = kategori::find($req->Id_Kategori);
        $param["kategori"] = $item;

        return view('editKategoriAdmin', $param);
    }

    public function cobaEditUser(Request $req)
    {
        $item = User::find($req->user_id);
        $param["User"] = $item;

        return view('editUserForm', $param);
    }

    public function cobaDeleteBarang(Request $req)
    {
        barang::destroy($req->Id);

        return redirect('/tambahBarangAdmin');
    }

    public function cobaDeleteBrand(Request $req){
        brand::destroy($req->Id_Brand);

        return redirect('/tambahBrandAdmin');
    }

    public function cobaDeleteKategori(Request $req){
        kategori::destroy($req->Id_Kategori);

        return redirect('/tambahKategoriAdmin');
    }

    public function cobaDeleteUser(Request $req)
    {
        User::destroy($req->user_id);

        return redirect('/editUserAdmin');
    }

    public function editbarang(Request $req)
    {
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

    public function editBrand(Request $req){
        brand::where("Id_Brand", $req->Id_Brand)->update($req->all());

        return redirect('/tambahBrandAdmin');
    }

    public function editKategori(Request $req){
        kategori::where("Id_Kategori", $req->Id_Kategori)->update($req->all());

        return redirect('/tambahKategoriAdmin');
    }

    public function edituser(Request $req)
    {
        /*$item = barang::find($req->Id);
        $item->Nama_Barang = $req->nama_barang;
        $item->Ukuran = $req->ukuran;
        $item->Id_Brand = $req->id_brand;
        $item->Kategori = $req->kategori;
        $item->Harga = $req->harga;
        $item->save();*/

        User::whereId($req->user_id)->update($req->all());

        return redirect('/editUserAdmin');
    }
}
