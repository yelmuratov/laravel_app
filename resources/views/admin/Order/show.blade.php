<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Order Details</h1>
            </div>
            <div class="card-body">
                <h2 class="card-title">Order ID: {{ $order['id'] }}</h2>
                <p class="card-text">Product ID: {{ $order['product_id'] }}</p>
                <p class="card-text">User ID: {{ $order['user_id'] }}</p>
                <p class="card-text">Order Count: {{ $order['count'] }}</p>
                <p class="card-text">Total Price: {{ $order['total_price'] }}</p>
                <a href="/admin/orders" class="btn btn-primary">Back to Orders</a>
                <a href="/orderEdite" class="btn btn-secondary">Edit Order</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
