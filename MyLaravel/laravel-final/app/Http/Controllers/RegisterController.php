<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

// untuk securty hash
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    // https://laravel.com/docs/8.x/csrf#main-content
    // untuk mengaman kan script jahat ke website kita

    // validation
    // https://laravel.com/docs/8.x/validation#main-content
    public function store(Request $request)
    {
        // validation
        // terhubung ke index.blade.php register
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            // email:dns agar sesuai dengan email yang berlaku
            'email' => 'required|email:dns|unique:users', 
            'password' => 'required|min:5|max:255'
        ]);

        // enkripsi password

        // // cara  umum
        // $validateData['password'] = bcrypt($validateData['password']);

        // // dengan hash laravel
        // // https://laravel.com/docs/8.x/hashing#main-content
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        // melakukan pesan jika berhasil ataupun gagal(flash data)
        // https://laravel.com/docs/8.x/session#flash-data
        $request->session()->flash('success', 'Registration successfull! Please Login');

        // pindah ke halaman login
        return redirect('/login');

    }
}
