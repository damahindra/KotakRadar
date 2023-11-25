<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/kotaksurat.css'); }} ">
    <title>Kotak Surat</title>
</head>
<body>
<nav class="topnav">
        <div>
            <a href="/">Beranda</a>
            <a href="/kuis">Kuis</a>
            <a href="/kotaksurat">Kotak Surat</a>
        </div>
        <div class="button">
            <a href="/register" class="sign">Sign up</a>
            <a href="/login" class="login">Log in</a>
        </div>
    </nav>
    <div class="title">
        <h2>Kotak Surat</h2>
        <button onclick="window.location.href='/tambahsurat'">Tambahkan surat</button>
    </div>
</body>
</html>
