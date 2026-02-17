<h2>
    Edit User</h2>

<form action="/user/{{ $user->id }}/edit" method="POST">
    @csrf

    <div>
        <label>Name:</label><br>
        <input type="text" name="name" style="font-size: 20px;" value="{{ $user->name }}">
        @error('name')
            <div style="color:red; font-size:12px">{{ $message }}</div>
        @enderror
    </div>
    <br><br>

    <div>
        <label>Email:</label><br>
        <input type="email" name="email" style="font-size: 20px;" value="{{ $user->email }}
    ">
        @error('email')
            <div style="color:red; font-size:12px">{{ $message }}</div>
        @enderror
    </div>
    <br><br>

    <button type="submit" style="padding: 10px; cursor: pointer;">Update User</button>
</form>
