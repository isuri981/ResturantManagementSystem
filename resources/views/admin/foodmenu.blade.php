<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @include("admin.admincss")
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")

        <div class="container mt-2">
            <h1>Food Menu</h1>

            <a class="btn btn-primary btn-sm" href="{{ route('AddFood') }}">+ Add foods</a>

            <div style="position: relative; top: 30px; right: -100px">
                <!-- Form for bulk actions -->
                <form id="bulk-action-form" action="{{ url('/deletemenu') }}" method="POST">
                    @csrf
                    <!-- Spoof the DELETE method -->
                    <input type="hidden" name="_method" value="DELETE">

                    <table>
                        <tr align="center">
                            <th>Select</th>
                            <th>Food Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                        </tr>

                        @foreach($data as $item)
                        <tr align="center">
                            <td>
                                <input type="checkbox" name="selected_items[]" value="{{ $item->id }}">
                            </td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->description }}</td>
                            <td><img height="100px" width="100px" src="/foodimage/{{ $item->image }}"></td>
                        </tr>
                        @endforeach
                    </table>

                    <!-- Buttons for bulk actions -->
                    <button type="button" class="btn btn-success mt-2" onclick="editSelectedItems()">
                        <i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger mt-2" onclick="deleteSelectedItems()">
                        <i class="fas fa-trash-alt"></i></button>
                </form>
            </div>
        </div>

        @include("admin.adminscript")

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

            function deleteSelectedItems() {
                const selectedItems = document.querySelectorAll('input[name="selected_items[]"]:checked');
                if (selectedItems.length === 0) {
                    alert('Please select at least one item to delete.');
                    return;
                }

                if (confirm('Are you sure you want to delete the selected items?')) {
                    document.getElementById('bulk-action-form').submit();
                }
            }
        </script>

    </div>
</body>

</html>