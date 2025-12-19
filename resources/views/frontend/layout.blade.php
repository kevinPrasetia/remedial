<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Usaha Catering</title>
    <style>
        body { font-family: Arial; margin: 0; background: #f5f5f5; }
        header { background: #2c3e50; color: white; padding: 15px; }
        nav a { color: white; margin-right: 15px; text-decoration: none; }
        .container { padding: 20px; }
        .card {
            background: white;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 6px;
        }
        footer {
            background: #ddd;
            text-align: center;
            padding: 10px;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<header>
    <h2>Catering Berkah</h2>
    <nav>
        <a href="/">Beranda</a>
        <a href="/menu">Daftar Menu</a>
        <a href="/kontak">Kontak</a>
    </nav>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    © {{ date('Y') }} Catering Berkah
</footer>

</body>
</html>
