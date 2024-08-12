<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Users</title>
    @include('admin.admincss')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}"> <!-- Add custom CSS file -->
    <style>
        /* Container styling */
        .container {
            margin-top: 40px;
        }

        /* Card styling */
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Card title styling */
        .card-title {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
            text-align: center;
        }

        /* Form group styling */
        .form-group {
            margin-bottom: 1rem;
        }

        /* Form label styling */
        .form-label {
            font-weight: 500;
        }

        /* Input field styling */
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 0.5rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            width: 100%;
        }

        /* Button styling */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            color: #fff;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <!-- Include your layout content here -->
    </x-app-layout>

    <div class="container-scroller">
        @include('admin.navbar')

        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Add New User</h2>
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
                </div>
            </div>
        </div>
    </div>

    @include('admin.adminscript')
</body>

</html>