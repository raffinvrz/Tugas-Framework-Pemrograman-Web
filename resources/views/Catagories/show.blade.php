@extends('layouts.main')

@section('title', 'Detail Kategori')

@section('content')
    <h2>Detail Kategori (Resource Show)</h2>

    <p>Menampilkan detail untuk kategori dengan ID: <strong>{{ $id }}</strong>.</p>

    <br>
    <a href="{{ route('admin.categories.index') }}">Kembali ke Daftar Kategori</a>
@endsection
