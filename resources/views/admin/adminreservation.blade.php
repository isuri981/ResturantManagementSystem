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
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: greenyellow;
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
    </style>
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")

        <div class="container">
            <h1>Reservation Details</h1>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $reservation)
                        <tr>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>{{ $reservation->date }}</td>
                            <td>{{ $reservation->time }}</td>
                            <td>{{ $reservation->message }}</td>
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
