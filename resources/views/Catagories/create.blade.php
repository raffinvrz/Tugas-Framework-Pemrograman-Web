@extends('layouts.main')

@section('title', 'Tambah Kategori')

@section('content')
    <h2>Tambah Kategori Baru (Resource Create)</h2>
    <p>Gunakan form di bawah ini untuk menambahkan kategori baru.</p>

    <form action="#" method="POST">
        <label for="name">Nama Kategori:</label><br>
        <input type="text" id="name" name="name" size="30">
        <br><br>
        <button type="submit">Simpan Kategori</button>
    </form>

    <br>
    <a href="{{ route('admin.categories.index') }}">Batal dan Kembali</a>
@endsection
