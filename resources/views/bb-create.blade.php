@extends('layouts.app')

@section('title', 'Добавление объявления:: Мои объявления')
<br><br><br><br>
<form action="{{route('bb.store')}}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="txtTitle" class="form-label">Подписка</label>
        <input name="title" id="txtTitle" class="form-control">
</div>

<div class="mb-3">
    <label for="txtContent" class="form-label">Описание подписки</label>
    <textarea name="content" id="txtContent" class="form-control" row="3"></textarea>
</div>

<div class="mb-3">
        <label for="txtPrice" class="form-label">срок</label>
        <input name="price" id="txtPrice" class="form-control">
</div>
<input type="submit" class="btn btn-primary" value="Добавить">
</form>

