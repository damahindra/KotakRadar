<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('css/tataCara.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css'); }}">
    <title>Tata Cara Pemilu 2024</title>
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
                <a href="{{ route('mail.show') }}">Kotak Surat</a>
            </div>
            <div>
                <a href="/aboutUs">About Us</a>
            </div>
            <div>
                <a href="{{ route('policy.show') }}">Policy Brief</a>
            </div>

        </div>
        <div class="nav-right-content">
        @csrf
        @if($user)
            <div>
                <a href="/logout">Logout</a>
            </div>
            <div class="name">
                <p>Selamat Datang, {{ $user->name}}</p>
            </div>
            @else
            <div>
                <a href="{{ route('login.show') }}">Login</a>
            </div>
            <div class="name">
                <p>Selamat Datang!</p>
            </div>
            @endif
        </div>
    </nav>
        </header>
        <div class="tata-cara">
            <img src="{{ asset('images/tata-cara/' . $picture) }}" alt="Mechanism">
        </div>
        <div class="subtitle">
            <h2>Mekanisme Lainnya</h2>
        </div>

        @php
        $files = [asset('images/tata-cara/1.png'),
                        asset('images/tata-cara/2.png'),
                        asset('images/tata-cara/3.png'),
                        asset('images/tata-cara/4.png'),
                        asset('images/tata-cara/5.png'),
                        asset('images/tata-cara/6.png'),
                        asset('images/tata-cara/7.png'),
                        asset('images/tata-cara/8.png'),
                        asset('images/tata-cara/9.png')];
        @endphp

        <div class="main">
    <ul class="cards">
      @foreach ($files as $file)
      @php
          if($file == asset('images/tata-cara/' . $picture)) {
            continue;
          }
      @endphp
        <li class="cards_item">
          <div class="card">
            <div class="card_image">
              <a href="{{ route('tatacara.show', ['picture' => substr($file, -5)]) }}">
                <img src="{{ $file }}">
            </a>
            </div>
          </div>
        </li>
        @endforeach
  </ul>
</div>
</body>
</html>
