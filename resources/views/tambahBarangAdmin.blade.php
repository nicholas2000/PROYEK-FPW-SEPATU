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
        <h3>List Barang</h3>
        @isset($listBarang)
            <table border="1">
                <tr>
                    <th>id</th>
                    <th>nama barang</th>
                    <th>ukuran</th>
                    <th>id brand</th>
                    <th>kategori</th>
                    <th>harga</th>
                </tr>
                @foreach ($listBarang as $d)
                    <tr>
                        <td>{{$d->Id}}</td>
                        <td>{{$d->Nama_Barang}}</td>
                        <td>{{$d->Ukuran}}</td>
                        <td>{{$d->Id_Brand}}</td>
                        <td>{{$d->Kategori}}</td>
                        <td>{{$d->Harga}}</td>
                    </tr>
                @endforeach
            </table>
        @endisset
        <h3>Tambah Barang</h3>
        <form action="/cobaTambahBarang">
            nama barang <input type="text" name="nama_barang" placeholder="nama barang"> <br>
            ukuran <input type="number" name="ukuran" placeholder="ukuran"> <br>
            id brand <input type="number" name="id_brand" placeholder="id brand"> <br>
            kategori <input type="number" name="kategori" placeholder="id kategori"> <br>
            harga <input type="number" name="harga" placeholder="harga"> <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>
