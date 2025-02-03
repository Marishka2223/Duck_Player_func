<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    // Отображение страницы с выбором подписки
    public function index()
    {
        return view('subscription');
    }

    // Обработка выбора подписки
    public function store(Request $request)
    {
        // Валидация данных
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'price' => 'required|integer|in:3,6,12',
        ]);

        // Добавляем дополнительные данные
        $validatedData['status'] = 'Активно'; // Статус подписки
        $validatedData['user_id'] = Auth::id(); // ID текущего пользователя
        $validatedData['created_at'] = now(); // Текущее время
        $validatedData['updated_at'] = now(); // Текущее время

        // Создание записи в таблице bbs
        Bb::create($validatedData);

        // Редирект с сообщением об успехе
        return redirect()->route('checkpoint')->with('success', 'Подписка успешно оформлена!');
    }
}