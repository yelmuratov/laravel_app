<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <h1>Like Show Page</h1>
    <h2>{{ $like['id'] }}</h2>
    <h2>{{ $like['post_id'] }}</h2>
    <h2>{{ $like['user_id'] }}</h2>
    <h2>{{ $like['dislike'] }}</h2>
    <a href="{{ route('admin.pages.table.likes') }}">Back</a>
    <a href="{{ route('like.edit', $like->id) }}">Edit</a>
    <form action="{{ route('like.destroy', $like->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
