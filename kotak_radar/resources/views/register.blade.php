<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css'); }}">
    <title>Register</title>
</head>

<body>
    <div class="wrapper">

        <div class="heading">
            <h2>Welcome!</h2>
            <p>Register new account</p>
        </div>

        <form method="POST" action="{{route('register.perform')}}">
            @csrf

            <div class="input-group">
                <input type="text" name="email" class="input-field" placeholder="Email">
            </div>

            <div class="input-group">
                <input type="password" name="password" class="input-field" placeholder="Password">
            </div>

            <div class="input-group">
                <input type="text" name="name" class="input-field" placeholder="Name">
            </div>
            <div class="input-group">
                <button onclick="window.location.href='/login'">Register<i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </form>

    </div>

</body>

</html>
