@extends('layouts.front')

@section('content')
    @php
    $complex = App\Models\Complex::find(1);
    if (session()->get('locale') == null) {
        session()->put('locale', app()->getLocale());
    } else {
        App::setLocale(session()->get('locale'));
    }
    @endphp
    <section class="slider"
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(../img/mahmud.jpg) #141b2d;     background-size: contain 100%; background-repeat:no-repeat;
                                                                                                                                                                                                                                                                                                                   background-position: right top;">
        <div class="gallery inviz">
            <a href="/img/mahmud.jpg" class="big" rel="rel1"><img src="/img/mahmud.jpg" alt="Complex 1"></a>
        </div>
        <div class="slider-content slider-content--complex">
            <h1 class="slider-title slider-title--complex">
                ДОРОГИЕ ДРУЗЬЯ
            </h1>
            <div class="slider-text slider-text--complex">Рад Вас приветствовать из солнечной Аланьи. Уже
                более 6-ти лет наша компания занимается строительством и продажей недвижимости на территории Аланьи. Нашей
                основной задачей является профессиональная консультация и помощь при выборе и покупки недвижимости. </div>
            <div class="slider-text slider-text--author">Основатель компании, г-н Махмуд Шафие</div>

        </div>
    </section>



    <section class="about-1">
        <div class="max-wrap about-1-wrap">
            <div class="about-1-text">
                <ul>
                    <li>Мы даем гарантию лучшей цены.</li>
                    <li>Отсутствие любых сопутствующих надбавок и прочих скрытых расходов. </li>
                    <li>Мы не берем риэлтерскую комиссию. </li>
                    <li>Полностью сопровождаем клиента на всех этапах сделки</li>
                    <li>Помогаем с обустройством (с открытием бизнеса, оформлением всех документов и т.д.)</li>
                </ul>
            </div>
            <div class="about-1-image gallery">

                <a href="/img/slider2.jpg" class="big" rel="rel1"><img class="image-fit"
                        src="/img/slider2.jpg" alt="Complex 2"></a>

            </div>
        </div>
    </section>

    <section class="about-2">
        <div class="about-2-bg"
            style="background-image: url(../img/team1.jpg);
                                                                                                                                                                                                                                                                                                                   background-size: cover;
                                                                                                                                                                                                                                                                                                                   background-repeat: no-repeat;
                                                                                                                                                                                                                                                                                                                   background-position: center;">
        </div>
        {{-- <div class="gallery inviz">
            <a href="/img/team1.jpg" class="big" rel="rel1"><img src="/img/team1.jpg" alt="Complex 1"></a>
        </div> --}}
        <div class="about-2-wrap">
            <ul>
                Наша команда всегда готова ответить на Ваши вопросы. <p>Мы всегда на связи!</p>
            </ul>
        </div>
        <div class="services-triangles complex-triangles">
            <div class="complex-triangles-left-blue"></div>
            <div class="complex-triangles-right-blue"></div>
        </div>
    </section>

    <section class="about-4">
        <h2 class="section-4__title">
            {{ __('Наша команда') }}
        </h2>
        <div class="max-wrap">
            <div class="about-4-wrap">
                <div class="about-4-left gallery">
                    <a href="/img/team1.jpg" class="big" rel="rel1"><img class="about-4-left__img"
                            src="/img/team1.jpg" alt=""></a>
                </div>
                <div class="about-4-right">
                    <div class="gallery">
                        <a href="/img/team2.jpg" class="big" rel="rel1"><img class="about-4-right__img"
                                src="/img/team2.jpg" alt=""></a>
                    </div>
                    <div class="gallery">
                        <a href="/img/team3.jpg" class="big" rel="rel1"><img class="about-4-right__img"
                                src="/img/team3.jpg" alt=""></a>
                    </div>
                    <div class="gallery">
                        <a href="/img/team4.jpg" class="big" rel="rel1"><img class="about-4-right__img"
                                src="/img/team4.jpg" alt=""></a>
                    </div>
                    <div class="gallery">
                        <a href="/{{ $complex->image10 }}" class="big" rel="rel1"><img
                                class="about-4-right__img" src="/{{ $complex->image10 }}" alt=""></a>
                    </div>
                </div>
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
