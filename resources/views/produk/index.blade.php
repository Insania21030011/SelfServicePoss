<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
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
    <div class="container">
        <h2>Daftar Produk</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('produk.create') }}" class="btn btn-success"><button> Buat Produk Baru</button></a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($product as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->product }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->stock }}</td>
                        <td> 
                        <a href="{{ route('produk.edit', $item->id) }}"><button>Edit</button></a>
                        <a href="{{ route('produk.show', $item->id) }}"><button>Show</button></a>
                        <form action="{{route('produk.destroy', $item->id)}}" method="post" style="display: inline;">
                        @csrf
                        @method ('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Ini?')">Hapus</button>
                        </form>
                    </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Belum ada produk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

  
</body>
</html>
