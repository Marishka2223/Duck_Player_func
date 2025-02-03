<?php

use App\Http\Controllers\BbsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UpgradePlanController;
use App\Http\Controllers\ReloadController;


Route::get('/', [BbsController::class, 'index'])->name('index');




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/create', [HomeController::class, 'create'])->name('bb.create');
Route::get('/home/dow', [HomeController::class, 'dow'])->name('dow');
Route::get('/home/ab', [HomeController::class, 'ab'])->name('ab');
Route::get('/home/checkpoint', [HomeController::class, 'checkpoint'])->name('checkpoint');
Route::get('/home/acpo', [HomeController::class, 'acpo'])->name('acpo');
Route::get('/home/reload-plan', [HomeController::class, 'reload'])->name('reload-plan');
Route::get('/home/adminpanel', [HomeController::class, 'adminpanel'])->name('adminpanel');
Route::get('/home/user-edit', [HomeController::class, 'uz'])->name('user-edit');
Route::get('/home/subscription', [HomeController::class, 'subscription'])->name('subscription');
Route::get('/home/upgrade-plan', [HomeController::class, 'upgrade'])->name('upgrade-plan');


Route::post('/home', [HomeController::class, 'store'])->name('bb.store');
Route::get('/home/{bb}/edit', [HomeController::class, 'edit'])->name('bb.edit');
Route::get('/home/{bb}/update', [HomeController::class, 'update'])->name('bb.update');
Route::get('/home/{bb}/delete', [HomeController::class, 'delete'])->name('bb.delete');
Route::get('/home/{bb}', [HomeController::class, 'destroy'])->name('bb.destroy');

Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');

//ДЛЯ ПОДПИСКИ: отображение страницы с выбором подписок
Route::get('/subscription', [SubscriptionController::class, 'index'])->name('subscription.index');
//ДЛЯ ПОДПИСКИ: обработка выбора подписки
Route::post('/subscription', [SubscriptionController::class, 'store'])->name('subscription.store');


// Маршруты
Route::get('/upgrade', [UpgradePlanController::class, 'index'])->name('upgrade.index');
Route::post('/upgrade', [UpgradePlanController::class, 'update'])->name('upgrade.update');

// ДЛЯ ОБНОВЛЕНИЯ ПОДПИСКИ: отображение страницы с выбором подписки
Route::get('/upgrade', [ReloadController::class, 'index'])->name('upgrade.index');

// ДЛЯ ОБНОВЛЕНИЯ ПОДПИСКИ: обработка обновления подписки
Route::post('/upgrade', [ReloadController::class, 'update'])->name('upgrade.update');


/*
Route::get('/create-post', function () {
    if (!Auth::user()) {
        return redirect()->to('/login');
    }
});
*/