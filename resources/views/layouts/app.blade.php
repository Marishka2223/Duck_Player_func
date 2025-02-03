
 <!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')::Объявление</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/styles/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="{{route('index')}}" class="navbar-brand me-autho">Главная</a>
            @guest
            <a href="{{route('register')}}" class="nav-item nav-link">Регистрация</a>
            <a href="{{route('login')}}" class="nav-item nav-link">Вход</a>
            @endguest
            @auth
            <a href="{{route('home')}}" class="nav-item nav-link">Мои объявления</a>
            <form action="{{route('logout')}}" method="POST" class="forn-inline">
                @csrf
                <input type="submit" class="btn btn-danger" value="Выход">
</form>
@endauth
</div>
</nav>

        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
-->
<style>

.flandre a:hover{
        color: white;
    }

     .flan .flandre {
    display: flex !important;
    gap: 50px !important;
    margin-left: 30% !important;
     }
    .flan {
    display: flex;
    align-items: center;
    padding: 10px 20px;
    position: fixed;
    width: 100%;
    top: 0;
    transition: background 0.3s;
    background-color: #e78b2e;
}

.flan .logo {
    font-size: 24px;
    font-weight: bold;
    color: white;
}
 .flandre a {
    color: white;
    text-decoration: none;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    position: relative;
}

.flan .flandre a::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 100%;
    height: 2px;
    background: rgb(179, 81, 1);
    transform: scaleX(0);
    transform-origin: right;
    transition: transform 0.3s;
}

.flan .flandre a:hover::after {
    transform: scaleX(1);
    transform-origin: left;
}

.flan .menu-icon {
    display: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
}

    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Varela&family=Gothic+A1:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="flan" style="position: fixed;z-index:1">
        <div class="logo"><img src="{{ asset('images/logo.png') }}"></div>
        <div class="flandre">
            <a href="{{route('index')}}">Главная</a>
            <a href="{{route('ab')}}">О проекте</a>
            <a href="{{route('dow')}}">Скачать</a>
            <a href="{{route('checkpoint')}}">Ваш аккаунт</a>
        </div>
        <div class="menu-icon">&#9776;</div>
    </nav>
</body>
</html>