<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Status Changed</title>
</head>

<body>
    <h1>Hello {{ $order->name }}</h1>
    <p>Your order status has been updated to: {{ $order->payment_status }}.</p>
    <p>Thank you for ordering with us!</p>
</body>

</html>