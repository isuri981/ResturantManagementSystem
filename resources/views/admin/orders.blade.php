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
            font-size: 2rem;
            color: #333;
            text-align: left;
            margin-bottom: 30px;
            font-weight: 300;
        }

        form {
            text-align: center;
            margin-bottom: 30px;
        }

        input[type="text"] {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 80%;
            max-width: 400px;
            margin-right: 10px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 16px;
        }

        th,
        td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: greenyellow;
            color: #000;
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
            /* Red */
        }

        .status.on-the-way {
            color: #ffc107;
            /* Yellow */
        }

        .status.delivered {
            color: #28a745;
            /* Green */
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 4px;
            font-size: 14px;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin: 2px;
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
    </style>
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")

        <div class="container mt-2">
            <h1>Customer Orders</h1>
            <form action="{{ url('/search') }}" method="get">
                @csrf
                <input type="text" name="search" placeholder="Search by Name">
                <input type="submit" value="Search" class="btn btn-success">
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
                        <th>Change Status</th>
                        <th>Print PDF</th>
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
    </div>

    @include("admin.adminscript")
</body>

</html>