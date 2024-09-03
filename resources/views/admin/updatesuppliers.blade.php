<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    @include("admin.admincss")

    <style>
        /* Card styling */

        .card-body {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
        }

        /* Form control styling */
        .form-control {
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 10px 15px;
            font-size: 1rem;
            color: #fff;
            width: 100%;
            margin-bottom: 15px;
        }

        /* Focus effect */
        .form-control:focus {
            border-color: #fff;
            outline: none;

        }

        /* Button styling */
        .btn-primary {
            background-color: #8a2be2;
            border: none;
            color: white;
            padding: 20px 30px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            width: 50%;
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
        @include("admin.navbar")

        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title" style="color: black;">Update Supplier</h2>


                            <div class="form-container">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <br>
                                <form action="{{ route('admin.updatesuppliers', $suppliers->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <label style="font-weight: bold; color: #333; text-align: left; display: block; width: 100%;" for="name">Supplier Name:</label>
                                        <input style="background-color: #fff; color: black; padding: 5px; width: 100%;" type="text" id="name" name="name" placeholder="Enter supplier name" value="{{ old('name', $suppliers->name) }}" required>
                                        @if ($errors->has('name'))
                                        <div class="error">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('contact_info') ? 'has-error' : '' }}">
                                        <label style="font-weight: bold; color: #333; text-align: left; display: block; width: 100%;" for="contact_info">Contact Information</label>
                                        <input style="background-color: #fff; color: black; padding: 5px; width: 100%;" type="text" id="contact_info" name="contact_info" placeholder="Enter contact information" value="{{ old('contact_info', $suppliers->contact_info) }}" required>
                                        @if ($errors->has('contact_info'))
                                        <div class="error">{{ $errors->first('contact_info') }}</div>
                                        @endif
                                    </div>

                                    <button style="background-color: #8a2be2; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" type="submit" class="btn btn-primary" type="submit" class="btn btn-primary">Add Supplier</button>
                                </form>
                            </div>
                        </div>

                        @include("admin.adminscript")
                    </div>
</body>

</html>