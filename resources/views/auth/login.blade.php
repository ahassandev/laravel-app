<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h1>Login</h1>

    @if (session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    <form method="POST" action="/login">
        @csrf
        <div style="margin-bottom: 10px;">
            <input type="email" name="email" placeholder="Email" required style="padding: 8px; width: 250px;">
        </div>

        <div style="margin-bottom: 10px;">
            <input type="password" name="password" placeholder="Password" required style="padding: 8px; width: 250px;">
        </div>

        <button type="submit" style="padding: 10px 20px; cursor: pointer;">Login</button>
    </form>

    <p style="margin-top: 10px;">
        <a href="/register">Don't have an account? Register</a>
    </p>

</body>

</html>
