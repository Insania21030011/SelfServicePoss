<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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
    <h1 >Edit User</h1>

        <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method ('PUT')
        <label for="">Nama:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>
        
        <label for="">Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required>

        <label for="">Password:</label>
        <input type="password" name="password" value="{{ $user->password }}" required>

        <button type="submit">Simpan</button>
        <a href="{{route('users.index')}}"><button> Kembali </button></a>
        </form>
</body>
</html>