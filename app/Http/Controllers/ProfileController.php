<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $nama = "Insania Kamila";
        $alamat = "Kota Bandung";
        $tanggal_lahir = "19 Juli 2001";
        $data_array = array(
            "nama" => array(
                "Insania", "Meike", "Fitria",
            ),
        );

        return view('profil', compact('nama', 'alamat', 'tanggal_lahir', 'data_array'));
    }
}
