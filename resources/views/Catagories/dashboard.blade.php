@extends('layouts.main')

@section('title', 'Dashboard Admin')

@section('content')
    <h2>Dashboard Admin</h2>
    <p>
        Ini adalah halaman utama panel admin. Semua route di dalam area ini menggunakan <strong>Route Group</strong>
        dengan prefix URL <code>/admin</code>.
    </p>

    <br>
    <a href="{{ route('admin.categories.index') }}">Lihat Manajemen Kategori</a>
    <br>
    <a href="{{ route('home') }}">Kembali ke Halaman Utama</a>
@endsection
