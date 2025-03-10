<link rel="stylesheet" href="styles/styles.css">
<title>Duck Player | Вход</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Varela&family=Gothic+A1:wght@400;700&display=swap" rel="stylesheet">
    @extends('layouts.app')

@section('title','Вход')
<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомнить меня') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: rgb(245, 188, 82); border: 1px solid rgb(245, 188, 82);">
                                    {{ __('Войти') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link"  style="color: orange;" href="{{ route('password.request') }}">
                                        {{ __('Забыли пароль?') }}
                                    </a>
                                @endif
                                <a class="btn btn-link" style="color: orange;" href="{{ route('register') }}">
                                    {{__('Зарегистрироваться')}}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br>

<footer class="footer" style=" display: flex;
    justify-content: flex-end;">
        <div class="social-links">
            <a href="#"><img src="{{ asset('images/ru.png') }}" alt="Rutube"></a>
            <a href="#"><img src="{{ asset('images/wk.png') }}" alt="WK"></a>
            <a href="#"><img src="{{ asset('images/kk.png') }}" alt="OK"></a>
            <div style="display: flex; flex-direction: column;">
            <a>адрес офиса:
                <a style="margin-left: 32%;">Москва,ул.Пушкина,д.Колотушкина45</a></a>
               </div> 
        </div>
        <p>© 2024 Duck Player, Все права защищены уточками.</p>
    </footer>


    <style>
        body{
    overflow: hidden; /* Hide scrollbars */
}
        </style>
