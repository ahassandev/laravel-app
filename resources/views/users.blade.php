<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>

<body>

    <h2>All Users</h2>

    <a href="user/create">
        <button style="padding: 10px; cursor: pointer; margin-bottom: 20px;" class="text-red-500">
            Add New User
        </button>
    </a>

    <table border="1" style="width:90%; font-size: 28px; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="padding: 10px;">ID</th>
                <th style="padding: 10px;">Name</th>
                <th style="padding: 10px;">Email</th>
                <th style="padding: 10px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td style="padding: 10px;">{{ $user->id }}</td>
                    <td style="padding: 10px;">{{ $user->name }}</td>
                    <td style="padding: 10px;">{{ $user->email }}</td>
                    <td style="padding: 10px;">
                        <a href="/user/{{ $user->id }}/edit">
                            <button style="padding: 10px; cursor: pointer;">Edit</button>
                        </a>
                        <a href="/user/{{ $user->id }}/delete"
                            onclick="return confirm('Are you sure you want to delete this user?')">
                            <button style="padding: 10px; cursor: pointer;">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
