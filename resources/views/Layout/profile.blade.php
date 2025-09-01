@extends('layouts.main')

@section('title', 'Profil Pengguna')

@section('content')
    <h2>Profil Pengguna</h2>
    <p>
        Selamat datang di halaman profil Anda.
    </p>

    <br>
    <a href="{{ route('home') }}">Kembali ke Halaman Utama</a>
@endsection
