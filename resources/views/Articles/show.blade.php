@extends('layouts.main')

@section('title', 'Detail Artikel')

@section('content')
    <article>
        <h2>Detail Artikel dengan ID: {{ $id }}</h2>

        <p>Ini adalah isi dari artikel. Konten dinamis dari database akan ditampilkan di sini.</p>
    </article>

    <br>
    <a href="{{ route('articles.index') }}">Kembali ke Daftar Artikel</a>
@endsection
