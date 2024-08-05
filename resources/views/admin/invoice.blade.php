<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klassy Cafe Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        h3 {
            color: #555;
            margin-bottom: 5px;
        }

        h4 {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
            text-align: center;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Klassy Cafe Report</h2>
        <h3>Customer name: {{$data->name}}</h3>
        <h3>Customer address: {{$data->address}}</h3>
        <h3>Customer phone: {{$data->phone}}</h3>
        <h3>Food Name: {{$data->foodname}}</h3>
        <h3>Price: {{$data->price}}</h3>

        <h4>Generated on: {{ date('Y-m-d H:i:s') }}</h4>
    </div>
</body>

</html>
