<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10px;
            background-color: #f4f4f9;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        p {
            text-align: center;
            font-size: 1em;
            margin-bottom: 10px;
        }

        table {
            width: 90%;
            max-width: 800px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 0.9em;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            text-align: center;
            font-size: 0.9em;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td {
            text-align: center;
        }

        .pagination {
            text-align: center;
            margin: 20px 0;
        }

        .pagination a {
            padding: 8px 16px;
            margin: 0 4px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
        }

        .pagination a:hover {
            background-color: #45a049;
        }

        @media screen and (max-width: 600px) {

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            th,
            td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            th::before,
            td::before {
                content: attr(data-label);
                position: absolute;
                left: 15px;
                width: calc(50% - 30px);
                text-align: left;
                font-weight: bold;
            }

            th,
            td {
                text-align: left;
                padding: 8px;
                border: none;
                border-bottom: 1px solid #ddd;
            }

            th::before,
            td::before {
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
                color: #333;
            }

            tr {
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <h1>Feedback Report</h1>
    <p>Average Rating: {{ $averageRating }}</p>
    <p>Average Sentiment Score: {{ $averageSentiment }}</p>

    <!-- Placeholder for future data visualization like a bar chart or graph -->
    <div id="chart" style="width: 90%; max-width: 800px; margin: 0 auto; padding: 20px;">
        <!-- Add your data visualization here -->
    </div>

    <table aria-label="Feedback Report Table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Feedback</th>
                <th scope="col">Rating</th>
                <th scope="col">Sentiment Score</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Customer Email</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feedbacks as $feedback)
            <tr>
                <td data-label="ID">{{ $feedback->id }}</td>
                <td data-label="Feedback">{{ $feedback->feedback }}</td>
                <td data-label="Rating">{{ $feedback->rating }}</td>
                <td data-label="Sentiment Score">{{ $feedback->sentiment_score }}</td>
                <td data-label="Customer Name">{{ $feedback->customer_name }}</td>
                <td data-label="Customer Email">{{ $feedback->customer_email }}</td>
                <td data-label="Date">{{ $feedback->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

   
</body>

</html>