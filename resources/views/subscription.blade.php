<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор подписки</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .subscription-container {
            display: flex;
            gap: 20px;
        }
        .subscription-column {
            border: 2px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            flex: 1;
        }
        .subscription-column h2 {
            margin-top: 0;
        }
        .subscription-column button {
            background-color: #ffa500;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .subscription-column button:hover {
            background-color: rgb(245, 188, 82);
        }
        .success {
            color: green;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
@extends('layouts.app')
<br><br><br><br>
<br><br><br><br>
    <h1 style=" display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center; font-size: 3em;">Выберите подписку</h1>
    <br><br><br>

    <!-- Сообщение об успешном оформлении -->
    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Контейнер с тремя столбцами -->
    <div class="subscription-container">
        <!-- Подписка на 3 месяца -->
        <div class="subscription-column">
            <h2>Duck Standart</h2>
            <p></p>
            <p>Премиум для аккаунта на 3 месяца</p>

            <form action="{{ route('subscription.store') }}" method="POST">
                @csrf
                <input type="hidden" name="title" value="Duck Standart">
                <input type="hidden" name="content" value="Премиум для аккаунта на 3 месяца">
                <input type="hidden" name="price" value="3">
                <button type="submit">Оформить</button>
            </form>
        </div>

        <!-- Подписка на 6 месяцев -->
        <div class="subscription-column">
            <h2>Duck+</h2>
            <p></p>
            <p>Премиум для аккаунта на 6 месяцев</p>
            <form action="{{ route('subscription.store') }}" method="POST">
                @csrf
                <input type="hidden" name="title" value="Duck+">
                <input type="hidden" name="content" value="Премиум для аккаунта на 6 месяцев">
                <input type="hidden" name="price" value="6">
                <button type="submit">Оформить</button>
            </form>
        </div>

        <!-- Подписка на 12 месяцев -->
        <div class="subscription-column">
            <h2>Duck PREMIUM</h2>
            <p></p>
            <p>Премиум для аккаунта на 12 месяцев</p>
            <form action="{{ route('subscription.store') }}" method="POST">
                @csrf
                <input type="hidden" name="title" value="Duck PREMIUM">
                <input type="hidden" name="content" value="Премиум для аккаунта на 12 месяцев">
                <input type="hidden" name="price" value="12">
                <button type="submit">Оформить</button>
            </form>
        </div>
    </div>
</body>
</html>