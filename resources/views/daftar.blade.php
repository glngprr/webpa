@extends('layouts.main')

@section('title', 'Form Pendaftaran')

@section('content')
<div class="container py-5">
    <div class="form-container mx-auto" style="max-width: 500px;">
        <h2 class="text-center mb-4">Form Pendaftaran</h2>
        <form action="{{ url('/simpan-pendaftaran') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button class="btn btn-primary-custom w-100">Daftar</button>
        </form>
    </div>
</div>
@endsection
