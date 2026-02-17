<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>

<body>

    <h2>Add New User</h2>

    <form action="/user/create" method="POST">
        @csrf

        <div>
            <label for="name">Name:</label><br>
            <input id="name" type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <div style="color:red; font-size:12px">{{ $message }}</div>
            @enderror
        </div>

        <br><br>

        <div>
            <label for="email">Email:</label><br>
            <input id="email" type="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div style="color:red; font-size:12px">{{ $message }}</div>
            @enderror
        </div>

        <br><br>

        <div>
            <label for="password">Password:</label><br>
            <input id="password" type="password" name="password">
            @error('password')
                <div style="color:red; font-size:12px">{{ $message }}</div>
            @enderror
        </div>

        <br><br>

        <button style="cursor: pointer; padding: 10px; background-color: gray; color: white " type="submit">Create
            User</button>
    </form>

</body>

</html>
