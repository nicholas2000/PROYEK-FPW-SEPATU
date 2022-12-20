{{-- @extends('layoutAdmin.sidebarAdmin') --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - List User</title>
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
        <h3>List User</h3>
        @isset($listUser)
            <table border="1">
                <tr>
                    <th>name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
                @foreach ($listUser as $d)
                    <tr>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->username }}</td>
                        <td>{{ $d->password }}</td>
                        <td>
                            <a href="{{ url("/cobaEditUser/$d->user_id") }}"><button>Edit</button></a>
                            <a href="{{ url("/cobaDeleteUser/$d->user_id") }}"><button>Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endisset
    </div>
</body>

</html>
