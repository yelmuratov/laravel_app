<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Details</title>
</head>
<body>
    <h1>Order Details</h1>
    <h2>Order ID: {{ $order['id'] }}</h2>
    <h2>Product ID: {{ $order['product_id'] }}</h2>
    <h2>User ID: {{ $order['user_id'] }}</h2>
    <h2>Order Count: {{ $order['count'] }}</h2>
    <h2>Total Price: {{ $order['total_price'] }}</h2>
    <a href="{{ route('admin.orders.index') }}">Back to Orders</a>
    <a href="{{ route('order.edit', $order->id) }}">Edit Order</a>
    <form action="{{ route('order.destroy', $order->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Order</button>
    </form>
</body>
</html>
