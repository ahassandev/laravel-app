<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
</head>

<body>

    <h1>Register</h1>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/register">
        @csrf

        <div>
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
            @error('name')
                <div style="color:red; font-size:12px">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <div style="color:red; font-size:12px">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <input type="password" name="password" placeholder="Password">
            @error('password')
                <div style="color:red; font-size:12px">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <input type="password" name="password_confirmation" placeholder="Confirm Password">
            @error('password_confirmation')
                <div style="color:red; font-size:12px">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <button style="cursor: pointer" type="submit">Register</button>
    </form>

    <br>

    <a href="/login" class="text-red-900">Already have account? Login</a>


</body>

</html>
