<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Verifique</h2>
    <form action="{{route('verification.send')}}" method="post">
        @csrf
        <button type="submit">Re-enviar Email</button>
    </form>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>