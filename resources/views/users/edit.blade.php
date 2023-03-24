<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<h1>Modifier les informations de {{$user->name}} :</h1>
<form action="{{route('users.update', $user)}}" method="POST">
    @csrf
    @method('PUT')



   <label>Nom        <input type="text" name="name" value="{{$user->name}}">    </label>
    <label>Email        <input type="text" name="email" value="{{$user->email}}">    </label>
    <label>Date de naissance        <input type="date" name="birth_date" value="{{$user->birth_date->format('Y-m-d')}}">    </label>
    <label>Mot de passe        <input type="password" name="password" >    </label>
    <label>Confirmer le mot de passe        <input type="password" name="password_confirmation" >    </label>
    <button type="submit">Modifier les informations</button></form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</body></html>

