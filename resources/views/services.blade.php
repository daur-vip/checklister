@extends('layouts.front')

@section('content')
    @php

    if (session()->get('locale') == null) {
        session()->put('locale', app()->getLocale());
    } else {
        App::setLocale(session()->get('locale'));
    }
    @endphp
    <section class="slider slider-services">

        <div class="slider-content slider-content--complex">
            <h1 class="slider-title-services">
                Онлайн-консультация и подбор недвижимости
            </h1>
            <div class="slider-text-services">
                {{ __('Основываясь на Ваших пожеланиях и нашем профессионализме, мы подберем для Вас лучшее предложение в соотношении цена/качество. Без КОМИССИЙ. БЕЗ ПЕРЕПЛАТ.') }}
            </div>
        </div>
    </section>



    <section class="about-1">
        <div class="max-wrap about-1-wrap">
            <div class="about-1-image gallery">

                <a href="/img/transfer5.jpg" class="big" rel="rel1"><img class="image-fit"
                        src="/img/transfer5.jpg" alt="Complex 2"></a>

            </div>

            <div class="gallery inviz">
                <a href="/img/transfer1.jpg" class="big" rel="rel1"><img src="/img/transfer1.jpg"
                        alt="Complex 1"></a>
            </div>
            <div class="gallery inviz">
                <a href="/img/transfer2.jpg" class="big" rel="rel1"><img src="/img/transfer2.jpg"
                        alt="Complex 1"></a>
            </div>
            <div class="gallery inviz">
                <a href="/img/transfer3.jpg" class="big" rel="rel1"><img src="/img/transfer3.jpg"
                        alt="Complex 1"></a>
            </div>
            <div class="gallery inviz">
                <a href="/img/transfer4.jpg" class="big" rel="rel1"><img src="/img/transfer4.jpg"
                        alt="Complex 1"></a>
            </div>


            <div class="about-1-text">
                <div class="slider-text-services">
                    <h1 class="slider-title-services">
                        Ознакомительный тур*
                    </h1>

                    <p>Рады предложить Вам бесплатный, тур для ознакомления с объектами недвижимости.</p><br>
                    Тур включает в себя:
                    <ol>
                        <li>Встречу в аэропорту, в сопровождении личного менеджера</li>
                        <li>Заселение в апартаментах Премиум класса.</li>
                        <li>Ознакомительный тур по городу.</li>
                        <li>Показ объектов недвижимости.</li>
                    </ol>
                    <span style="font-style: italic; font-size: 70%">* Мы не требуем компенсаций расходов за ознакомительный
                        тур.</span>
                </div>

            </div>

        </div>
    </section>

    <section class="about-2">
        <div class="about-2-bg"
            style="background-image: url(/img/law.jpg);
                                                                                                                                                                                                                                                                                                                                   background-size: cover;
                                                                                                                                                                                                                                                                                                                                   background-repeat: no-repeat;
                                                                                                                                                                                                                                                                                                                                   background-position: center;">
        </div>
        <div class="gallery inviz">
            <a href="/img/transfer1.jpg" class="big" rel="rel1"><img src="/img/transfer1.jpg"
                    alt="Complex 1"></a>
        </div>
        <div class="about-2-wrap">
            <h1 class="slider-title-services">Юридическое сопровождение.</h1>

            <div class="slider-text-services"> Наши юристы проконсультировать Вас по всем вопросам, сопроводят Вас на всех
                этапах сделки. Ответят на все Ваши
                вопросы.</div>

        </div>
        <div class="services-triangles complex-triangles">
            <div class="services-triangles-left"></div>
            <div class="services-triangles-right"></div>
        </div>
    </section>


    <section class="about-1">
        <div class="max-wrap about-1-wrap">
            <div class="about-1-text">
                <div class="slider-text-services">
                    <h1 class="slider-title-services">
                        Перевод денег
                    </h1>

                    <p>Платеж принимается в любой валюте, как на территории Турции, так и на территории СНГ.
                        Форма оплаты любая, в том числе криптоплатежи, с комиссией 0%
                    </p>

                </div>

            </div>
            <div class="about-1-image">

                <img class="image-fit" src="/img/transfer2.jpg" alt="Complex 2">

            </div>

        </div>
    </section>
@endsection

@section('scripts')
    <script src="/js/simple-lightbox.jquery.min.js"></script>
    <script>
        (function() {
            var $gallery = new SimpleLightbox('.gallery a', {});
        })();
    </script>
@endsection

@section('footer-style')
    footer-waves
@endsection
