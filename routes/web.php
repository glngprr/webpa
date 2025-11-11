<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/main', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::post('/simpan-pendaftaran', function (Request $request) {
    $data = [
        'nama' => $request->nama,
        'email' => $request->email,
        'password' => $request->password,
    ];

    $pendaftar = session('pendaftar', []);
    $pendaftar[] = $data;
    session(['pendaftar' => $pendaftar]);

    return redirect('/data-pendaftar');
});

Route::get('/data-pendaftar', function () {
    $pendaftar = session('pendaftar', []);
    return view('data', ['pendaftar' => $pendaftar]);
});
