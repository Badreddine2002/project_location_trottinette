<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css\index.css')}}">
    <title>Register</title>
</head>
<body class="bodyregister">
    <form class="form-container" class="card bordred" action="{{route('registerCompte_gmao')}}" method="post">
        @csrf
        <label for="nom" class="form-label">Nom :</label><br>
        <input class="form-control"  type="text" name="nom" id="nom" value="{{old('nom')}}"><br>
        <label for="prenom" class="form-label">Prenom :</label><br>
        <input class="form-control" type="text" name="prenom" id="prenom" value="{{old('prenom')}}"><br>
        <label for="email" class="form-label">E-mail :</label><br>
        <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}"><br>
        <label for="password" class="form-label">Password :</label><br>
        <input class="form-control" type="password" name="password" id="password" value="{{old('password')}}"><br>
        <button class="btn btn-danger">Enregistrer</button>
    </form>
</body>
</html>
