<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    @include("admin.admincss")

    <style>
         .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }


        /* General form styling */
        form {
            margin-top: 20px;
        }

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
            width: 25%;
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
                            <h2 class="card-title" style="color: black;">Add New Supplier</h2>
                            <br>
                            <form action="{{ route('admin.addsuppliers') }}" method="POST">
                                @csrf

                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label style="font-weight: bold; color: #333; text-align: left; display: block; width: 100%;" for="name">Supplier Name:</label>
                                    <input style="background-color: #fff; color: black; padding: 5px; width: 100%;" type="text" id="name" name="name" placeholder="Enter supplier name" value="{{ old('name') }}" required>
                                    @if ($errors->has('name'))
                                    <div class="error">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('contact_info') ? 'has-error' : '' }}">
                                    <label style="font-weight: bold; color: #333; text-align: left; display: block; width: 100%;" for="contact_info">Contact Information:</label>
                                    <input style="background-color: #fff; color: black; padding: 5px; width: 100%;" type="text" id="contact_info" name="contact_info" placeholder="Enter contact information" value="{{ old('contact_info') }}" required>
                                    @if ($errors->has('contact_info'))
                                    <div class="error">{{ $errors->first('contact_info') }}</div>
                                    @endif
                                </div>

                                <button style="background-color: #8a2be2; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" type="submit" class="btn btn-primary" type="submit" class="btn btn-primary">Add Supplier</button>
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