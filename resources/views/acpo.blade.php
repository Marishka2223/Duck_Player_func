<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duck Player | MyDuckAccount: {{ Auth::user()->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Varela&family=Gothic+A1:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <style>
      /* Footer */
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
</head>
<body>
@extends('layouts.app')
<br><br><br><br>
<br>

<div style="display: flex; flex-direction: column;">
    <form action="{{ route('logout') }}" method="POST" class="form-inline" style="display: flex; align-items: left; justify-content: center; margin-left: 50%;">
        @csrf
        <input type="submit" class="btn btn-danger" value="Выход" style="background-color: orange; border: 1px solid orange;">
    </form>

    <div id="hawk_tuah" class="container" style="display: flex; flex-direction: row;">
        <div id="hawk" style="display: flex; flex-direction: column; position: relative; box-sizing: border-box;">
            <img src="{{ asset('images/hawk.png') }}" alt="Hawk">
            <br>
            <h2 style="display: flex; align-items: center; justify-content: center;">{{ Auth::user()->name }}</h2>
        </div>

        <div id="tuah" style="display: flex; flex-direction: column; position: relative; box-sizing: border-box; margin-left: 5%;">
            <h3>Ваши подписки:</h3>
       <br>

    <!-- Логика получения подписок -->
    <?php
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Auth;

    $userId = Auth::id(); // Получаем ID текущего пользователя
    $subscriptions = DB::table('bbs')->where('user_id', $userId)->get(); // Получаем подписки из таблицы bbs
    ?>

    <!-- Проверка наличия подписок -->
    @if($subscriptions->count() > 0)
        <div class="subscription-container">
            @foreach($subscriptions as $subscription)
                <div class="subscription-item">

                    <h2>{{ $subscription->title }}</h2>
                    <p>{{ $subscription->content }}</p>
                    <p><strong>Статус: {{ $subscription->status }}</strong></p>

                    <!-- Ссылка "Улучшить план" -->
                    @if($subscription->status == 'Активно' && $subscription->price != 12)
                        <a href="{{ route('upgrade-plan', ['id' => $subscription->id]) }}" style="color: rgb(253, 171, 17);">Улучшить план</a>
                    @endif

                     <!-- Ссылка "обновить план" -->
                     @if($subscription->status == 'Неактивно')
                        <a href="{{ route('reload-plan', ['id' => $subscription->id]) }}" style="color: rgb(253, 171, 17);">Обновить подписку</a>
                    @endif
                </div>
            @endforeach
        </div>
    @else
        <p>У вас пока нет подписок. <a href="{{ route('subscription') }}"  style="color: rgb(253, 171, 17);">Оформите подписку</a>.</p>
    @endif
</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="footer" style="display: flex; justify-content: flex-end;">
    <div class="social-links">
        <a href="#"><img src="{{ asset('images/ru.png') }}" alt="Rutube"></a>
        <a href="#"><img src="{{ asset('images/wk.png') }}" alt="WK"></a>
        <a href="#"><img src="{{ asset('images/kk.png') }}" alt="OK"></a>
        <div style="display: flex; flex-direction: column;">
            <a>адрес офиса:
                <a style="margin-left: 32%;">Москва,ул.Пушкина,д.Колотушкина45</a>
            </a>
        </div>
    </div>
    <p>© 2024 Duck Player, Все права защищены уточками.</p>
</footer>
</body>
</html>