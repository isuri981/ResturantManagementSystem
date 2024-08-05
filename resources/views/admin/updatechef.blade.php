<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">


    @include("admin.admincss")





</head>

<body>


    <div class="container-scroller">

        @include("admin.navbar")

        <div style="position: relative; top: 60px; right: -150px; width: 400px; background-color: #f0f0f0; padding: 20px; border: 1px solid #ccc; border-radius: 8px;">

        <div class="form-container">
    <h1 style="text-align: center; color: #333;">Update FoodChef</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/updatefoodchef', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; color: #333;">Chef Name:</label><br>
            <input style="color: blue; padding: 5px; width: 100%;" type="text" name="name" value="{{ old('name', $data->name) }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; color: #333;">Speciality:</label><br>
            <input style="color: blue; padding: 5px; width: 100%;" type="text" name="speciality" value="{{ old('speciality', $data->speciality) }}">
            @error('speciality')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; color: #333;">Old Image:</label><br>
            <img style="max-width: 200px; max-height: 200px; margin-top: 10px;" src="/chefimage/{{ $data->image }}">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; color: #333;">New Image:</label><br>
            <input type="file" name="image">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <input style="background-color: #8a2be2; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" type="submit" value="Update Chef">
        </div>

    </form>
</div>

        </div>

    </div>
    @include("admin.adminscript")









</body>

</html>