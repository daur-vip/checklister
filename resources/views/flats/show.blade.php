@extends('layouts.front')

@section('content')
    @php

    if (session()->get('locale') == null) {
        session()->put('locale', app()->getLocale());
    } else {
        App::setLocale(session()->get('locale'));
    }
    @endphp
    <section class="slider"
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(../{{ $flat->image1 }});    background-size: cover;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           background-position: center;">
        @if ($flat->image6)
            <div class="gallery inviz">
                <a href="/{{ $flat->image6 }}" class="big" rel="rel1"><img src="/{{ $flat->image6 }}"
                        alt="flat 1"></a>
            </div>
        @endif

        @if ($flat->image7)
            <div class="gallery inviz">
                <a href="/{{ $flat->image7 }}" class="big" rel="rel1"><img src="/{{ $flat->image7 }}"
                        alt="flat 1"></a>
            </div>
        @endif

        @if ($flat->image8)
            <div class="gallery inviz">
                <a href="/{{ $flat->image8 }}" class="big" rel="rel1"><img src="/{{ $flat->image8 }}"
                        alt="flat 1"></a>
            </div>
        @endif
        @if ($flat->image9)
            <div class="gallery inviz">
                <a href="/{{ $flat->image9 }}" class="big" rel="rel1"><img src="/{{ $flat->image9 }}"
                        alt="flat 1"></a>
            </div>
        @endif
        @if ($flat->image10)
            <div class="gallery inviz">
                <a href="/{{ $flat->image10 }}" class="big" rel="rel1"><img src="/{{ $flat->image10 }}"
                        alt="Complex 1"></a>
            </div>
        @endif

        <div class="slider-content slider-content--complex">
            <h1 class="flat-title">
                {{ $flat->{'flat_' . app()->getLocale()} }}
            </h1>
            <div class="flat-under-title">
                @if ($flat->first)
                    {{ __('Первичное жилье') }}
                @else
                    {{ __('Вторичное жилье') }}
                @endif /
                @if ($flat->furnished)
                    {{ __('С мебелью') }}
                @else
                    {{ __('Без мебели') }}
                @endif
            </div>
            <div class="flat-price">{{ $flat->price_euro }} €</div>
            {{-- <div class="flat-price--mini">{{ $flat->price_dollar }} $ / {{ $flat->price_tenge }} ₸
            </div> --}}
            <div class="flat-param"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="100%" fill="currentColor"
                    class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                    </path>
                    <path fill-rule="evenodd"
                        d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                    </path>
                </svg> {{ $complex->name }}</div>
            <div class="flat-param"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="100%" fill="currentColor"
                    class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                    <path
                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                    </path>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                </svg> {{ $complex->{'area_' . app()->getLocale()} }}</div>
            <div class="flat-param"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="100%" fill="currentColor"
                    class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                    </path>
                </svg> {{ $flat->square }} {{ __('кв.м.') }}</div>


        </div>
    </section>


    <section class="about-4" style="padding-top: 65px">
        <h2 class="section-4__title">
            {{ __('Фотогалерея') }}
        </h2>
        <div class="max-wrap">
            <div class="about-4-wrap">
                <div class="about-4-left gallery">
                    <a href="/{{ $flat->image3 }}" class="big" rel="rel1"><img class="about-4-left__img"
                            src="/{{ $flat->image3 }}" alt=""></a>
                </div>
                <div class="about-4-right">
                    <div class="gallery">
                        <a href="/{{ $flat->image4 }}" class="big" rel="rel1"><img class="about-4-right__img"
                                src="/{{ $flat->image4 }}" alt=""></a>
                    </div>
                    <div class="gallery">
                        <a href="/{{ $flat->image5 }}" class="big" rel="rel1"><img class="about-4-right__img"
                                src="/{{ $flat->image5 }}" alt=""></a>
                    </div>
                    <div class="gallery">
                        <a href="/{{ $flat->image1 }}" class="big" rel="rel1"><img class="about-4-right__img"
                                src="/{{ $flat->image1 }}" alt=""></a>
                    </div>
                    <div class="gallery">
                        <a href="/{{ $flat->image2 }}" class="big" rel="rel1"><img class="about-4-right__img"
                                src="/{{ $flat->image2 }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="about-2">
        <div class="flat-2-bg"
            style="background-image: url(../{{ $flat->image3 }});
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           background-size: cover;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           background-repeat: no-repeat;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           background-position: center;">
        </div>
        <div class="gallery inviz">
            <a href="/{{ $complex->image3 }}" class="big" rel="rel1"><img src="/{{ $complex->image3 }}"
                    alt="Complex 1"></a>
        </div>
        <div class="flat-2-wrap">

            <div class="flat-pros">
                <h2 style="margin-bottom: 35px; font-size: 30px">{{ __('Инфраструктура') }}</h2>

                <ul class="flat-pros-ul">
                    @php
                        
                        $pros_en = [
                            'volleyball' => 'Volleyball',
                            'wifi' => 'Wi-Fi',
                            'billiards' => 'Billiards',
                            'cafe' => 'Cafe',
                            'generator' => 'Generator',
                            'shuttle' => 'Shuttle to the beach',
                            'garden' => 'Garden',
                            'finnish_sauna' => 'Finnish sauna',
                            'jacuzzi' => 'Jacuzzi',
                            'playground' => 'Playground',
                            'own_beach' => 'Own beach',
                            'bar_pool' => 'Pool bar',
                            'mini_club' => 'Mini club',
                            'video_observation' => 'Video observation 24/7',
                            'aquapark' => 'Aquapark',
                            'table_tennis' => 'Table tennis',
                            'security' => 'Security',
                            'indoor_pool' => 'Indoor pool',
                            'roman_sauna' => 'Roman sauna',
                            'tennis_court' => 'Tennis court',
                            'satellite' => 'Satellite TV',
                            'fitness' => 'Fitness',
                            'conference' => 'Conference hall',
                            'walking_paths' => 'Walking paths',
                            'market' => 'Market',
                            // 'hairdresser' => 'Парикмахерская',
                            'outdoor_parking' => 'Outdoor parking',
                            'hamam' => 'Hamam',
                            'game_room' => 'Game room',
                            'pavilions' => 'Pavillions',
                            'child_pool' => 'Child pool',
                            'covered_parking' => 'Covered parking',
                            'indoor_parking' => 'Indoor parking',
                            'bbq_area' => 'BBQ area',
                            'basketball' => 'Basketball',
                            'amphitheater' => 'Amphitheater',
                            'bowling' => 'Bowling',
                            'concierge' => 'Concierge',
                            // 'ice_rink' => 'Ледяной каток',
                            'massage_room' => 'Massage rooms',
                            'outdoor_pool' => 'Outdoor pool',
                        ];
                        
                        $pros_ru = [
                            'volleyball' => 'Волейбольная площадка',
                            'wifi' => 'Беспроводной интернет',
                            'billiards' => 'Бильярд',
                            'cafe' => 'Кафе/Ресторан',
                            'generator' => 'Электрогенератор',
                            'shuttle' => 'Шатл до пляжа',
                            'garden' => 'Зеленый сад',
                            'finnish_sauna' => 'Финская сауна',
                            'jacuzzi' => 'Джакузи',
                            'playground' => 'Детская площадка',
                            'own_beach' => 'Собственный пляж',
                            'bar_pool' => 'Бар у бассейна',
                            'mini_club' => 'Мини-клуб',
                            'video_observation' => 'Видеонаблюдение',
                            'aquapark' => 'Аквапарк',
                            'table_tennis' => 'Настольный теннис',
                            'security' => 'Охрана 24/7',
                            'indoor_pool' => 'Закрытый бассейн',
                            'roman_sauna' => 'Римская парная',
                            'tennis_court' => 'Теннисный корт',
                            'satellite' => 'Спутниковое ТВ',
                            'fitness' => 'Фитнес-центр',
                            'conference' => 'Конференц-зал',
                            'walking_paths' => 'Прогулочные дорожки',
                            'market' => 'Продуктовый магазин',
                            // 'hairdresser' => 'Парикмахерская',
                            'outdoor_parking' => 'Открытая парковка',
                            'hamam' => 'Турецкий хамам',
                            'game_room' => 'Игровая комната',
                            'pavilions' => 'Беседки для отдыха',
                            'child_pool' => 'Детский бассейн',
                            'covered_parking' => 'Крытая парковка',
                            'indoor_parking' => 'Закрытая парковка',
                            'bbq_area' => 'Зоны отдыха и барбекю',
                            'basketball' => 'Баскетбольная площадка',
                            'amphitheater' => 'Амфитеатр',
                            'bowling' => 'Боулинг',
                            'concierge' => 'Консьерж',
                            // 'ice_rink' => 'Ледяной каток',
                            'massage_room' => 'Массажные кабинеты',
                            'outdoor_pool' => 'Открытый бассейн',
                        ];
                    @endphp
                    @foreach (${'pros_' . app()->getLocale()} as $pro => $proshka)
                        @if ($complex->{$pro} == 1)
                            <li>
                                {{ $proshka }}
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>

        </div>
    </section>

    {!! $complex->map !!}
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
