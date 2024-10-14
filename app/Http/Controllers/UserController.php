<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('create_user');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
        ]);

        // Siapkan data untuk ditampilkan di view
        $data = [
            'nama' => $validatedData['nama'],
            'kelas' => $validatedData['kelas'],
            'npm' => $validatedData['npm']
        ];

        return view('profile', $data);
    }
}