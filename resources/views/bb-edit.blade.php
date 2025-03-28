@extends('layouts.app')

@section('title', 'Правка объявления:: Мои объявления')
<br><br><br><br>

<form action="{{route('bb.update', ['bb'=>$bb->id])}}" method="GET">
        @method('PATCH')
    @csrf

    <div class="mb-3">
        <label for="txtTitle" class="form-label">Товар</label>
        <input name="title" id="txtTitle" class="form-control"  @error('title') is-invalid @enderror value="{{old('title', $bb->title)}}">
        @error('title')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
</div>

<div class="mb-3">
    <label for="txtContent" class="form-label">Описание</label>
    <textarea name="content" id="txtContent"  @error('content') is-invalid @enderror class="form-control" row="3">{{old('content', $bb->content)}}</textarea>
    @error('content')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>


<div class="mb-3">
        <label for="txtPrice" class="form-label">Срок</label>
        <input name="price" id="txtPrice" class="form-control"   @error('price') is-invalid @enderror value="{{$bb->price}}">
        @error('price')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
</div>

<div class="mb-3">
        <label for="txtStatus" class="form-label">Статус</label>
        <select name="status" id="txtStatus" class="form-control"   @error('status') is-invalid @enderror value="{{$bb->status}}">
        <option value="Активно">Активно</option>
        <option selected value="Неактивно">Неактивно</option>
        @error('status')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
        </select>
</div>

<input type="submit"  style="background-color: orange; border: 1px solid orange;" class="btn btn-primary" value="Сохранить">
</form>
