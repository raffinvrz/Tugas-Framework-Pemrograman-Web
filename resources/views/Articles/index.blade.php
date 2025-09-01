@extends('layouts.main')

@section('title', 'Daftar Artikel')

@section('content')
    <h2>Semua Artikel</h2>
    <p>Berikut adalah daftar artikel yang tersedia di blog ini.</p>

    <ul>
        @forelse ($articles as $id => $title)
            <li>
                <a href="{{ route('articles.show', ['id' => $id]) }}">{{ $title }}</a>
            </li>
        @empty
            <li><em>Belum ada artikel yang dipublikasikan.</em></li>
        @endforelse
    </ul>

    <br>
    <a href="{{ route('home') }}">Kembali ke Halaman Utama</a>
@endsection
