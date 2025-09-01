<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Proyek Sistem-toko')</title>
</head>
<body>

    <header>
        <h1>Aplikasi Blog Sederhana</h1>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <hr>
    <footer>
        <p>&copy; {{ date('Y') }} Latihan Laravel. Pembuat Raffi Naufal Fahreza.</p>
    </footer>

</body>
</html>
