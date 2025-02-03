@extends('layouts.app')
@section('title', 'Мои объявления')
@section('content')
   <div style="display: flex; flex-direction: row; margin-left: 10px;">
    <p>Сейчас в сети: <p style="color: red; margin-left: 5px;"> {{Auth::user()->name}}<p></p>
</div>
<p class="text-end"><a href="{{route('bb.create')}}">Добавить объявление</a></p>
@if (count($bbs) > 0)

<table class="table table-stripped table-borderless">
      @foreach ($bbs as $bb)
   
    <br><br>
    <thead>
        <tr>
            <th>Товар</th>
            <th>Цена, руб</th>
            <th colspan="2">&nbsp;</th>
            @csrf
</tr>
</thead>
<tbody>
  
    <tr>
        <td><h3>{{$bb->title}}</h3></td>
        <td style="color: green">{{$bb->price}}</td>
        <td>
            <a href="{{ route('bb.edit', ['bb' => $bb->id]) }}">Изменить</a>
</td>

<td>
            <a href="{{ route('bb.delete', ['bb' => $bb->id]) }}">Удалить</a>
</td>
</tr>
@endforeach
</tbody>
</table>
@endif
@endsection('content')