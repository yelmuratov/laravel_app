<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Post Details</h1>
            </div>
            <div class="card-body">
                <h2 class="card-subtitle mb-2 text-muted">Post ID: {{ $post['id'] }}</h2>
                <h2 class="card-subtitle mb-2 text-muted">Category ID: {{ $post['category_id'] }}</h2>
                <h2 class="card-text">Content: {{ $post['content'] }}</h2>
                <h2 class="card-text">Likes: {{ $post['likes'] }}</h2>
                <h2 class="card-text">Dislikes: {{ $post['dislikes'] }}</h2>
            </div>
            <div class="card-footer">
                <a href="/admin/comments" class="btn btn-primary">Back to Posts</a>
                <a href="/editComment" class="btn btn-secondary">Edit Post</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
