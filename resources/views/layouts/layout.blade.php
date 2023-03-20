<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAMANGANLIKLAR 24</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>

    <div class="menu-mask"></div>
    <main>
        <header class="main-header">
            <div class="container">
                <div class="basic-flex header__top">
                    <a href="/" class="logo">
                        <img src="/img/logo.png" alt="NAMANGANLIKLAR24">
                    </a>
                    <div class="currencies basic-flex">
                        <div class="currency"><span>$</span><span>10137.2 </span></div>
                        <div class="currency"><span>P</span><span>138.26</span></div>
                        <div class="currency"><span>E</span><span>10988.72</span></div>
                    </div>
                    <div class="header__actions basic-flex">
                        <form method="GET" class="search-form basic-flex">
                            <input type="search" class="search-input">
                            <button type="submit" class="btn search-btn"></button>
                        </form>
                        <div class="languages">
                            <a class="btn language__option language__option--active" href="/lang/ru">RU</a>
                            <div class="languages__list">
                                <a class="btn language__option language__option--uz"
                                    data-status="disabled" href="/lang/uz">UZ</a>
                            </div>
                        </div>

                        <div class="telegram-join basic-flex">
                            <a href="#"><img src="/img/tg.png" alt="Telegram">@lang('navbar.subscribe')</a>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-menu"><span class="hamburger"></span></button>
                <nav class="navbar">
                    <div class="currencies-responsive basic-flex">
                        <div class="currency"><span>$</span><span>10137.2 </span></div>
                        <div class="currency"><span>P</span><span>138.26</span></div>
                        <div class="currency"><span>E</span><span>10988.72</span></div>
                    </div>
                    @include('layouts.navbar')
                </nav>
                <div class="advertisement-box">
                    <h4>@lang('navbar.advertisement')</h1>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="covid-block basic-flex ">
                <div class="covid-block__title basic-flex">
                    <div class="covid-title__img"></div>
                    <a href="#" class="covid-title__text">@lang('words.coronavirus')</a>
                </div>
                <div class="covid-block__stats basic-flex">
                    <div class="stats__item basic-flex">
                        <div class="stats__img"></div>
                        <div class="stats-text-box">
                            <h4>@lang('words.infection')</h4>
                            <p>3000</p>
                        </div>
                    </div>
                    <div class="stats__item basic-flex">
                        <div class="stats__img"></div>
                        <div class="stats-text-box">
                            <h4>@lang('words.vizdov')</h4>
                            <p>2438</p>
                        </div>
                    </div>
                    <div class="stats__item basic-flex">
                        <div class="stats__img"></div>
                        <div class="stats-text-box">
                            <h4>@lang('words.death')</h4>
                            <p>12</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
        <footer class="footer">
            <div class="container">
                <div class="footer__top basic-flex">
                    <a href="#" class="footer_logo"><img src="/img/logo-blue.png" alt="NAMANGANLIKLAR24"></a>
                    <div class="join-telegram-wrapper basic-flex">
                        <p>@lang('navbar.content')</p>
                        <a href="#" class="join-telegram">@lang('navbar.subscribe')</a>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="about-site">
                        <h4>@lang('navbar.web_site')</h4>
                        <p>@lang('navbar.content_2')</p>
                    </div>
                    <ul class="footer-menu">
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">@lang('navbar.data')</a>
                        </li>
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">@lang('navbar.napish')</a>
                        </li>
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">@lang('navbar.advertise')</a>
                        </li>
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">@lang('navbar.last_news')</a>
                        </li>
                    </ul>
                    <ul class="footer-menu">
                        <li class="footer-menu__item"><a href="#"
                                class="footer-menu__link">@lang('navbar.material')</a></li>
                        <li class="footer-menu__item"><a href="#"
                                class="footer-menu__link">@lang('navbar.topic_day')</a></li>
                        <li class="footer-menu__item"><a href="#"
                                class="footer-menu__link">@lang('navbar.our_collective')</a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <script src="/js/main.js"></script>

</body>

</html>
