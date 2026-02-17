<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    @vite('resources/css/app.css')



</head>

<body>
    <h1 class="text-red-600">Welcome to Our Laravel App</h1>

    <a href="{{ route('login') }}">
        <button>Login</button>
    </a>

    <a href="{{ route('register') }}">
        <button>Register</button>
    </a>
</body>

</html>
