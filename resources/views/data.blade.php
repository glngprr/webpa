@extends('layouts.main')

@section('title', 'Data Pendaftar')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Data Pendaftar</h2>

    @if(count($pendaftar) > 0)
        <table class="table table-bordered text-center align-middle">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pendaftar as $index => $data)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $data['nama'] }}</td>
                        <td>{{ $data['email'] }}</td>
                        <td>{{ $data['password'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center">Belum ada data pendaftar.</p>
    @endif
</div>
@endsection
