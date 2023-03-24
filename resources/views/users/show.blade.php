<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<h1>{{$user->name}}</h1>
<p>Email:{{$user->email}}</p>
<p>Crée le : {{$user->created_at}}</p>
<p>Anniversaire : {{$user->birth_date->format('d F')}} {{now()->diffInYears($user->birth_date)}}ans</p>

<form action="{{route('users.destroy', $user)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button></form>

    <form action="{{route('users.edit', $user)}}">
        <button type="submit">Modifier les informations</button></form>

</body>
</html>
