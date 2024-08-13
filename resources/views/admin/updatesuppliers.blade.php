<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">

    <!-- Required meta tags -->
    @include("admin.admincss")
    <style>
        .container {
            margin-top: 20px;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn {
            font-size: 16px;
            padding: 12px 20px;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
            border: none;
            color: #fff;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-group .error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }

        .form-group.success input {
            border-color: #28a745;
        }

        .form-group.success .error {
            display: none;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")

        <div class="container">
            <h1 class="text-center">Update Supplier</h1>

            <div class="form-container">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('admin.updatesuppliers', $suppliers->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">Supplier Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter supplier name" value="{{ old('name', $suppliers->name) }}" required>
                        @if ($errors->has('name'))
                        <div class="error">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('contact_info') ? 'has-error' : '' }}">
                        <label for="contact_info">Contact Information</label>
                        <input type="text" id="contact_info" name="contact_info" placeholder="Enter contact information" value="{{ old('contact_info', $suppliers->contact_info) }}" required>
                        @if ($errors->has('contact_info'))
                        <div class="error">{{ $errors->first('contact_info') }}</div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Update Supplier</button>
                </form>
            </div>
        </div>

        @include("admin.adminscript")
    </div>
</body>

</html>