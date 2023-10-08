<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css\index.css')}}">
    <title>update Informations</title>
</head>
<body class="body">
    <form action="{{route('updateInfo',$data['id'])}}" method="post" >
        @csrf
        <label for="id" class="form-label">Id :</label><br/>
        <input class="form-control" type="text" name="id" id="id" value="{{old('id',$data['id'])}}"><br/>
        <label for="Nom" class="form-label">Nom :</label><br/>
        <input class="form-control" type="text" name="Nom" id="Nom" value="{{old('Nom',$data['Nom'])}}"><br/>
        <label class="form-label" for="Prenom" class="form-label">Prenom :</label><br/>
        <input class="form-control" type="text" name="Prenom" id="Prenom" value="{{old('Prenom',$data['Prenom'])}}"><br/>
        <label class="form-label" for="Email" class="form-label">E-mail :</label><br/>
        <input class="form-control" type="email" name="Email" id="Email" value="{{old('Email',$data['Email'])}}"><br/>
        <label class="form-label" for="Tele" class="form-label">Tele :</label><br/>
        <input class="form-control" type="text" name="Tele" id="Tele" value="{{old('Tele',$data['Tele'])}}"><br/>
        <label class="form-label" for="CNI" class="form-label">CNI :</label><br/>
        <input class="form-control" type="text" name="CNI" id="CNI" value="{{old('CNI',$data['CNI'])}}"><br/>
        <label class="form-label" for="Periode_loc" class="form-label">Periode_loc :</label><br/>
        <input class="form-control" type="text" name="Periode_loc" id="Periode_loc" value="{{old('Periode_loc',$data['Periode_loc'])}}"><br/>
        <button id="btn1" class="btn btn-primary mt-5">update Informations</button>
    </form>
    
</body>
</html>