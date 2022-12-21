{{-- @extends('layoutAdmin.sidebarAdmin') --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Tambah Kategori</title>
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
        <h3>List Kategori</h3>
        @isset($listKategori)
            <table border="1">
                <tr>
                    <th>id</th>
                    <th>nama brand</th>
                    <th>action</th>
                </tr>
                @foreach ($listKategori as $d)
                    <tr>
                        <td>{{$d->Id_Kategori}}</td>
                        <td>{{$d->Nama_Kategori}}</td>
                        <td>
                            <a href="{{url("/cobaEditKategori/$d->Id_Kategori")}}"><button>Edit</button></a>
                            <a href="{{url("/cobaDeleteKategori/$d->Id_Kategori")}}"><button>Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endisset
        <h3>Tambah Kategori</h3>
        <form action="/cobaTambahKategori">
            nama Kategori <input type="text" name="nama_kategori" placeholder="nama kategori"> <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>

</html>
