<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <style>
        
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
        <h2>Detail Produk</h2>

        <div>
            <strong>Nama Produk:</strong> {{ $product->product }}
        </div>
        <div>
            <strong>Harga:</strong> {{ $product->price }}
        </div>
        <div>
            <strong>Stok:</strong> {{ $product->stock }}
        </div>


        <a href="{{ route('produk.index') }}" class="btn btn-secondary mt-2"><button>Kembali</button></a>
    </div>

  
</body>
</html>
