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

                <form action="{{ route('updatefoodchefs') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $chef)
                    <input type="hidden" name="ids[]" value="{{ $chef->id }}">

                    <div style="margin-bottom: 15px;">
                        <label style="font-weight: bold; color: #333;">Chef Name:</label><br>
                        <input style="color: blue; padding: 5px; width: 100%;" type="text" name="name[{{ $chef->id }}]" value="{{ old('name.'.$chef->id, $chef->name) }}">
                        @error('name.'.$chef->id)
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label style="font-weight: bold; color: #333;">Speciality:</label><br>
                        <input style="color: blue; padding: 5px; width: 100%;" type="text" name="speciality[{{ $chef->id }}]" value="{{ old('speciality.'.$chef->id, $chef->speciality) }}">
                        @error('speciality.'.$chef->id)
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label style="font-weight: bold; color: #333;">Old Image:</label><br>
                        <img style="max-width: 200px; max-height: 200px; margin-top: 10px;" src="/chefimage/{{ $chef->image }}">
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label style="font-weight: bold; color: #333;">New Image:</label><br>
                        <input type="file" name="image[{{ $chef->id }}]">
                        @error('image.'.$chef->id)
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @endforeach

                    <div>
                        <input style="background-color: #8a2be2; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" type="submit" value="Update Chefs">
                    </div>
                </form>

            </div>
        </div>

        @include("admin.adminscript")
    </div>

    <script>
        // Define a JavaScript variable for the base URL using Blade syntax
        const baseUrl = "{{ url('/updatechef') }}";

        function editSelectedItems() {
            const selectedItems = document.querySelectorAll('input[name="selected_items[]"]:checked');
            if (selectedItems.length === 0) {
                alert('Please select at least one item to edit.');
                return;
            }

            const itemIds = Array.from(selectedItems).map(item => item.value);

            // Use the JavaScript variable for the URL
            const url = `${baseUrl}?ids=${itemIds.join(',')}`;

            // Redirect to the constructed URL
            window.location.href = url;
        }
    </script>
</body>

</html>