<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Product Details</h1>
            </div>
            <div class="card-body">
                <h2 class="card-title">Product ID: {{ $product['id'] }}</h2>
                <h2 class="card-title">Category ID: {{ $product['category_id'] }}</h2>
                <h2 class="card-text">Description: {{ $product['description'] }}</h2>
                <h2 class="card-text">Price: {{ $product['price'] }}</h2>
                <a href="/admin/product" class="btn btn-primary mt-3">Back to Products</a>
                <a href="/updateProduct" class="btn btn-secondary mt-3">Edit Product</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
