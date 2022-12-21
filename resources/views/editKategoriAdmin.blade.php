{{-- @extends('layoutAdmin.sidebarAdmin') --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Edit Kategori</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <div class="navbarAdmin">
        {{-- list navbar admin harus ada tambah barang, edit barang, edit user, logout --}}
        <a href="{{ Route('homeAdmin') }}"><button class="butonNavbar">Home</button></a>
        <a href="{{ Route('tambahBrandAdmin') }}"><button class="butonNavbar">Brands</button></a>
        <a href="{{ Route('tambahKategoriAdmin') }}"><button class="butonNavbar">Categories</button></a>
        <a href="{{ Route('tambahBarangAdmin') }}"><button class="butonNavbar">Items</button></a>
        <a href="{{ Route('editUserAdmin') }}"><button class="butonNavbar">Users</button></a>
        <a href="{{ Route('logout') }}"><button class="butonNavbar">Logout</button></a>
    </div>
    <div class="contentAdmin">

        <h2>{{ $kategori->Nama_Kategori }}</h2>

        <h3>Edit Kategori</h3>
        <form action="/editKategori">
            <input type="hidden" name="Id_Kategori" value="{{ $kategori->Id_Kategori }}">
            nama kategori <input type="text" name="Nama_Kategori" placeholder="nama kategori"
                value="{{ $kategori->Nama_Kategori }}"> <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>

</html>
