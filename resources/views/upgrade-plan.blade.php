<?php

use Illuminate\Http\Request;
use App\Models\Bb;
use Illuminate\Support\Facades\Auth;
$currentSubscription = Bb::where('user_id', Auth::id())->first();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обновление подписки</title>
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
        .error {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
@extends('layouts.app')
<br><br><br><br>
<br><br><br><br>
    <h1 style="text-align: center; font-size: 3em;">Обновление подписки</h1>
    <br><br><br>

    <!-- Сообщение об успешном обновлении -->
    @if(session('success'))
        <div class="success" style="text-align: center;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Сообщение об ошибке -->
    @if(session('error'))
        <div class="error" style="text-align: center;">
            {{ session('error') }}
        </div>
    @endif

    <!-- Контейнер с выбором обновления -->
    <div class="subscription-container">
        @if($currentSubscription->price == 3)
            <!-- Обновление на 6 месяцев -->
            <div class="subscription-column">
                <h2>Обновить до Duck+</h2>
                <p></p>
                <p>Премиум для аккаунта на 6 месяцев</p>
                <form action="{{ route('upgrade.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="title" value="Duck+">
                    <input type="hidden" name="content" value="Премиум для аккаунта на 6 месяцев">
                    <input type="hidden" name="price" value="6">
                    <button type="submit">Обновить</button>
                </form>
            </div>

            <!-- Обновление на 12 месяцев -->
            <div class="subscription-column">
                <h2>Обновить до Duck PREMIUM</h2>
                <p></p>
                <p>Премиум для аккаунта на 12 месяцев</p>
                <form action="{{ route('upgrade.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="title" value="Duck PREMIUM">
                    <input type="hidden" name="content" value="Премиум для аккаунта на 12 месяцев">
                    <input type="hidden" name="price" value="12">
                    <button type="submit">Обновить</button>
                </form>
            </div>
        @elseif($currentSubscription->price == 6)
            <!-- Обновление на 12 месяцев -->
            <div class="subscription-column">
                <h2>Обновить до Duck PREMIUM</h2>
                <p></p>
                <p>Премиум для аккаунта на 12 месяцев</p>
                <form action="{{ route('upgrade.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="title" value="Duck PREMIUM">
                    <input type="hidden" name="content" value="Премиум для аккаунта на 12 месяцев">
                    <input type="hidden" name="price" value="12">
                    <button type="submit">Обновить</button>
                </form>
            </div>
        @endif
    </div>
</body>
</html>