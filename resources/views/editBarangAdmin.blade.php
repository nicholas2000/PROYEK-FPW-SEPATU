{{-- @extends('layoutAdmin.sidebarAdmin') --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Tambah Barang</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="navbarAdmin">
        {{-- list navbar admin harus ada tambah barang, edit barang, edit user, logout --}}
        <a href="{{Route('homeAdmin')}}"><button class="butonNavbar">Home</button></a>
        <a href="{{Route('tambahBarangAdmin')}}"><button class="butonNavbar">Tambah Barang</button></a>
        <a href="#"><button class="butonNavbar">Edit Barang</button></a>
        <a href="#"><button class="butonNavbar">Edit User</button></a>
        <a href="{{Route('logout')}}"><button class="butonNavbar">Logout</button></a>
    </div>
    <div class="contentAdmin">

    <h2>{{$barang->Nama_Barang}}</h2>
    <h2>{{$barang->Ukuran}}</h2>

        <h3>Edit Barang</h3>
        <form action="/editbarang">
            <input type="hidden" name="Id" value="{{$barang->Id}}">
            nama barang <input type="text" name="nama_barang" placeholder="nama barang" value="{{$barang->Nama_Barang}}"> <br>
            ukuran <input type="number" name="ukuran" placeholder="ukuran" value="{{$barang->Ukuran}}"> <br>
            id brand <input type="number" name="id_brand" placeholder="id brand" value="{{$barang->Id_Brand}}"> <br>
            kategori <input type="number" name="kategori" placeholder="id kategori" value="{{$barang->Kategori}}"> <br>
            harga <input type="number" name="harga" placeholder="harga" value="{{$barang->Harga}}"> <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>
