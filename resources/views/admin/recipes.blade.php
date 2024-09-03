<x-app-layout>

</x-app-layout>

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
            display: flex;
            justify-content: center;
            /* Center the table horizontally */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 18px;

            /* Increase font size for better readability */
        }

        th,
        td {
            padding: 16px;
            /* Increase padding for more spacing */
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            /* Changed to a more prominent color */
            color: white;
            /* Changed text color for better contrast */
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
            font-size: 2rem;
            /* Increased font size for better visibility */
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")

        <div class="container">
            <h1>Customer Recipes Details</h1>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ingredients</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $recipes)
                        <tr>
                            <td>{{ $recipes->id }}</td>
                            <td>{{ is_array($recipes->ingredients) ? implode(', ', $recipes->ingredients) : $recipes->ingredients }}</td>
                            <td>{{ $recipes->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @include("admin.adminscript")
    </div>
</body>

</html>