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

        <div style="position: relative; top: 30px; right: -150px; width: 400px; background-color: #f0f0f0; padding: 20px; border: 1px solid #ccc; border-radius: 8px;">

            <div class="form-container">
                <h1 style="font-style: bold;">Update Food Menu</h1>

                <form action="{{ url('/update', $data->id) }}" method="post" enctype="multipart/form-data">
   

                    @csrf

                    <div style="margin-bottom: 15px;">
                        <label style="font-weight: bold; color: #333;">Title:</label><br>
                        <input style="color: blue; padding: 5px; width: 100%;" type="text" name="title" value="{{ $data->title }}" required>
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label style="font-weight: bold; text-align:left; color: #333;">Price:</label><br>
                        <input style="color: blue; padding: 5px; width: 100%;" type="number" name="price" value="{{ $data->price }}" required>
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label style="font-weight: bold; color: #333;">Description:</label><br>
                        <textarea style="color: blue; padding: 5px; width: 100%;" name="description" required>{{ $data->description }}</textarea>
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label style="font-weight: bold; color: #333;">Old Image:</label><br>
                        <img style="max-width: 200px; max-height: 200px; margin-top: 10px;" src="/foodimage/{{ $data->image }}">
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label style="font-weight: bold; color: #333;">New Image:</label><br>
                        <input type="file" name="image" required>
                    </div>

                    <div>
                        <input style="background-color: #8a2be2; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" type="submit" value="Save">
                    </div>

                </form>

            </div>


        </div>
        @include("admin.adminscript")

    </div>

    <script>
        function editSelectedItems() {
            const selectedItems = document.querySelectorAll('input[name="selected_items[]"]:checked');
            if (selectedItems.length === 0) {
                alert('Please select at least one item to edit.');
                return;
            }

            const itemIds = Array.from(selectedItems).map(item => item.value);
            window.location.href = `{{ url('/updateview') }}?ids=${itemIds.join(',')}`;
        }
    </script>











</body>

</html>