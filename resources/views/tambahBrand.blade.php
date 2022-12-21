<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Brands</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="navbarAdmin">
        {{-- list navbar admin harus ada tambah barang, edit barang, edit user, logout --}}
        <a href="{{ Route('homeAdmin') }}"><button class="butonNavbar">Home</button></a>
        <a href="{{ Route('tambahBrandAdmin') }}"><button class="butonNavbar">Brands</button></a>
        <a href="#"><button class="butonNavbar">Categories</button></a>
        <a href="{{ Route('tambahBarangAdmin') }}"><button class="butonNavbar">Items</button></a>
        <a href="{{ Route('editUserAdmin') }}"><button class="butonNavbar">Users</button></a>
        <a href="{{ Route('logout') }}"><button class="butonNavbar">Logout</button></a>
    </div>
    <div class="contentAdmin">
        <h3>List Brand</h3>
        @isset($listBrand)
            <table border="1">
                <tr>
                    <th>id</th>
                    <th>nama brand</th>
                    <th>action</th>
                </tr>
                @foreach ($listBrand as $d)
                    <tr>
                        <td>{{$d->Id_Brand}}</td>
                        <td>{{$d->Nama_brand}}</td>
                        <td>
                            <a href="{{url("/cobaEditBrand/$d->Id_Brand")}}"><button>Edit</button></a>
                            <a href="{{url("/cobaDeleteBrand/$d->Id_Brand")}}"><button>Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endisset
        <h3>Tambah Brand</h3>
        <form action="/cobaTambahBrand">
            nama barang <input type="text" name="nama_brand" placeholder="nama brand"> <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>
