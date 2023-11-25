<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/kotaksurat.css'); }} ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kotak Surat</title>
</head>
<body>
<nav class="topnav">
        <div>
            <a href="/">Beranda</a>
            <a href="/kuis">Kuis</a>
            <a href="/kotaksurat">Kotak Surat</a>
            @csrf
            <a href="logout">Logout</a>
        </div>
        <div class="button">
            <!-- <a href="/register" class="sign">Sign up</a>
            <a href="/login" class="login">Log in</a> -->
            {{-- <button class="daftar"><a href="register">Sign Up</a></button></div></class></buttonclass>
       <button class="masuk"><a href="login">Log In</a></button></div></class></buttonclass> --}}
        </div>
    </nav>
    <div class="title">
        <h2>Kotak Surat</h2>
        <button onclick="window.location.href='/tambahsurat'">Tambahkan surat</button>
    </div>
</body>
</html>
