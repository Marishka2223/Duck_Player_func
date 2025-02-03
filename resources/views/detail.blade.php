<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$bb->title}}::Объявление</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <br><br><br>
    <div class="container">
        @extends('layouts.app')

        @section('title','Главная')


         <br><br>
        <h2>{{$bb->title}}</h2>
        <p>{{$bb->content}}</p>
        <p> Срок: {{$bb->price}} месяцев</p>
        <p>Приобрёл: {{$bb->user->name}}</p>
        <p> Статус: {{$bb->status}}</p>
        <p><a href="{{route('checkpoint')}}">В админ-панель</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>