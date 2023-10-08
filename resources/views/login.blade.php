<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css\index.css')}}">
    <title>Login</title>
</head>
<body class="bodylog">
    <form class="form-container" method="post" class="card bordred" action="{{route('loginCompte_gmao')}}">
        @csrf
        <label for="email" class="form-label">E-mail :</label><br>
        <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}"><br>
        <label for="password" class="form-label">Password :</label><br>
        <input class="form-control" type="password" name="password" id="password" value="{{old('password')}}"><br>
        <button class="btn btn-danger">Login</button>
    </form>
</body>
</html>