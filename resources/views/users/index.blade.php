<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Users :</h1>
@if(session("message"))
    <div class="alert alert-sucess">
        {{session('message')}}
    </div>
@endif
<ul>
    @foreach($users as $user)
        <li><a href="{{ route ('users.show',$user)}}">{{$user->name}}</a></li>
    @endforeach
</ul>

<form action="{{route('users.create', $user)}}">
    <button type="submit">Ajouter un utilisateur</button>
</form>

</body>
</html>
