<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klassy Cafe Report</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .info {
            margin-bottom: 20px;
        }

        .info h3 {
            font-size: 1.25rem;
            color: #444;
            margin: 10px 0;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }

        .info p {
            font-size: 1rem;
            color: #666;
            margin: 5px 0;
        }

        h4 {
            margin-top: 30px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            text-align: center;
            color: #999;
            font-size: 1rem;
        }

        .footer {
            text-align: center;
            color: #666;
            font-size: 0.875rem;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Klassy Cafe Report</h2>

        <div class="info">
            <h3>Customer Details</h3>
            <p><strong>Name:</strong> {{$data->name}}</p>
            <p><strong>Address:</strong> {{$data->address}}</p>
            <p><strong>Phone:</strong> {{$data->phone}}</p>
        </div>

        <div class="info">
            <h3>Order Details</h3>
            <p><strong>Food Name:</strong> {{$data->foodname}}</p>
            <p><strong>Price:</strong> ${{$data->price}}</p>
        </div>

        <h4>Generated on: {{ date('Y-m-d H:i:s') }}</h4>

        <div class="footer">
            <p>Thank you for choosing Klassy Cafe!</p>
        </div>
    </div>
</body>

</html>