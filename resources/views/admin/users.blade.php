<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Required meta tags -->
    @include("admin.admincss")
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
            color: #343a40;
        }

        .btn {
            margin-right: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #dee2e6;
        }

        table th {
            background-color: greenyellow;
            color: #000;
        }

        table tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        .btn-success,
        .btn-danger {
            margin: 0 5px;
        }

        /* Styles for the search form */
        .search-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .input-group {
            display: flex;
            border-radius: 8px;
            overflow: hidden;
        }

        .search-input {
            flex: 1;
            border: 1px solid #ced4da;
            border-radius: 8px 0 0 8px;
            padding: 10px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .search-input:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }

        .search-button {
            border-radius: 0 8px 8px 0;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .search-button:hover {
            background-color: #28a745;
            color: white;
        }

        .search-button:focus {
            outline: none;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")
        <div class="container mt-2">
            <br>
            <h1>Users</h1>
            <div class="search-container">
                <form action="{{ url('/usersearch') }}" method="GET" class="search-form" onsubmit="return validateSearch()">
                    <div class="input-group">
                        <input type="text" name="search" placeholder="Search by User" class="search-input" id="search-input">
                        <button type="submit" class="btn btn-success search-button">Search</button>
                    </div>
                </form>

              
            </div>

            <a href="{{ route('adduser') }}" class="btn btn-primary btn-sm">+ Add User</a>
            <div style="margin-top: 20px;">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Action 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="{{ route('edituser', $user->id) }}" class="btn btn-success">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                @if($user->usertype == "1")
                                <a class="btn btn-danger" href="{{ url('/deleteuser', $user->id) }}" title="Delete" onclick="return confirm('Are you sure you want to delete this user?');">
                                    <i class="fas fa-trash"></i>
                                </a>
                                @else
                                <span>Not Allowed</span>
                                @endif
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @include("admin.adminscript")
    </div>

    <script>
        function validateSearch() {
            var searchInput = document.getElementById('search-input').value.trim();
            if (searchInput === '') {
                alert('Please enter a search term.');
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>
</body>

</html>