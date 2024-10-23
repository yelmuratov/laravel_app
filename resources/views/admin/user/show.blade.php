<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">User Details</h1>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">User ID: {{ $user['id'] }}</h2>
                <h2 class="card-title">Name: {{ $user['name'] }}</h2>
                <h2 class="card-title">Email: {{ $user['email'] }}</h2>
                <h2 class="card-title">Role: {{ $user['role'] }}</h2>
                <a href="/admin/data" class="btn btn-primary mt-3">Back to Users</a>
                <a href="admin/userUpdate" class="btn btn-secondary mt-3">Edit User</a>
            </div>
        </div>
    </div>
</body>
</html>
