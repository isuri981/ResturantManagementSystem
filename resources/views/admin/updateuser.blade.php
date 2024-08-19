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
            /* White background */
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }


        /* Form control styling */
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 10px 15px;
            font-size: 1rem;
            color: #000;
            /* Black text color */
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
            width: 100%;
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

                            <br>
                            <form action="{{ route('updateuser', $user->id) }}" method="POST" style="margin-top: 20px;">
                                @csrf
                                <div style="margin-bottom: 15px;">
                                    <label style="font-weight: bold; color: #333; text-align: left; display: block; width: 100%;">Name:</label><br>
                                    <input style="color: black; padding: 5px; width: 100%;" type="text" name="name" value="{{ old('name', $user->name) }}" required>
                                </div>

                                <div style="margin-bottom: 15px;">
                                    <label style="font-weight: bold; text-align:left; color: #333; text-align: left; display: block; width: 100%;">Email:</label><br>
                                    <input style="color: black; padding: 5px; width: 100%;" type="email" name="email" value="{{ old('email', $user->email) }}" required>
                                </div>

                                <div style="margin-bottom: 15px;">
                                    <label style="font-weight: bold; color: #333; text-align: left; display: block; width: 100%;">User Type:</label><br>
                                    <input style="color: black; padding: 5px; width: 100%;" type="text" name="usertype" value="{{ old('usertype', $user->usertype) }}" required>
                                </div>

                                <div>
                                    <input style="background-color: #8a2be2; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" type="submit" value="Save">
                                </div>
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