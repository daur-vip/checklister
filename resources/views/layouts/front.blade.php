<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFlat - {{ __('недвижимость в Турции') }}</title>
    <link href="/css/simple-lightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

</head>

@php
if (session()->get('locale') == null) {
    session()->put('locale', app()->getLocale());
} else {
    App::setLocale(session()->get('locale'));
}
@endphp


<body>

    <!-- The Modal -->
    <div id="myModal" class="my-modal">

        <!-- Modal content -->
        <div class="my-modal-content">
            <div class="my-modal-header">
                <h2></h2>
                <span class="my-close">&times;</span>
            </div>
            <div class="my-modal-body">
                <p class="my-modal-title">{{ __('Оставить заявку') }}</p>
                <form class="my-modal-form" id="my-modal-form" action="{{ route('sendemail') }}" method="POST">
                    @csrf
                    <input class="my-modal-input" type="text" name="name" id="name" placeholder="{{ __('Имя') }}">
                    <input class="my-modal-input" type="text" name="phone" id="phone"
                        placeholder="{{ __('Номер телефона') }}">
                    <textarea name="message" id="message" cols="30" rows="4" class="my-modal-textarea" placeholder="Сообщение"></textarea>
                    <div class="my-modal-submit">
                        <a class="nav-contact-us" href="{{ route('index') }}" onclick="event.preventDefault();
              document.getElementById('my-modal-form').submit();">
                            {{ __('Отправить') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="mobile-menu">
        <div class="container">
            <div class="header__body">
                <a href="/" class="header__logo"><img src="/img/logo.svg" alt="Logo"></a>
                <div class="dropdown-telegram mobile-socials"><img class="dropbtn-telegram mobile-socials-mini"
                        src="/img/socials-whatsapp-grey.svg" alt="Telegram">
                    <div class="dropdown-content-telegram">
                        <a target="_blank"
                            href="https://wa.me/77777071234?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C+%D1%85%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8+%D0%B2+%D0%A2%D1%83%D1%80%D1%86%D0%B8%D0%B8."><img
                                src="/img/flag-kz.svg" alt="">
                            <p>+7 777 707 1234</p>
                        </a>
                        <a target="_blank"
                            href="https://wa.me/905348268407?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C+%D1%85%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8+%D0%B2+%D0%A2%D1%83%D1%80%D1%86%D0%B8%D0%B8."><img
                                src="/img/flag-turkey.svg" alt="">
                            <p>+90 534 826 8407</p>
                        </a>

                    </div>
                </div>
                <div class="dropdown-telegram mobile-socials"><img class="dropbtn-telegram mobile-socials-mini"
                        src="/img/socials-telegram-grey.svg" alt="Telegram">
                    <div class="dropdown-content-telegram">
                        <a target="_blank" href="https://t.me/myflatkz"><img src="/img/flag-kz.svg" alt="">
                            <p>+7 777 707 1234</p>
                        </a>
                        <a target="_blank" href="https://t.me/myflatTR"><img src="/img/flag-turkey.svg" alt="">
                            <p>+90 534 826 8407</p>
                        </a>

                    </div>
                </div>
                <div class="dropdown-telegram mobile-socials"><img class="dropbtn-telegram mobile-socials-mini"
                        src="/img/socials-viber-grey.svg" alt="Telegram">
                    <div class="dropdown-content-telegram">
                        <a target="_blank" href="viber://add?number=77777071234"><img src="/img/flag-kz.svg" alt="">
                            <p>+7 777 707 1234</p>
                        </a>
                        <a target="_blank" href="viber://add?number=905348268407"><img src="/img/flag-turkey.svg"
                                alt="">
                            <p>+90 534 826 8407</p>
                        </a>

                    </div>
                </div>

                <div class="mobile-socials">
                    <a target="_blank" href="https://instagram.com/myflat.kz"><img class="mobile-socials-mini"
                            src="/img/footer-socials-3.svg" alt="Instagram"></a>
                </div>
                <div class="header__burger">
                    <span></span>
                </div>

                <nav class="header__menu">
                    <div class="header-languages-mobile">
                        <a class="header-language" href="{{ route('changeLang') . '?lang=ru' }}">
                            <img class="header-flag-mobile header-flag--ru" src="/img/flag-ru.svg" alt="RU">
                        </a>
                        <a class="header-language" href="{{ route('changeLang') . '?lang=en' }}">
                            <img class="header-flag-mobile" src="/img/flag-uk.svg" alt="ENG">
                        </a>
                    </div>
                    <ul class="header__list">
                        <li><a href="/about" class="header__link">{{ __('О нас') }}</a></li>
                        <li><a href="/complex" class="header__link">{{ __('Комплексы') }}</a></li>
                        <li><a href="#flats" class="header__link">{{ __('Новости') }}</a></li>
                        <li><a href="/services" class="header__link">{{ __('Услуги') }}</a></li>
                        <li><a href="#" class="header__link">{{ __('СМИ о нас') }}</a></li>
                        <li><a href="/contact" class="header__link">{{ __('Контакты') }}</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="wrap header-wrap">
            <div class="header-left">
                <div class="header-contact">
                    <img class="header-flag" src="/img/flag-turkey.svg" alt="Turkey phone">
                    <span class="header-coutry">{{ __('Турция') }}</span><br>
                    <a class="header-phone" href="tel:+905348268407">+905348268407</a>
                </div>
                <div class="header-contact">
                    <img class="header-flag" src="/img/flag-kz.svg" alt="KZ phone">
                    <span class="header-coutry">{{ __('Казахстан') }}</span><br>
                    <a class="header-phone" href="tel:+77777071234">+77777071234</a>
                </div>
            </div>
            <div class="header-right">
                <div class="header-languages">
                    <a class="header-language" href="{{ route('changeLang') . '?lang=ru' }}">
                        <img class="header-flag header-flag--ru" src="/img/flag-ru.svg" alt="RU"> рус
                    </a>
                    <a class="header-language" href="{{ route('changeLang') . '?lang=en' }}">
                        <img class="header-flag" src="/img/flag-uk.svg" alt="ENG"> en
                    </a>
                </div>
                <div class="header-socials">
                    <div class="dropdown-whatsapp">
                        <img class="header-flag dropbtn-whatsapp" src="/img/socials-whatsapp.svg" alt="Whatsapp">
                        <div class="dropdown-content-whatsapp">
                            <a target="_blank"
                                href="https://wa.me/77777071234?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C+%D1%85%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8+%D0%B2+%D0%A2%D1%83%D1%80%D1%86%D0%B8%D0%B8."><img
                                    src="/img/flag-kz.svg" alt="">
                                <p>+7 777 707 1234</p>
                            </a>
                            <a target="_blank"
                                href="https://wa.me/905348268407?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C+%D1%85%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8+%D0%B2+%D0%A2%D1%83%D1%80%D1%86%D0%B8%D0%B8."><img
                                    src="/img/flag-turkey.svg" alt="">
                                <p>+90 534 826 8407</p>
                            </a>

                        </div>
                    </div>
                    <div class="dropdown-telegram">
                        <img class="header-flag dropbtn-telegram" src="/img/socials-telegram.svg" alt="Telegram">
                        <div class="dropdown-content-telegram">
                            <a target="_blank" href="https://t.me/myflatkz"><img src="/img/flag-kz.svg" alt="">
                                <p>+7 777 707 1234</p>
                            </a>
                            <a target="_blank" href="https://t.me/myflatTR"><img src="/img/flag-turkey.svg" alt="">
                                <p>+90 534 826 8407</p>
                            </a>

                        </div>
                    </div>
                    <div class="dropdown-telegram">
                        <img class="header-flag dropbtn-telegram" src="/img/socials-viber.svg" alt="Telegram">
                        <div class="dropdown-content-telegram">
                            <a target="_blank" href="viber://add?number=77777071234"><img src="/img/flag-kz.svg" alt="">
                                <p>+7 777 707 1234</p>
                            </a>
                            <a target="_blank" href="viber://add?number=905348268407"><img src="/img/flag-turkey.svg"
                                    alt="">
                                <p>+90 534 826 8407</p>
                            </a>

                        </div>
                    </div>
                    <a target="_blank" class="header-language" href="https://instagram.com/myflat.kz">
                        <img class="header-flag" src="/img/socials-instagram.svg" alt="Instagram"></a>
                </div>
            </div>
        </div>
    </header>
    <nav class="nav">
        <div class="wrap nav-wrap">
            <div class="nav-center">
                <ul class="nav-list">
                    <li>
                        <a class="nav-item" href="/about">{{ __('О нас') }}</a>
                    </li>
                    <li>
                        <a class="nav-item" href="/complex">{{ __('Комплексы') }}</a>
                    </li>
                    <li>
                        <a class="nav-item" href="/services">{{ __('Услуги') }}</a>
                    </li>
                    <li>
                        <a class="nav-item" href="/"><img src="/img/logo.svg" alt="Logo"></a>
                    </li>
                    <li>
                        <a class="nav-item" href="#">{{ __('Новости') }}</a>
                    </li>
                    <li>
                        <a class="nav-item" href="#">{{ __('СМИ о нас') }}</a>
                    </li>
                    <li>
                        <a class="nav-item" href="/contact">{{ __('Контакты') }}</a>
                    </li>

                </ul>
            </div>
            <div class="nav-right">
                <!-- Trigger/Open The Modal -->
                <button id="myBtn" class="nav-contact-us">{{ __('Оставить заявку') }}</button>


            </div>

        </div>
    </nav>



    @yield('content')



    <footer id="footer" class="footer smt">
        <div class="@yield('footer-style')">
        </div>
        <div class="max-wrap">
            <div class="footer-content">
                <div class="footer-contact">
                    <h3 class="footer-title">{{ __('Связаться с нами') }}</h3>
                    <div class="footer-contact-items">
                        <div class="footer-contact-item">
                            <img class="footer-contact-item__image" src="/img/flag-kz.svg"
                                alt="KZ">{{ __('Казахстан') }}
                        </div>
                        <div class="footer-contact-item"><img class="footer-contact-item__image"
                                src="/img/flag-turkey.svg" alt="Turkey">{{ __('Турция') }}
                        </div>
                        <div class="footer-contact-item"><img class="footer-contact-item__image"
                                src="/img/contacts-house.svg" alt="KZ">г. Алматы, пр. Достык 101</div>
                        <div class="footer-contact-item"><img class="footer-contact-item__image"
                                src="/img/contacts-house.svg" alt="KZ">Borgo Penelope 1 Appartamento 84</div>
                        <a class="slider-link-contact" href="tel:+77777071234">
                            <div class="footer-contact-item"><img class="footer-contact-item__image"
                                    src="/img/contacts-phone.svg" alt="KZ">+7 777 707 1234</div>
                        </a>
                        <a class="slider-link-contact" href="tel:+905348268407">
                            <div class="footer-contact-item"><img class="footer-contact-item__image"
                                    src="/img/contacts-phone.svg" alt="KZ">+90 534 826 8407</div>
                        </a>
                        <div class="footer-contact-item"><img class="footer-contact-item__image"
                                src="/img/contacts-mail.svg" alt="KZ">inbox@gmail.com</div>
                        <div class="footer-contact-item"><img class="footer-contact-item__image"
                                src="/img/contacts-mail.svg" alt="KZ">inbox@gmail.com</div>
                    </div>

                </div>
                <div class="footer-nav">
                    <h3 class="footer-title">{{ __('Навигация') }}</h3>
                    <div class="footer-nav-items">
                        <a class="slider-link-contact" href="/about">
                            <div class="footer-nav-item">
                                {{ __('О нас') }}
                            </div>
                        </a>
                        <a class="slider-link-contact" href="/complex">
                            <div class="footer-nav-item">
                                {{ __('Комплексы') }}
                            </div>
                        </a>
                        <a class="slider-link-contact" href="/services">
                            <div class="footer-nav-item">
                                {{ __('Услуги') }}
                            </div>
                        </a>
                        <a class="slider-link-contact" href="#">
                            <div class="footer-nav-item">
                                {{ __('СМИ о нас') }}
                            </div>
                        </a>

                    </div>
                </div>
                <div class="footer-socials">
                    <h3 class="footer-title">{{ __('Мы в соц. сетях') }}</h3>
                    <div class="footer-socials-icons">
                        <div class="footer-socials-icon">
                            <a target="_blank"
                                href="https://wa.me/77777071234?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C+%D1%85%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8+%D0%B2+%D0%A2%D1%83%D1%80%D1%86%D0%B8%D0%B8.">
                                <img src="/img/footer-socials-1.svg" alt="Whatsapp">
                            </a>
                        </div>

                        <div class="footer-socials-icon">
                            <a target="_blank" href="https://t.me/myflatkz"><img style="height: 32px"
                                    src="/img/socials-telegram-grey.svg" alt="Telegram">

                            </a>
                        </div>

                        <div class="footer-socials-icon">
                            <a target="_blank" href="viber://add?number=77777071234"><img style="height: 32px"
                                    src="/img/socials-viber-grey.svg" alt="Viber">

                            </a>
                        </div>
                        <div class="footer-socials-icon">
                            <a target="_blank" href="https://instagram.com/myflat.kz"><img style="height: 32px"
                                    src="/img/footer-socials-3.svg" alt="Viber">

                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

    <script src="/js/script.js"></script>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("my-close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "flex";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn2");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("my-close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "flex";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


    @yield('scripts')

</html>
