

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duck Player | О компании</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Varela&family=Gothic+A1:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
</head>
<body>
    @csrf
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
    <br><br>
    <section class="section3">
        <div style="display: flex; flex-direction: row; flex-wrap: wrap; gap: 16px;">
        <h1 style="font-size: 6vh;">О нашем проекте <h1 style="font-size: 6vh; color: rgb(238, 136, 3);">« Duck Player »</h1</h1>
        </div>
        <br><br>
        <br><br>
        <div id="dugz" style="display: flex; flex-direction: row; margin-left: 2%;">
            <img src="{{ asset('images/dug.png') }}">
            <div id="about" style="color: #969696; display: flex ; flex-direction: column; column-gap: 5px; word-wrap: break-word; overflow-wrap: break-word">
        <h3 style="color: #969696; ">Duck Player - Проект, основанный в 2023 году. В связи с малым количеством аналогов директор проекта, Блеблин Антон Васильевич, принялся сделать удобный и стильный современный музыкальный плеер. Разработка велась квалифицированными сотрудниками и целым штабом Фрилансеров. Были выбраны новейшие фреймворки, актуальные средства защиты и языки программирования. Сервис проходил больше 1000 проверок бета-тестеровщиков, а с дизайном помогали передовые дизайнеры РФ.<br><br><br></h3>
        </div>
        </div>

        <br><br>
        <br><br>
        <br><br>
        <div class="columns">
            <div class="column">
                <div id="thir" style="display: flex; justify-content: space-between; margin-left: 50%;" >
                <div class="text">
                    <div class="title">Наши пользователи - наше лицо</div>
                    <h2 style="color:  rgb(238, 136, 3) ;">Обширное коммьюнити</h2>
                    <p>Для нас очень важна связь между нами и пользователями.</p>
                </div>
                <img style="order: 3; margin-left: 7%;" src="{{ asset('images/сс.png') }}">
            </div>
            </div>
           
            <div class="column">
                <div id="sec" style="display: flex; justify-content: space-between; margin-left: -80%;">
                    <img id="thir" style="display: flex; justify-content: space-between; margin-left: 50%;" src="{{ asset('images/feed.png') }}" >
                <div class="text" style="margin-left: 7%;">
                    <div class="title">Поддержка взаимоотношений</div>
                    <h2 style="color:  rgb(238, 136, 3) ;">Постоянный фидбек</h2>
                    <p>Между пользователями и разработчиками Duck Player должна быть постоянная связь для большей эффективности.</p>
                </div>
                </div>
            </div>
            <div class="column">
                <div id="thir" style="display: flex; justify-content: space-between; margin-left: 50%;" >
                <div class="text">
                    <div class="title">Больше доступности - больше пользователей</div>
                    <h2 style="color:  rgb(238, 136, 3) ;">Кросс-<br>платформенность</h2>
                    <p>Мы стараемся адаптировать наш продукт на многие устройства<br>для многих пользователей.</p>
                </div>
                <img style="order: 3; margin-left: 1%;" src="{{ asset('images/cros.png') }}">
            </div>
            </div>
            </div>
        </div>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <div style="display: flex; flex-direction: row; flex-wrap: wrap; gap: 16px;">
        <h1 style="font-size: 4vh;">Ведущие сотрудники <h1 style="font-size: 4vh; color: rgb(238, 136, 3);">« Duck Player »</h1</h1>
        </div>
        <br><br>
        <br><br>
        <div class="icons-row">
            <div class="icon-block">
                <img src="{{ asset('images/a1.png') }}">
                <h4>Блеблин Антон Васильевич</h4>
                <p>Генеральный директор проекта</p>
            </div>
            <div class="icon-block">
                <img src="{{ asset('images/a2.png') }}">
                <h4>Зарянкова Алина Николаевна</h4>
                <p>Главный дизайнер</p>
            </div>
            <div class="icon-block">
                <img src="{{ asset('images/a3.png') }}">
                <h4>Вязов Константин Владимирович</h4>
                <p>Ведущий программист</p>
            </div>
        </div>
        <div class="icons-row">
            <div class="icon-block">
                <img src="{{ asset('images/a4.png') }}">
                <h4>Сольвёва Елена Антоновна</h4>
                <p>Коммьюнити мендежер</p>
            </div>
            <div class="icon-block">
                <img src="{{ asset('images/a5.png') }}">
                <h4>Дружкова Мария Эдуардовна</h4>
                <p>Главная по маркетингу</p>
            </div>
            <div class="icon-block">
                <img src="{{ asset('images/a6.png') }}">
                <h4>Пензов Владимир Николаевич</h4>
                <p>Коммьюнити менджер 2</p>
            </div>
        </div>
        </div>
        <br><br>
        <br><br>
    </section>
         <img src="{{ asset('images/am.png') }}">

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

    <script src="script.js"></script>
</body>
</html>

<style>
    /* General Styles */
body {
    margin: 0;
    font-family: 'Gothic A1', sans-serif;
    overflow-x: hidden;
}

/* Navbar */
/* Navbar */
.navbar {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        position: fixed;
        width: 100%;
        top: 0;
        transition: background 0.3s;
        background-color: #e78b2e;
    }

    .navbar .logo {
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    .navbar .nav-links {
        display: flex;
        gap: 50px;
        margin-left: 30%;
    }

    .navbar .nav-links a {
        color: white;
        text-decoration: none;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        position: relative;
    }

    .navbar .nav-links a::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 100%;
        height: 2px;
        background: rgb(179, 81, 1);
        transform: scaleX(0);
        transform-origin: right;
        transition: transform 0.3s;
    }

    .navbar .nav-links a:hover::after {
        transform: scaleX(1);
        transform-origin: left;
    }

    .navbar .menu-icon {
        display: none;
        color: white;
        font-size: 24px;
        cursor: pointer;
    }

    /* Section 1 */
    .section1 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100vh;
        width: 100%;
        background: linear-gradient(to bottom, #d23111, #581716);
        color: white;
        padding: 0 50px;
        box-sizing: border-box;
    }

    .section1 .text-content {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .section1 h2 {
        font-size: 38px;
        line-height: 48px;
        font-family: 'Varela', sans-serif;
        margin: 0;
    }

    .section1 h1 {
        font-size: 10vh;
        line-height: 10vh;
        margin: 0;
    }

    .section1 h3 {
        font-size: 30px;
        line-height: 44px;
        font-family: 'Montserrat', sans-serif;
        margin: 0;
    }

    .section1 button {
        background: orange;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        font-family: 'Montserrat', sans-serif;
        cursor: pointer;
        transition: background 0.3s;
    }

    .section1 button:hover {
        background: rgb(245, 188, 82);
    }

    .section1 .placeholder-image {
        width: 693px;
        height: 772px;
        animation: slideUp 1s ease-in-out;
    }

    @keyframes slideUp {
        from {
            transform: translateY(100%);
        }
        to {
            transform: translateY(0);
        }
    }

    /* Section 2 */
    .section2 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: #333;
        padding: 50px 0;
        color: white;
        text-align: center;
        width: 100%;
    }

    .section2 .title {
        font-size: 12px;
        line-height: 20px;
        color: #a8a8a8;
        margin-bottom: 20px;
    }

    .section2 h2 {
        font-size: 38px;
        line-height: 48px;
        font-family: 'Montserrat', sans-serif;
        margin-bottom: 20px;
    }

    .section2 .placeholder-image {
        width: 100%;
        height: auto;
        max-height: 50vh;
        background: rgba(255, 255, 255, 0.2);
    }

    /* Section 3 */
    .section3 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: white;
        padding: 50px 0;
        width: 100%;
    }

    .section3 .columns {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-bottom: 50px;
        width: 100%;
    }

    .section3 .column {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 100%;
    }

    .section3 .column .text {
        order: 1;
    }

    .section3 .column:nth-child(2) .text {
        order: 2;
    }

    .section3 .column .title {
        font-size: 12px;
        line-height: 20px;
        color: #a8a8a8;
        margin-bottom: 10px;
    }

    .section3 .column h2 {
        font-size: 38px;
        line-height: 48px;
        color: black;
        margin-bottom: 20px;
    }

    .section3 .column p {
        font-size: 16px;
        line-height: 48px;
        color: #6b6b6b;
    }

    .section3 .column .placeholder-image {
        width: 100%;
        height: auto;
        max-height: 50vh;
        background: rgba(0, 0, 0, 0.1);
    }

    .section3 .icons-row {
        display: flex;
        gap: 20px;
        margin-bottom: 50px;
        width: 100%;
    }

    .section3 .icons-rob {
        display: flex;
        margin-bottom: 50px;
        width: 100%;
    }

    .section3 .icon-block {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 100%;
    }

    .section3 .icon-block .placeholder-icon {
        width: 50px;
        height: 50px;
        background: rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
    }

    .section3 .icon-block h4 {
        font-size: 18px;
        line-height: 24px;
        font-weight: 700;
        color: black;
        margin-bottom: 10px;
    }

    .section3 .icon-block p {
        font-size: 16px;
        line-height: 30px;
        color: #6b6b6b;
    }

    .section3 .slide {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 100%;
    }

    .section3 .slide .slides {
        display: flex;
        gap: 20px;
        margin-top: -7%;
    }

    .section3 .slide h3 {
        font-size: 24px;
        line-height: 40px;
        color: #6b6b6b;
    }

    .section3 .slide .arrows {
        display: flex;
        gap: 70px;
        margin-top: 20px;
    }

    .section3 .slide .arrow {
        font-size: 14px;
        line-height: 20px;
        color: #d6d6d6;
        cursor: pointer;
    }

    .section3 .slide .placeholder-image {
        width: 100%;
        height: auto;
        max-height: 50vh;
        background: rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }

    /* Section 4 */
    .section4 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: #1b1b1b;
        padding: 50px 0;
        color: white;
        text-align: center;
        width: 100%;
    }

    .section4 h2 {
        font-size: 38px;
        line-height: 48px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .section4 p {
        font-size: 16px;
        line-height: 30px;
        color: #6b6b6b;
        margin-bottom: 20px;
    }

    .section4 .input-group {
        display: flex;
        gap: 10px;
    }

    .section4 input {
        width: 300px;
        height: 70px;
        padding: 10px;
        font-size: 14px;
        line-height: 20px;
        background: white;
        color: gray;
        border: none;
    }

    .section4 button {
        background: orange;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        line-height: 26px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s;
    }

    .section4 button:hover {
        background: rgb(245, 188, 82);
    }

    /* Section 5 */
    .section5 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: #ffffff;
        padding: 50px 0;
        color: rgb(32, 32, 32);
        text-align: center;
        width: 100%;
    }

    .section5 h2 {
        font-size: 38px;
        line-height: 48px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .section5 p {
        font-size: 16px;
        line-height: 30px;
        color: #6b6b6b;
        margin-bottom: 20px;
    }

    .section5 .input-group {
        display: flex;
        gap: 10px;
        flex-direction: column;
    }

    .section5 input {
        width: 300px;
        height: 30px;
        padding: 10px;
        font-size: 14px;
        line-height: 20px;
        background: white;
        color: gray;
        border: none;
    }

    .section5 button {
        background: orange;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        line-height: 26px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s;
    }

    .section4 button:hover {
        background: rgb(245, 188, 82);
    }

    /* Footer */
    .footer {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: #1b1b1b;
        padding: 20px 0;
        color: #6b6b6b;
        text-align: center;
        width: 100%;
        margin-top: -10px;
    }

    .footer .social-links {
        display: flex;
        gap: 20px;
        margin-bottom: 10px;
    }

    .footer .social-links a {
        color: #6b6b6b;
        text-decoration: none;
    }

    .footer p {
        font-size: 12px;
        line-height: 20px;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        .navbar .nav-links {
            display: none;
            flex-direction: column;
            position: absolute;
            top: 60px;
            left: 0;
            width: 100%;
            background: black;
            padding: 20px;
            gap: 10px;
        }

        .navbar .nav-links.active {
            display: flex;
        }

        .navbar .menu-icon {
            display: block;
        }

        .section1 .placeholder-image {
            width: 100%;
            height: auto;
            max-height: 50vh;
        }

        .section2 .placeholder-image {
            width: 100%;
            height: auto;
            max-height: 50vh;
        }

        .section3 .columns {
            flex-direction: column;
        }

        .section3 .column .placeholder-image {
            width: 100%;
            height: auto;
            max-height: 50vh;
        }

        .section3 .icons-row {
            flex-direction: column;
        }

        .section3 .slide .placeholder-image {
            width: 100%;
            height: auto;
            max-height: 50vh;
        }

        .section4 .input-group {
            flex-direction: column;
        }

        .section4 input {
            width: 100%;
        }
    }

    .slide-item {
        display: none;
        opacity: 0;
        transition: opacity 2.5s ease-in-out;
    }

    .slide-item.active {
        display: block;
        opacity: 1;
    }*/
.section4 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: #1b1b1b;
    padding: 50px 0;
    color: white;
    text-align: center;
    width: 100%;
}

.section4 h2 {
    font-size: 38px;
    line-height: 48px;
    font-weight: 700;
    margin-bottom: 20px;
}

.section4 p {
    font-size: 16px;
    line-height: 30px;
    color: #6b6b6b;
    margin-bottom: 20px;
}

.section4 .input-group {
    display: flex;
    gap: 10px;
}

.section4 input {
    width: 300px;
    height: 70px;
    padding: 10px;
    font-size: 14px;
    line-height: 20px;
    background: white;
    color: gray;
    border: none;
}

.section4 button {
    background: orange;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    line-height: 26px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s;
}

.section4 button:hover {
    background: rgb(245, 188, 82);
}


/* Section 5 */
.section5 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: #ffffff;
    padding: 50px 0;
    color: rgb(32, 32, 32);
    text-align: center;
    width: 100%;
}

.section5 h2 {
    font-size: 38px;
    line-height: 48px;
    font-weight: 700;
    margin-bottom: 20px;
}

.section5 p {
    font-size: 16px;
    line-height: 30px;
    color: #6b6b6b;
    margin-bottom: 20px;
}

.section5 .input-group {
    display: flex;
    gap: 10px;
    flex-direction: column;
}

.section5 input {
    width: 300px;
    height: 30px;
    padding: 10px;
    font-size: 14px;
    line-height: 20px;
    background: white;
    color: gray;
    border: none;
}

.section5 button {
    background: orange;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    line-height: 26px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s;
}

.section4 button:hover {
    background: rgb(245, 188, 82);
}

/* Footer */
.footer {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: #1b1b1b;
    padding: 20px 0;
    color: #6b6b6b;
    text-align: center;
    width: 100%;
}

.footer .social-links {
    display: flex;
    gap: 20px;
    margin-bottom: 10px;
}

.footer .social-links a {
    color: #6b6b6b;
    text-decoration: none;
}

.footer p {
    font-size: 12px;
    line-height: 20px;
}

/* Media Queries */
@media (max-width: 768px) {
    .navbar .nav-links {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 60px;
        left: 0;
        width: 100%;
        background: black;
        padding: 20px;
        gap: 10px;
    }

    .navbar .nav-links.active {
        display: flex;
    }

    .navbar .menu-icon {
        display: block;
    }

    .section1 .placeholder-image {
        width: 100%;
        height: auto;
        max-height: 50vh;
    }

    .section2 .placeholder-image {
        width: 100%;
        height: auto;
        max-height: 50vh;
    }

    .section3 .columns {
        flex-direction: column;
    }

    .section3 .column .placeholder-image {
        width: 100%;
        height: auto;
        max-height: 50vh;
    }

    .section3 .icons-row {
        flex-direction: column;
    }

    .section3 .slide .placeholder-image {
        width: 100%;
        height: auto;
        max-height: 50vh;
    }

    .section4 .input-group {
        flex-direction: column;
    }

    .section4 input {
        width: 100%;
    }
}


.slide-item {
    display: none;
    opacity: 0;
    transition: opacity 2.5s ease-in-out;
}

.slide-item.active {
    display: block;
    opacity: 1;
}


.dol button {
    background: orange;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    line-height: 26px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s;

}
</style>
