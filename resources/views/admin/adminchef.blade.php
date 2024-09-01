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
            <h1>Food Chefs</h1>

            <a class="btn btn-primary btn-sm" href="{{ route('AddChef') }}">+ Add Chef</a>

            <div style="position: relative; top: 30px; right: -100px">
                <form id="bulk-action-form" action="{{ url('/deletechef') }}" method="POST">
                    @csrf
                    @method('POST')

                    <table>
                        <tr align="center">
                            <th>Select</th>
                            <th>Chef Name</th>
                            <th>Speciality</th>
                            <th>Image</th>

                        </tr>

                        @foreach($data as $item)
                        <tr align="center">
                            <td>
                                <input type="checkbox" name="selected_items[]" value="{{ $item->id }}">
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->speciality }}</td>
                            <td><img height="100" width="100" src="/chefimage/{{ $item->image }}"></td>
                            <!-- <td>
                                <a class="btn btn-success" href="{{ url('/updatechef', $item->id) }}" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-danger" type="button" onclick="confirmDelete('{{ $item->id }}')">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <form id="delete-form-{{ $item->id }}" action="{{ url('/deletechef', $item->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td> -->
                        </tr>
                        @endforeach

                        <!-- Add an extra row for the bulk actions buttons -->
                        <tr align="center">
                            <td colspan="6">
                                <button type="button" class="btn btn-success mt-2" onclick="editSelectedItems()">
                                    <i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger mt-2" onclick="deleteSelectedItems()">
                                    <i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

        @include("admin.adminscript")

        <script>
            function confirmDelete(id) {
                if (confirm('Are you sure you want to delete this item?')) {
                    document.getElementById('delete-form-' + id).submit();
                }
            }

            function editSelectedItems() {
                const selectedItems = document.querySelectorAll('input[name="selected_items[]"]:checked');
                if (selectedItems.length === 0) {
                    alert('Please select at least one item to edit.');
                    return;
                }

                const itemIds = Array.from(selectedItems).map(item => item.value);
                window.location.href = `{{ url('/updatechef') }}?ids=${itemIds.join(',')}`;
            }

            function deleteSelectedItems() {
                const selectedItems = document.querySelectorAll('input[name="selected_items[]"]:checked');
                if (selectedItems.length === 0) {
                    alert('Please select at least one item to delete.');
                    return;
                }

                if (confirm('Are you sure you want to delete the selected items?')) {
                    document.getElementById('bulk-action-form').action = "{{ url('/deletechef') }}";
                    document.getElementById('bulk-action-form').submit();
                }
            }
        </script>
    </div>
</body>

</html>