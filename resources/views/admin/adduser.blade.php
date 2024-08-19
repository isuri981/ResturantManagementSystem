<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    @include("admin.admincss")

    <style>
        /* Card styling */
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Form control styling */
        .form-control {
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 10px 15px;
            font-size: 1rem;
            color: #000;
            width: 100%;
            margin-bottom: 15px;
        }

        /* Focus effect */
        .form-control:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        /* Button styling */
        .btn-primary {
            background-color: #8a2be2;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            width: 25%;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: #6f1c9b;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .btn-primary {
                padding: 12px 0;
            }
        }
    </style>
</head>

<body>

    <div class="container-scroller">
        @include('admin.navbar')

        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title" style="color: black;">Add New User</h2>

                            <!-- Success Message -->
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            <!-- Error Messages -->
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <br>
                            <form action="{{ route('adduser') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label style="font-weight: bold; color: #333; text-align: left; display: block; width: 100%;" for="name" class="form-label">Name:</label>
                                    <input style="background-color: #fff; color: black; padding: 5px; width: 100%;" type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                                </div>

                                <div class="form-group">
                                    <label style="font-weight: bold; color: #333; text-align: left; display: block; width: 100%;" for="email" class="form-label">Email:</label>
                                    <input style="background-color: #fff; color: black; padding: 5px; width: 100%;" type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                </div>

                                <div class="form-group">
                                    <label style="font-weight: bold; color: #333; text-align: left; display: block; width: 100%;" for="usertype" class="form-label">User Type:</label>
                                    <input style="background-color: #fff; color: black; padding: 5px; width: 100%;" type="text" id="usertype" name="usertype" class="form-control" value="{{ old('usertype') }}" required>
                                </div>

                                <button style="background-color: #8a2be2; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" type="submit" class="btn btn-primary">Add User</button>
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