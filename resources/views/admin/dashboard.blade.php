<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
</head>
<body>
    <h1>This is 
        @if(Session::get('admin_type') == 1)
        Super Admin
        @elseif(Session::get('admin_type') == 2)
        admin
        @endif
        <br><br>
        <a href="logout">Logout</a>

    </h1>
</body>
</html>