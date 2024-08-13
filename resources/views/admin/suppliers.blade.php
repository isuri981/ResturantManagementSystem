<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include("admin.admincss")

    <style>
        .container {
            margin-top: 20px;
        }

        .table-container {
            background-color: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: black;
            color: black;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
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
            <h1>Suppliers</h1>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <a href="{{ route('admin.addsuppliers') }}" class="btn btn-primary mb-3">Add Supplier</a>

            <div class="table-container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact Info</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($suppliers as $supplier)
                        <tr>
                            <td>{{ $supplier->id }}</td>
                            <td>{{ $supplier->name }}</td>
                            <td>{{ $supplier->contact_info }}</td>
                            <td>
                                <a href="{{ route('admin.edit', $supplier->id) }}" class="btn btn-warning btn-sm">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.delete', $supplier->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDeletion();">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @include("admin.adminscript")
    </div>

    <script>
        function confirmDeletion() {
            return confirm("Are you sure you want to delete this supplier?");
        }
    </script>
</body>

</html>
