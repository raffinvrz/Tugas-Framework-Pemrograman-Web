@extends('layouts.main')

@section('title', 'Hasil Pencarian')

@section('content')
    <h2>Halaman Pencarian</h2>

    @if ($keyword)
        <p>Anda mencari dengan kata kunci: <strong>"{{ $keyword }}"</strong>.</p>
        <p>Hasil pencarian akan ditampilkan di bawah ini.</p>
    @else
        <p>Anda mengakses halaman pencarian tanpa kata kunci.</p>
        <p>Silakan gunakan link dari halaman utama untuk mencoba pencarian dengan kata kunci.</p>
    @endif

    <br>
    <a href="{{ route('home') }}">Kembali ke Halaman Utama</a>
@endsection
