<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
</head>
<body>
    <h1>This is Home Page
        @if(Session::has('admin_type'))
        {{ Session::has('admin_type') }}
        <a href="admin/dashboard">Dashboard</a>
        <a href="admin/logout">Logout</a>
        @endif
        <br><br>
        

    </h1>
</body>
</html>