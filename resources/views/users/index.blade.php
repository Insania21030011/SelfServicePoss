<html>
    <head>
        <title> Daftar User</title>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                background-color: #f4f4f4;
                margin: 20px;
            }
            h1 {
                text-align: center;
                color: #333;
            }
            a {
                text-decoration: none;
                color: 007bff;
                margin-right: 10px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            th,td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #007bff;
                color: #fff;

            }
            tr:nth-child(even){
                background-color: #f9f9f9;
            }
            tr:hover {
                background-color: #f1f1f1;
            }
            button {
                background-color: #007bff;
                color: #fff;
                padding: 10px 15px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
        }
        </style>
    </head>
    <body>
        <h1>Daftar User</h1>
        <a href="{{route('user.create')}}"><button>Tambah User</button>

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td> 
                        <a href="{{ route('user.edit', $user->id) }}"><button>Edit</button></a>
                        <a href="{{ route('user.show', $user->id) }}"><button>Show</button></a>
                        <form action="{{route('user.destroy', $user->id)}}" method="post" style="display: inline;">
                        @csrf
                        @method ('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>