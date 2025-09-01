@extends('layouts.main')

@section('title', 'Manajemen Kategori')

@section('content')
    <h2>Manajemen Kategori (Resource Index)</h2>
    <p>Halaman ini menampilkan semua kategori yang ada.</p>
    <a href="{{ route('admin.categories.create') }}">Tambah Kategori Baru</a>
    <br><br>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Tutorial</td>
                <td><a href="{{ route('admin.categories.show', ['id' => 1]) }}">Lihat</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Berita</td>
                <td><a href="{{ route('admin.categories.show', ['id' => 2]) }}">Lihat</a></td>
            </tr>
        </tbody>
    </table>

    <br>
    <a href="{{ route('admin.dashboard') }}">Kembali ke Dashboard</a>
@endsection
