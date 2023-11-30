<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Profil</title>
</head>

<body>

    <h1>Profil &#128112;</h1>
    <hr>
    <table border='0'>
        @if($nama == 'Insania')
        <tr>
            <td>Nama Saya :</td>
            <td>{{ $nama }} </td>
        </tr>
        @endif
    </table>

    <hr>
    <h1>Contoh Penerapan
        <br> Nama= Meike Nadya Chandra
        <br> Nama= Rian Kurniawan
        <br> Nama= Insania Kamila
        </head>