<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    @include("admin.admincss")

    <style>
       

        .card-body {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            
        }

        /* General form styling */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            
        }

        .form-control {
            background-color: #fff;
            /* Ensure input fields have a white background */
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 10px 15px;
            font-size: 1rem;
            color: #000;
            width: 100%;
            margin-bottom: 15px;
        }

        /* Form group styling */
        .form-group {
            margin-bottom: 15px;
        }

        /* Label styling */
        label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        /* Input field styling */
        input[type="text"],
        input[type="email"] {
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 10px 15px;
            font-size: 1rem;
            color: #000;
            width: 100%;
        }

        /* Error message styling */
        .error {
            color: red;
            font-size: 0.875rem;
            margin-top: 5px;
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
            width: 50%;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: #6f1c9b;
        }

        /* Error state styling for form group */
        .has-error input[type="text"],
        .has-error input[type="email"] {
            border-color: red;
            box-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
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
                            <h2 class="card-title" style="color: black;">Update User</h2>

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

                            <form action="{{ route('updateuser', $user->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label style="font-weight: bold; color: #333; text-align: left; display: block; width: 100%;"  for="name">Name:</label>
                                    <input style="background-color: #fff; color: black; padding: 5px; width: 100%;" type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                                </div>

                                <div class="form-group">
                                    <label style="font-weight: bold; color: #333; text-align: left; display: block; width: 100%;" for="email">Email:</label>
                                    <input style="background-color: #fff; color: black; padding: 5px; width: 100%;" type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                                </div>

                                <div class="form-group">
                                    <label style="font-weight: bold; color: #333; text-align: left; display: block; width: 100%;" for="usertype">User Type:</label>
                                    <input style="background-color: #fff; color: black; padding: 5px; width: 100%;" type="text" id="usertype" name="usertype" class="form-control" value="{{ old('usertype', $user->usertype) }}" required>
                                </div>

                                <button style="background-color: #8a2be2; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" type="submit" class="btn btn-primary">Save</button>
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