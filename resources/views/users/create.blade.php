<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
<h1>Ajouter un user</h1>
<form action="{{route('users.store')}}" method="POST">
    @csrf
    <label>Nom
        <input type="text" name="name">
    </label>
    @error('name')
    <div class="alert alert danger">{{$message}}</div>
    @enderror
    <label>Email        <input type="text" name="email">    </label>
    @error('email')
    <div class="alert alert danger">{{$message}}</div>
    @enderror
    <label>Date de naissance        <input type="date" name="birth_date">    </label>
    @error('birth_date')
    <div class="alert alert danger">{{$message}}</div>
    @enderror
    <label>Mot de passe        <input type="password" name="password">    </label>
    @error('password')
    <div class="alert alert danger">{{$message}}</div>
    @enderror
    <label>Confirmer le mot de passe        <input type="password" name="password_confirmation" >    </label>
    @error('password_confirmation')
    <div class="alert alert danger">{{$message}}</div>
    @enderror
    <button type="submit">Créer</button></form>


</body></html>
