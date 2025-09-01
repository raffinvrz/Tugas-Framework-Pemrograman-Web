@extends('layouts.main')

@section('title', 'Selamat Datang')

@section('content')
    <section>
        <h2>Selamat Datang di Latihan Routing Laravel 11</h2>
        <p>
            Ini adalah halaman utama proyek. Dari sini, Anda dapat menguji semua konsep routing
            yang telah diimplementasikan dalam aplikasi ini.
        </p>
        <p>
            Negara sedang kacau guys, waktunya pulang untuk berbenah diri.
        </p>
    </section>

    <nav>
        <h3>Navigasi Utama</h3>
        <p>Silakan klik salah satu tautan di bawah ini untuk berpindah halaman:</p>
        <ul>
            <li><b>Halaman Publik</b>
                <ul>
                    <li><a href="{{ route('articles.index') }}">Lihat Semua Artikel</a></li>
                    <li><a href="{{ route('articles.show', ['id' => 1]) }}">Lihat Contoh Detail Artikel (ID: 1)</a></li>
                    <li><a href="{{ route('search', ['keyword' => 'tips']) }}">Lakukan Pencarian (dengan keyword "tips")</a></li>
                    <li><a href="{{ route('search') }}">Lakukan Pencarian (tanpa keyword)</a></li>
                </ul>
            </li>
            <br>
            <li><b>Area Pengguna & Admin (Membutuhkan Login)</b>
                <ul>
                    <li><a href="{{ route('profile') }}">Buka Halaman Profil</a></li>
                    <li><a href="{{ route('admin.dashboard') }}">Masuk ke Dashboard Admin</a></li>
                    <li><a href="{{ route('admin.categories.index') }}">Lihat Manajemen Kategori</a></li>
                </ul>
            </li>
        </ul>
    </nav>
@endsection
