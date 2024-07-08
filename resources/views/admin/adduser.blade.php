<!-- admin.blade.php -->

<x-app-layout>
    <!-- Include your layout content here -->
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Users</title>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')

        <div style="position: relative; top:60px; right: -150px;">
            <form action="{{ route('adduser') }}" method="POST">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="usertype">User Type:</label>
                <input type="text" id="usertype" name="usertype" required>

                <button type="submit">Add User</button>
            </form>
        </div>
    </div>
</body>

</html>
