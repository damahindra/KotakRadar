<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css'); }}">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">

        <div class="heading">
            <h2>Welcome Back!</h2>
            <p>Sign In to your account</p>
        </div>

        <div class="input-group">
            <input type="text" id="username" class="input-field" placeholder="Username">
        </div>

        <div class="input-group">
            <input type="password" id="password" class="input-field" placeholder="Password">
        </div>

        <div class="input-group row">

            <div class="row">
                <input type="checkbox" id="remember" hidden>
                <label for="remember" class="custom-checkbox"></label>
                <label for="remember">Remember me?</label>
            </div>

            <div class="row">
                <a href="#" target="_blank">Forgot password?</a>
            </div>
        </div>


        <div class="input-group">
            <button onclick="window.location.href='/'">Login <i class="fa-solid fa-arrow-right"></i></button>
        </div>

    </div>

</body>

</html>
