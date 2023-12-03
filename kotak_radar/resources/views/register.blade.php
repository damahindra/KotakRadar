<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css'); }}">
    <title>Register</title>
</head>

<body>
    <div class="wrapper">

        <div class="heading">
            <h2>Kotak Radar</h2>
            <p>Buat akun baru</p>
        </div>

        <form method="POST" action="{{route('register.perform')}}">
            @csrf
            <div class="input-group">
                <input type="text" name="name" class="input-field" placeholder="Name">
            </div>

            <div class="input-group">
                <input type="text" name="email" class="input-field" placeholder="Email">
            </div>

            <div class="input-group">
                <input type="password" name="password" class="input-field" placeholder="Password">
            </div>

            <div class="input-group row">

                <div class="row">
                    <p>Sudah memiliki akun?<a href="/login">Masuk</a></p>
                </div>
            </div>

            <div class="input-group">
                <button onclick="window.location.href='register.perform'">Register<i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </form>

    </div>

</body>

</html>
