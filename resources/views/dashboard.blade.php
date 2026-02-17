<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <h1>Welcome, {{ $user->name }}</h1>

    <p>
        <a href="/logout" style="color: red; text-decoration: none;">Logout</a>
    </p>

    <p style="margin-top: 20px;">
        <a href="/users">
            <button style="padding: 10px; cursor: pointer;">Users Page</button>
        </a>
    </p>

</body>

</html>
