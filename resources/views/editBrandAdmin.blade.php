{{-- @extends('layoutAdmin.sidebarAdmin') --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Edit Brand</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <div class="navbarAdmin">
        {{-- list navbar admin harus ada tambah barang, edit barang, edit user, logout --}}
        <a href="{{ Route('homeAdmin') }}"><button class="butonNavbar">Home</button></a>
        <a href="{{ Route('tambahBarangAdmin') }}"><button class="butonNavbar">Tambah Barang</button></a>
        <a href="#"><button class="butonNavbar">Edit Barang</button></a>
        <a href="{{ Route('editUserAdmin') }}"><button class="butonNavbar">Edit User</button></a>
        <a href="{{ Route('logout') }}"><button class="butonNavbar">Logout</button></a>
    </div>
    <div class="contentAdmin">

        <h2>{{ $brand->Nama_Brand }}</h2>

        <h3>Edit Barang</h3>
        <form action="/editBrand">
            <input type="hidden" name="Id_Brand" value="{{ $brand->Id_Brand }}">
            nama brand <input type="text" name="Nama_brand" placeholder="nama brand"
                value="{{ $brand->Nama_brand }}"> <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>

</html>
