<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/policyBrief.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css'); }}">
    <title>About Us</title>
</head>
<body>
<header class="l-header" id="header">
        <nav class="topnav">
        <div class="nav-left-content">
            <div>
                <a href="/landing"><img src="{{ asset('images/Radar Logo.png') }}" alt="" class="radar-logo"></a>
            </div>
            <div>
                <a href="/home">Beranda</a>
            </div>
            <div>
                <a href="/kuis">Kuis</a>
            </div>
            <div>
                <a href="/mail">Kotak Surat</a>
            </div>
            <div>
                <a href="/aboutUs">About Us</a>
            </div>
            <div>
                <a href="/policyBrief">Policy Brief</a>
            </div>

        </div>
        <div class="nav-right-content">
            <div>
                <a href="/logout">Logout</a>
            </div>
            <div class="name">
                <p>Selamat Datang, Shani Indira</p>
            </div>

        </div>
    </nav>
        </header>
        <div class="policy">
            <div>
            <img src="{{ asset('images/Policy-Brief.svg') }}" alt="">
            </div>
        </div>
</body>
</html>
