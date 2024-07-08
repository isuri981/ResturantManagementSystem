<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
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
        .form-container input[type="file"] {
            width: calc(100% - 22px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: blue;
            box-sizing: border-box;
        }

        .form-container input[type="text"]::placeholder {
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
            <h1>Add Chef</h1>
            <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" required placeholder="Enter name">
                </div>
                <div>
                    <label for="speciality">Speciality</label>
                    <input type="text" name="speciality" required placeholder="Enter speciality">
                </div>
                <div>
                    <label for="image">Image</label>
                    <input type="file" name="image" required>
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
