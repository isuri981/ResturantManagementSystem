<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include("admin.admincss")

    <style>
        .form-container {
            position: relative;
            top: 60px;
            right: -150px;
            max-width: 600px;
            width: 100%;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin: 20px 0;
        }

        .form-container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-container div {
            margin-bottom: 15px;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            text-align: left;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container input[type="file"] {
            width: calc(100% - 22px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: blue;
            box-sizing: border-box;
        }

        .form-container input[type="text"]::placeholder,
        .form-container input[type="number"]::placeholder,
        .form-container input[type="file"]::placeholder {
            color: #999;
        }

        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: blueviolet;
            color: #fff;
            cursor: pointer;
            box-sizing: border-box;
        }

        .form-container input[type="submit"]:hover {
            background-color: darkviolet;
        }
    </style>

</head>

<body>

    <div class="container-scroller">
        @include("admin.navbar")

        <div class="form-container">
            <h1>Add Food Menu</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Write a title" required>
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="number" name="price" placeholder="Write a price" required>
                </div>
                <div>
                    <label for="image">Image</label>
                    <input type="file" name="image" placeholder="Upload an image" required>
                </div>
                <div>
                    <label for="description">Description</label>
                    <input type="text" name="description" placeholder="Write a description" required>
                </div>
                <div>
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>

    @include("admin.adminscript")

</body>

</html>