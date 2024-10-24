<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Like Show Page</h1>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">ID: {{ $like['id'] }}</h2>
                <h2 class="card-title">Post ID: {{ $like['post_id'] }}</h2>
                <h2 class="card-title">User ID: {{ $like['user_id'] }}</h2>
                <h2 class="card-title">Like: {{ $like['like'] }}</h2>
                <a href="/admin/likes" class="btn btn-primary mt-3">Back</a>
                <a href="/editeLike" class="btn btn-secondary mt-3">Edit</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
