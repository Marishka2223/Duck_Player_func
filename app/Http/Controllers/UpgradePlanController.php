<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;
use Illuminate\Support\Facades\Auth;

class UpgradePlanController extends Controller
{
    // Отображение страницы с выбором обновления подписки
    public function index()
    {
        // Получаем текущую подписку пользователя
        $currentSubscription = Bb::where('user_id', Auth::id())->first();

        // Если подписка отсутствует, перенаправляем на страницу выбора подписки
        if (!$currentSubscription) {
            return redirect()->route('subscription.index')->with('error', 'У вас нет активной подписки для обновления.');
        }

        return view('upgrade', compact('currentSubscription'));
    }

    // Обработка обновления подписки
    public function update(Request $request)
    {
        // Валидация данных
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'price' => 'required|integer|in:6,12',
        ]);

        // Получаем текущую подписку пользователя
        $currentSubscription = Bb::where('user_id', Auth::id())->first();

        // Проверяем, можно ли обновить подписку
        if ($currentSubscription->price == 3 && in_array($validatedData['price'], [6, 12])) {
            // Обновляем подписку
            $currentSubscription->update($validatedData);

            // Редирект с сообщением об успехе
            return redirect()->route('checkpoint')->with('success', 'Подписка успешно обновлена!');
        } elseif ($currentSubscription->price == 6 && $validatedData['price'] == 12) {
            // Обновляем подписку
            $currentSubscription->update($validatedData);

            // Редирект с сообщением об успехе
            return redirect()->route('checkpoint')->with('success', 'Подписка успешно обновлена!');
        } else {
            // Редирект с сообщением об ошибке
            return redirect()->route('upgrade.index')->with('error', 'Невозможно обновить подписку');
        }
    }
}