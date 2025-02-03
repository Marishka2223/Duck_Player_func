

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duck Player | Скачать</title>
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
    <br><br>
    <section class="section3">
        <div style="display: flex; flex-direction: row; flex-wrap: wrap; gap: 16px;">
        <h1 style="font-size: 6vh;">Скачивание плеера <h1 style="font-size: 6vh; color: rgb(238, 136, 3);">« Duck Player »</h1</h1>
        </div>
        <br><br>
        <br><br>
        <h1 style="font-size: 4vh;">Версия для компьютеров</h1>
        <br><br>
        <div class="icons-row">
            <div class="icon-block">
                <img src="{{ asset('images/w1.png') }}">
                <div class="dol">
                <button>Windows<br><p style="font-size: 12px; color: white;" id="t1">Windows 10,11</p></button>
                </div>
            </div>
            <div class="icon-block">
                <img src="{{ asset('images/l1.png') }}">
                <div class="dol">
                <div id="linuxx" style="display: flex; flex-direction: row; gap: 20px;">
                <button>.deb<p style="font-size: 12px; color: white;">Debian,Ubuntu</p></button>
                <button>.rpm<p style="font-size: 12px; color: white;">Red Hat,Fedora,SUSE</p></button>
                </div>
                </div>
            </div>
          
            <div class="icon-block">
                <img src="{{ asset('images/ap1.png') }}">
                <div class="dol" id="t1">
                    <button>Mac<br><p style="font-size: 12px; color: white;">macOS 10.15+</p></button>
                    </div>
            </div>
        </div> 
        <br><br>
         <h1 style="font-size: 4vh;">Версия для телефонов и планшетов</h1>
         <br><br>
        <div class="icons-rob">
            <div class="icon-block">
                <img src="{{ asset('images/an1.png') }}">
                <div class="dol" id="bb">
                    <button>Android<br><p style="font-size: 12px; color: white;">Android 10+</p></button>
                    </div>
            </div>
            <div class="icon-block">
                <img src="{{ asset('images/ap2.png') }}">
                <div class="dol" id="bb">
                    <button>IOS<br><p style="font-size: 12px; color: white;">IOS 16,17,18</p></button>
                    </div>
            </div>
        </div>
        </div>
        <br><br>
        <br><br>
        <div class="icons-row2" style="display: flex; flex-direction: row; gap: 20px; justify-content: center; align-items: center;">
                <a href="#"><img src="{{ asset('images/d1.png') }}" alt="google"></a>
                <a href="#"><img src="{{ asset('images/d2.png') }}" alt="rustore"></a>
                <a href="#"><img src="{{ asset('images/d3.png') }}" alt="apple"></a>
            </div>
        </div> 
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

.section3 button {
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

#bb button{
    width: 150px;
    height: 50px;
}
#bb button{
    width: 150px;
    height: 50px;
}
.section3 button:hover {
    background: rgb(245, 188, 82);
}

#t1{
    width: 140px;
}
</style>