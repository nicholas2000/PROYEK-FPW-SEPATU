{{-- @extends('layoutAdmin.sidebarAdmin') --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Edit User</title>
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

        <h3>Edit User</h3>
        <form action="/edituser">
            <input type="hidden" name="Id" value="{{ $User->user_id }}">
            nama user <input type="text" name="nama_barang" placeholder="nama user" value="{{ $User->name }}">
            <br>
            email <input type="number" name="ukuran" placeholder="email" value="{{ $User->email }}"> <br>
            username <input type="number" name="id_brand" placeholder="username" value="{{ $User->username }}"> <br>
            password <input type="number" name="kategori" placeholder="password" value="{{ $User->password }}">
            <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>

</html>
