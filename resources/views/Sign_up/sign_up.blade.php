<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <form action="{{URL::to('/register')}}" method="POST">
            {{ csrf_field() }}
            <input type="text" name="user_name" placeholder="User Name">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>
</html>
