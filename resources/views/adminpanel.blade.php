<style>
    body 
    { overflow-x: hidden;}


    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duck Player | Админ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Varela&family=Gothic+A1:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
       
</head>

<body>
 @extends('layouts.app')
 <br><br><br><br><br>
 
    <div class="container">
   <div style="display: flex; flex-direction: row;">
 
        <form action="{{route('logout')}}" method="POST" class="forn-inline" style="position: relative; left: 95%">
                @csrf
                <input type="submit" class="btn btn-danger" value="Выход" style="background-color: orange; border: 1px solid orange;">
</form>
</div>
<!--- 
<div style="display: flex; flex-direction: row;">
<p>Сейчас в сети: <p style="color: red; margin-left: 5px;"> {{Auth::user()->name}}<p></p>
</div>
--->


        <table class="table table-hover">

            <h3>Таблица всех пользователей</h3>
    <thead>
    <th>ID</th>
      <th>Логин</th>
      <th>Почта</th>
      <th>Дата регистрации</th>
    </thead>
    <tbody>
    @php
    $users = \App\Models\User::all();
    @endphp
@foreach($users as $bb)
        <tr>
        <td>{{$bb->id}} </td>
          <td>{{$bb->name}} </td>
          <td>{{$bb->email}} </td>
          <td>{{$bb->created_at}}</td>
        </tr>

   
@endforeach
    </tbody>
</table>

<br><br>
<table class="table table-hover">
            <h3>Таблица всех подписок</h3>
    <thead>
    <th>ID</th>
      <th>Подписка</th>
      <th>Тип подписки</th>
      <th>ID пользователя</th>
      <th>Дата создания</th>
    </thead>
    <tbody>
    @php
    $users = \App\Models\Bb::all();
    $userz = \App\Models\User::all();
    @endphp
@foreach($users as $bb)
        <tr>
        <td>{{$bb->id}} </td>
          <td>{{$bb->title}} </td>
          <td>{{$bb->content}} </td>
          <td>{{$bb->user_id}}</td>
          <td>{{$bb->created_at}}</td>
           <td>
  
        <a href="{{route('detail',['bb'=>$bb->id])}}" style="color: orange;" >Подробнее</a>
</td>
<td>
        <a href="{{route('bb.edit',['bb'=>$bb->id])}}" style="color: orange;">Изменить</a>
</td>
<td>
        <a href="{{route('bb.delete',['bb'=>$bb->id])}}" style="color: orange;">Удалить</a>
</td>
        </tr>
       
@endforeach
    </tbody>
</table>
    </div>
    <br><br>
    <br><br>
    <footer class="footer" style=" display: flex;
    justify-content: flex-end;">
        <div class="social-links">
            <a href="#"><img src="{{ asset('images/ru.png') }}" alt="Rutube"></a>
            <a href="#"><img src="{{ asset('images/wk.png') }}" alt="WK"></a>
            <a href="#"><img src="{{ asset('images/kk.png') }}" alt="OK"></a>
            <div style="display: flex; flex-direction: column;">
            <a>адрес офиса:
                <a style="margin-left: 32%;">Москва,ул.Пушкина,д.Колотушкина45</a></a>
               </div> 
        </div>
        <p>© 2024 Duck Player, Все права защищены уточками.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<style>
    .footer {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: #1b1b1b;
    padding: 20px 0;
    color: #6b6b6b;
    text-align: center;
    width: 100%;
    margin-top: -10px;
}

.footer .social-links {
    display: flex;
    gap: 20px;
    margin-bottom: 10px;
}

.footer .social-links a {
    color: #6b6b6b;
    text-decoration: none;
}

.footer p {
    font-size: 12px;
    line-height: 20px;
}

    </style>