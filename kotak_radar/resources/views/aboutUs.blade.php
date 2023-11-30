<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/aboutUs.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css'); }}">
    <title>About Us</title>
</head>
<body>
<header class="l-header" id="header">
        <nav class="topnav">
        <div class="nav-left-content">
            <div>
                <a href="{{ route('landing.show') }}"><img src="{{ asset('images/Radar Logo.png') }}" alt="" class="radar-logo"></a>
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
                <a href="#">About Us</a>
            </div>
            <div>
                <a href="#">Policy Brief</a>
            </div>

        </div>
        <div class="nav-right-content">
            <div>
                <a href="/logout">Logout</a>
            </div>
            <div class="name">
                <p>Selamat Datang, {{ $user->name }}</p>
            </div>
        </div>
    </nav>
        </header>
        <div class="image-title">
            <div>
            <img src="{{ asset('images/Radar Color.jpg') }}" alt="">
            </div>
            <div class="text-title">
            <p>Radar Politik adalah wadah digital yang kami
bentuk dengan tujuan utama: memperkuat
antusiasme pemilu di kalangan pemilih
pemula, khususnya generasi Z. Kami percaya
bahwa partisipasi politik dari generasi muda
adalah kunci untuk membentuk masa depan
yang inklusif dan berkelanjutan karena setiap
suara pemuda memiliki potensi besar untuk
menciptakan perubahan positif.
<br><br>Melalui Radar Politik, kami menyajikan
informasi politik dengan bahasa yang mudah
dipahami dan pendekatan yang bersahabat.
Kami ingin menciptakan ruang diskusi yang
positif dan memberdayakan pemilih muda
untuk membuat keputusan informasi yang
cerdas.</p>
            </div>

        </div>
</body>
</html>
