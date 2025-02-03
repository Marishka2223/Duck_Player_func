<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duck Player | Главная</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Varela&family=Gothic+A1:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
</head>
<body>
    <nav class="navbar">
        <div class="logo"><img src="{{ asset('images/logo.png') }}"></div>
        <div class="nav-links">
            <a href="{{route('index')}}">Главная</a>
            <a href="{{route('ab')}}">О проекте</a>
            <a href="{{route('dow')}}">Скачать</a>
            <a href="{{route('checkpoint')}}">Ваш аккаунт</a>
        </div>
        <div class="menu-icon">&#9776;</div>
    </nav>

    <section class="section1">
        <div class="text-content">
            <h2>Встречайте...</h2>
            <h1>Duck Player</h1>
            <h3>Прорыв среди музыкальных плееров</h3>
            <button onclick="window.location.href={{url('dow')}}">Скачать</button>
        </div>
        <div class="placeholder-image"><img src="{{ asset('images/duk3.png') }}"></div>
    </section>

    <section class="section2">
        <div class="title">Совершенно новые</div>
        <h2>Приключения начинаются здесь.</h2>
       <img src="{{ asset('images/eyyy.png') }}">
    </section>
    <br><br>
    <section class="section3">
        <div style="display: flex; flex-direction: row; flex-wrap: wrap; gap: 16px">
        <h1 style="font-size: 6vh;">Кратко про<h1 style="font-size: 6vh; color: rgb(238, 136, 3);"> Duck Player</h1</h1>
        </div>
        <br><br>
        <br><br>
        <div class="columns">
            <div class="column">
                <div id="thir" style="display: flex; justify-content: space-between; margin-left: 50%;" >
                <div class="text">
                    <div class="title">Новейший аналог</div>
                    <h2>Российская разработка</h2>
                    <p>Duck Player - новый российский сервис,<br>где люди легко могут найти музыку любимых исполнителей.</p>
                </div>
                <img style="order: 3; margin-left: 7%;" src="{{ asset('images/1.png') }}">
            </div>
            </div>
           
            <div class="column">
                <div id="sec" style="display: flex; justify-content: space-between; margin-left: -70%;">
                    <img id="thir" style="display: flex; justify-content: space-between; margin-left: 50%;" src="{{ asset('images/2.png') }}" >
                <div class="text" style="margin-left: 7%;">
                    <div class="title">Стиль</div>
                    <h2>Современный интуитивный дизайн</h2>
                    <p>Duck Player сочетает в себе простоту и стиль. Они разработаны мастерами своего дела и будут понятны любому пользователю.</p>
                </div>
                </div>
            </div>
            <div class="column">
                <div id="thir" style="display: flex; justify-content: space-between; margin-left: 52%;" >
                <div class="text">
                    <div class="title">Адаптивность</div>
                    <h2>Доступен для многих<br>систем</h2>
                    <p>Duck Player поддерживает такие системы, как:<br> Windows, MacOS, дистрибутивы Linux, Android, IOS.</p>
                </div>
                <img style="order: 3; margin-left: 1%;" src="{{ asset('images/3.png') }}">
            </div>
            <div class="column">
                <div id="sec" style="display: flex; justify-content: space-between; margin-left: -70%;">
                    <img id="thir" style="display: flex; justify-content: space-between; margin-left: 50%;" src="{{ asset('images/4.png') }}" >
                <div class="text" style="margin-left: 7%;">
                    <div class="title">Современность</div>
                    <h2>Наш плеер направлен на современных людей</h2>
                    <p>Плеер сочетает в себе много современных дизайн-решений и использует самые новейшие методы разработки.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <div class="icons-row">
            <div class="icon-block">
                <img src="{{ asset('images/bum.png') }}">
                <h4>Огромная библиотека</h4>
                <p>Вся музыка по вашему вкусу находится здесь</p>
            </div>
            <div class="icon-block">
                <img src="{{ asset('images/ad.png') }}">
                <h4>Постоянная поддержка</h4>
                <p>Мы всегда на связи с нашим коммьюнити</p>
            </div>
            <div class="icon-block">
                <img src="{{ asset('images/pr.png') }}">
                <h4>Надёжная защита данных аккаунта</h4>
                <p>Данные Вашего аккаунта Duck Player находятся в надёжный руках</p>
            </div>
        </div>
        <br><br>
        <br><br>
        <div class="slide">
            <h1 style="font-size: 5vh;">Отзывы пользователей</h1>
            <br>    
            <br><br>
            <div class="arrows">
                <div class="arrow prev" style="font-size: 4vh;">&#10094;</div>
                <div class="slides">
                <h3 class="slide-item"  style="font-size: 3vh; ">Хороший мобильный и качественный плеер. <br>Надёжная замена аналогов и ничего лишнего.<br><br>(Савельев М.В, газета Новости Санкт-Петербурга)</h3>
                <h3 class="slide-item" style="font-size: 3vh;">Дизайн плеера сразу привлёк меня!<br>Дала на пользование бабуле, и она освоилась почти сразу!<br>Спасибо большое Вам<br><br>(Романова А.К)</h3>
                <h3 class="slide-item"  style="font-size: 3vh;">Сразу влюбилась в это приложение.<br>Никакого лохотрона, качество музыки отличное<br><br>(Миринова Л.Н)</h3>
            </div>
                <div class="arrow next" style="font-size: 4vh;">&#10095;</div>
            </div>
            <div class="placeholder-image"></div>
        </div>
    </section>
         <img src=".{{ asset('images/am.png') }}">
    <section class="section4">
        <h2>Подписка на рассылку по почте</h2>
        <p>Ниже представлена форма, при заполнении которой вы можете подписаться на наши скидки и рассылки.</p>
        <div class="input-group">
            <input type="text" placeholder="Введите Ваш email">
            <button style="margin-left: -10px;">Подписаться</button>
        </div>
    </section>

    <footer class="footer">
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

    <script>
document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.querySelector('.menu-icon');
    const navLinks = document.querySelector('.nav-links');

    menuIcon.addEventListener('click', function() {
        navLinks.classList.toggle('active');
    });

    const slides = document.querySelectorAll('.slide .slide-item');
    const prevArrow = document.querySelector('.slide .prev');
    const nextArrow = document.querySelector('.slide .next');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });
    }

    prevArrow.addEventListener('click', function() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    });

    nextArrow.addEventListener('click', function() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    });

    showSlide(currentSlide);
});
    </script>
</body>
</html>