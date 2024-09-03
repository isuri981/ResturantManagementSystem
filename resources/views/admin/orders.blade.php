<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Customer Orders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @include("admin.admincss")
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container-scroller {
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 2.5rem;
            /* Increased font size for better visibility */
            color: #333;
            margin-bottom: 30px;
            font-weight: 300;
            text-align: center;
        }

        form {
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
        }

        .input-group {
            display: flex;
            max-width: 600px;
            /* Increased max-width for better usability */
            width: 100%;
        }

        .search-input {
            flex: 1;
            border: 1px solid #ced4da;
            border-radius: 8px 0 0 8px;
            padding: 12px;
            /* Increased padding for better input area */
            font-size: 18px;
            /* Increased font size for better readability */
            outline: none;
            transition: border-color 0.3s ease;
        }

        .search-input:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }

        .search-button {
            border-radius: 0 8px 8px 0;
            border: none;
            padding: 12px 24px;
            /* Increased padding for a more prominent button */
            font-size: 18px;
            /* Increased font size for better readability */
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            background-color: #28a745;
            color: white;
        }

        .search-button:hover {
            background-color: #218838;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 18px;
            justify-content: center;
            /* Increased font size for better readability */
        }

      
        th,
        td {
            padding: 20px;
            /* Increased padding for better spacing */
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
            font-size: 18px;
            text-transform: lowercase;
        }

        td {
            background-color: #fff;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e2e6ea;
        }

        .status {
            font-weight: lighter;
        }

        .status.in-progress {
            color: #dc3545;
        }

        .status.on-the-way {
            color: #ffc107;
        }

        .status.delivered {
            color: #28a745;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            /* Adjusted padding for better button size */
            border-radius: 4px;
            font-size: 14px;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin: 4px;
            /* Adjusted margin for spacing between buttons */
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-info:hover {
            background-color: #138496;
            transform: translateY(-2px);
        }

        .btn-success:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }

        .btn-primary:hover {
            background-color: #0069d9;
            transform: translateY(-2px);
        }

        .btn:active {
            transform: translateY(0);
        }

        .alert {
            padding: 15px;
            background-color: #f44336;
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")
        <div class="container mt-2">
            <h1>Customer Orders</h1>
            <form action="{{ url('/search') }}" method="GET" class="search-form" onsubmit="return validateSearch()">
                <div class="input-group">
                    <input type="text" name="search" placeholder="Search by Name" class="search-input" id="search-input">
                    <button type="submit" class="search-button">Search</button>
                </div>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Food Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Payment Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $order)
                    <tr>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->foodname }}</td>
                        <td>${{ $order->price }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>${{ $order->price * $order->quantity }}</td>
                        <td class="status {{ strtolower(str_replace(' ', '-', $order->payment_status)) }}">
                            {{ $order->payment_status }}
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ url('/on_the_way/' . $order->id) }}" title="On the way">
                                <i class="fas fa-truck"></i>
                            </a>
                            <a class="btn btn-success" href="{{ url('/delivered/' . $order->id) }}" title="Delivered">
                                <i class="fas fa-check-circle"></i>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('/print_pdf/' . $order->id) }}" title="Download PDF">
                                <i class="fas fa-file-pdf"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include("admin.adminscript")
    </div>
    <script>
        function validateSearch() {
            var searchInput = document.getElementById('search-input').value;
            if (searchInput.trim() === '') {
                alert('Please enter a search term.');
                return false;
            }
            return true;
        }
    </script>
</body>

</html>