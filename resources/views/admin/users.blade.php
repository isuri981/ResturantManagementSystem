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

        .search-container {
            margin-bottom: 20px;
        }

        .search-container input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin-right: 10px;
        }

        .search-container input[type="submit"] {
            padding: 10px 20px;
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

        /* Container styling */
        .search-container {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        /* Form styling */
        .search-form {
            display: flex;
            align-items: center;
            max-width: 600px;
            /* Adjust based on your design */
            width: 100%;
        }

        /* Input field styling */
        .search-input {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 10px;
            transition: border-color 0.3s;
        }

        .search-input::placeholder {
            color: #aaa;
        }

        .search-input:focus {
            border-color: #007bff;
            /* Focus border color */
            outline: none;
        }

        /* Button styling */
        .search-button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .search-button:hover {
            background-color: #0056b3;
            /* Darker shade for hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")
        <div class="container mt-2">
            <h1>Users</h1>
            <div class="search-container">
                <form action="{{ url('/search') }}" method="get" class="search-form">
                    @csrf
                    <input type="text" name="search" placeholder="Search by User" class="search-input">
                    <button type="submit" class="btn btn-success search-button">Search</button>
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
                                <a class="btn btn-success" href="{{ url('/editteuser', $user->id) }}" title="Edit">
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
</body>

</html>