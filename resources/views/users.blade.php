<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>

<body>

    <h2>All Users</h2>

    <div style="display: flex; justify-content: space-between; justify-items: center; margin-bottom: 20px;">
        <a href="user/create">
            <button style="padding: 10px; cursor: pointer;" class="text-red-500">
                Add New User
            </button>
        </a>
        <form method="GET" action="{{ route('users') }}">

            <input type="text" style="padding: 8px; font-size: 15px;" name="id" placeholder="Search by ID"
                value="{{ request('id') }}">

            <input type="text" style="padding: 8px; font-size: 15px;" name="name" placeholder="Search by Name"
                value="{{ request('name') }}">

            <input type="text" style="padding: 8px; font-size: 15px;" name="email" placeholder="Search by Email"
                value="{{ request('email') }}">

            <button type="submit" style="padding: 10px; cursor: pointer;">Search</button>

            @if (request()->anyFilled(['id', 'name', 'email']))
                <a href="{{ route('users') }}" style="text-decoration: none;">
                    <button type="button"
                        style="padding: 10px; cursor: pointer; background-color: #f0f0f0; border: 1px solid #ccc; margin-left: 5px;">
                        Clear Filters
                    </button>
                </a>
            @endif
        </form>

    </div>


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

    <script>
        // Clean the URL address bar after the page has loaded
        // This ensures that hitting "Refresh" will reload the page without search parameters
        window.history.replaceState({}, document.title, window.location.pathname);
    </script>
</body>

</html>
