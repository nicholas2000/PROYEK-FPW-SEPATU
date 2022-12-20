{{-- @extends('layoutAdmin.sidebarAdmin') --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Home</title>
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
        <h1>Welcome, Admin</h1>
        <h5>How is your day going?</h5>
    </div>
</body>
</html>
