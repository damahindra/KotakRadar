<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css'); }}">
    <title>Login</title>
</head>
<body>

    <div class="wrapper">

        <div class="heading">
            <h2>Welcome Back!</h2>
            <p>Sign In to your account</p>
        </div>

        <form method="POST" action="{{route('login.perform')}}">
            @csrf
            <div class="input-group">
                <input type="text" name="email" class="input-field" placeholder="Email">
            </div>

            <div class="input-group">
                <input type="password" name="password" class="input-field" placeholder="Password">
            </div>

            <div class="input-group row">

                <div class="row">
                    <p>Tidak memiliki akun?<a href="/">Register</a></p>
                </div>
            </div>

            <div class="input-group">
                <button onclick="window.location.href='/home'">Login<i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </form>

    </div>

</body>

</html>
