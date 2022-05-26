@extends('layouts.front')

@section('content')
    @php
    if (session()->get('locale') == null) {
        session()->put('locale', app()->getLocale());
    } else {
        App::setLocale(session()->get('locale'));
    }
    @endphp
    <section class="slider3">
        <div class="slider1"></div>
        <div class="slider-content">
            <h1 class="slider-title">
                {{ __('MY FLAT') }} -<br />
                {{ __('недвижимость в Турции') }}
            </h1>

            <p class="slider-text">{{ __('Официальный представитель турецкого застройщика на территории СНГ') }}!</p>
            <hr class="slider-hr">
            <p class="slider-text">{{ __('Без комиссий! Без переплат!') }}</p>
            <button id="myBtn2" class="nav-contact-us">{{ __('Связаться с нами') }}</button>
        </div>
    </section>


    <section id="services" class="services smt">
        <div class="services-header">
            <h2 class="services-header-text">
                {{ __('Наши услуги') }}
            </h2>
        </div>
        <div class="services-content">
            <div class="max-wrap services-wrap">
                <div class="services-item-wrap">
                    <h3 class="services-item-title">
                        {{ __('Онлайн консультация и подбор недвижимости') }}
                    </h3>
                    <div class="services-item services-item--1">
                    </div>
                </div>
                <div class="services-item-wrap">
                    <h3 class="services-item-title">
                        {{ __('Ознакомительный тур') }}
                    </h3>
                    <div class="services-item services-item--4">
                    </div>
                </div>
                <div class="services-item-wrap">
                    <h3 class="services-item-title">
                        {{ __('Полное юридическое сопровождение') }}
                    </h3>
                    <div class="services-item services-item--2">
                    </div>
                </div>
                <div class="services-item-wrap">
                    <h3 class="services-item-title">
                        {{ __('Безопасный перевод денежных средств') }}
                    </h3>
                    <div class="services-item services-item--3">
                    </div>
                </div>

            </div>
        </div>
        <div class="services-triangles">
            <div class="services-triangles-left"></div>
            <div class="services-triangles-right"></div>
        </div>
    </section>
    @php
    $currency = null;
    $currencyAd = 'euro';
    $currency = @$_GET['currency'];
    if ($currency == 'Euro' || $currency == 'Евро') {
        $currencyAd = 'euro';
    } elseif ($currency == 'Доллар' || $currency == 'USD') {
        $currencyAd = 'dollar';
    } elseif ($currency == 'Тенге' || $currency == 'KZT') {
        $currencyAd = 'tenge';
    }

    $order = 'Sorting';
    $orderBy = 'id';
    $orderDir = 'DESC';
    $order = @$_GET['order'];
    if ($order == 'Цена ↑' || $order == 'Price ↑') {
        $orderBy = 'price_euro';
        $orderDir = 'ASC';
    } elseif ($order == 'Цена ↓' || $order == 'Price ↓') {
        $orderBy = 'price_euro';
        $orderDir = 'DESC';
    } elseif ($order == 'Площадь ↑' || $order == 'Area ↑') {
        $orderBy = 'square';
        $orderDir = 'ASC';
    } elseif ($order == 'Площадь ↓' || $order == 'Area ↓') {
        $orderBy = 'square';
        $orderDir = 'DESC';
    } else {
        $orderBy = 'no';
    }

    @endphp

    <main id="flats" class="main smt">
        <form action="/#flats" method="GET">
            <div class="search">
                <div class="search-params">
                    <select name="area" class="search-param">
                        <option>{{ __('Выберите район') }}
                        </option>
                        <option>{{ __('Каргыджак') }}</option>
                        <option>{{ __('Махмутлар') }}</option>
                        <option>{{ __('Авсаллар') }}</option>
                    </select>
                    <select name="rooms" class="search-param">
                        <option>{{ __('Количество спален') }}</option>
                        <option>1+1</option>
                        <option>2+1</option>
                        <option>3+1</option>
                        <option>4+1</option>
                    </select>
                    <select name="currency" class="search-param">
                        <option>{{ __('Отображаемая валюта') }}</option>
                        <option @if ($currencyAd == 'euro' && isset($_GET['currency'])) selected @endif>{{ __('Евро') }}</option>
                        <option @if ($currencyAd == 'dollar') selected @endif>{{ __('Доллар') }}</option>
                        <option @if ($currencyAd == 'tenge') selected @endif>{{ __('Тенге') }}</option>
                    </select>
                    <select name="order" class="search-param">
                        <option>{{ __('Сортировать по') }}</option>
                        <option @if ($order == 'Цена ↑' || $order == 'Price ↑') selected @endif>{{ __('Цена ↑') }}</option>
                        <option @if ($order == 'Цена ↓' || $order == 'Price ↓') selected @endif>{{ __('Цена ↓') }}</option>
                        <option @if ($order == 'Площадь ↑' || $order == 'Area ↑') selected @endif>{{ __('Площадь ↑') }}</option>
                        <option @if ($order == 'Площадь ↓' || $order == 'Area ↓') selected @endif>{{ __('Площадь ↓') }}</option>
                    </select>
                </div>
                <div class="search-button-div">
                    <button type="submit" id="myBtn2" class="nav-contact-us search-button">{{ __('Найти') }}

                    </button>
                </div>
            </div>
        </form>

        @php
            $area = null;
            $bedrooms = null;
            $area_complexes = [];
            $s_area_complexes = null;
            
            $complexes = App\Models\Complex::all()->keyBy('id');
            
            $area = @$_GET['area'];
            $bedrooms = @$_GET['rooms'];
            
            if ($area != 'Выберите район' && $area != 'District' && $area != null) {
                foreach ($complexes as $complex) {
                    if ($complex['area_ru'] == $area || $complex['area_en'] == $area) {
                        $area_complexes[] = $complex['id'];
                        $s_area_complexes = implode(', ', $area_complexes);
                    }
                }
            }
            
            if (!$area_complexes) {
                $flats = App\Models\Flat::select('*');
            } else {
                $flats = App\Models\Flat::where('complex_id', $area_complexes);
            }
            if ($bedrooms != 'Количество спален' && $bedrooms != 'Bedrooms quantity') {
                $flats = $flats->where('flat_ru', 'LIKE', '%' . $bedrooms);
            }
            if ($orderBy != 'no') {
                $flats = $flats->orderBy($orderBy, $orderDir);
            }
            $flats = $flats->take(6);
            $flats = $flats->get();
            
        @endphp

        <div class="results">
            <div class="max-wrap">
                <div class="result-items">
                    @if ($flats->first())
                        @foreach ($flats as $flat)
                            <div class="result-item">
                                <a href="{{ route('flat.show', $flat->id) }}"><img class="result-img"
                                        src="/{{ $flat->image1 }}" alt="Result 1"></a>
                                <div class="result-item__title-wrap">
                                    <h4 class="result-item__title">{{ $complexes[$flat->complex_id]->name }}</h4>
                                </div>

                                <p class="result-item__price">{{ $flat->{'price_' . $currencyAd} }}
                                    @if ($currencyAd == 'dollar')
                                        $
                                    @elseif ($currencyAd == 'tenge')
                                        ₸
                                    @else
                                        €
                                    @endif
                                </p>

                                <p class="result-item__desc">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                        <path
                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                        </path>
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                    </svg>{{ $complexes[$flat->complex_id]->{'area_' . app()->getLocale()} }}
                                </p>
                                <p class="result-item__desc">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                        </path>
                                        <path fill-rule="evenodd"
                                            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                        </path>
                                    </svg>{!! $flat->{'flat_' . app()->getLocale()} !!}
                                </p>
                                <p class="result-item__desc">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                        class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                                        </path>
                                    </svg>{{ __('Площадь') }}: {{ $flat->square }} {{ __('кв.м.') }}
                                </p>
                            </div>
                        @endforeach
                    @else
                        <div></div>
                        <div>
                            <h3 style="text-align: center; padding-bottom: 40px">{{ __('Ничего не нашлось') }}</h3>
                        </div>
                    @endif

                </div>
                {{-- <a class="results-more" href="#">Показать еще...</a> --}}
            </div>
        </div>

    </main>


    <section class="post-services">
        <div class="max-wrap">
            <h2 class="post-services-title">
                {{ __('Постпродажный сервис') }}
            </h2>
            <div class="post-services-wrap">
                <div class="post-services-item">
                    <fieldset class="post-services-item__fieldset">
                        <legend class="post-services-item__legend"><img src="/img/postservices-1.svg" alt=""></legend>
                        <h4 class="post-services-item__title">
                            {{ __('Услуги юриста') }}
                        </h4>
                        <p class="post-services-item__text">
                            {{ __('Наши юристы полностью сопровождают Вас на всех этапах сделки. Помогают со сбором и оформлением необходимых документов. С нами процедура оформления будет полностью прозрачной и не потребует много времени.') }}
                        </p>
                    </fieldset>
                </div>
                <div class="post-services-item">
                    <fieldset class="post-services-item__fieldset">
                        <legend class="post-services-item__legend"><img src="/img/postservices-2.svg" alt=""></legend>
                        <h4 class="post-services-item__title">
                            {{ __('Услуги дизайнера') }}
                        </h4>
                        <p class="post-services-item__text">
                            {{ __('Наши дизайнеры готовы создать для Вас квартиру мечты. Креативные идеи с тонким ощущением вкуса и цвета, а также возможность создавать новое и не бояться экспериментировать. Поможем сделать ваш интерьер лучше.') }}
                        </p>
                    </fieldset>
                </div>
                <div class="post-services-item">
                    <fieldset class="post-services-item__fieldset">
                        <legend class="post-services-item__legend"><img src="/img/postservices-3.svg" alt=""></legend>
                        <h4 class="post-services-item__title">
                            {{ __('Клининг') }}
                        </h4>
                        <p class="post-services-item__text">
                            {{ __('Когда Ваша квартира вот вот будет готова, сразу закрадываются мысли о генеральной уборке. Наши специалисты готовы сделать это за Вас. Профессиональный клининг с использованием современного оборудования для Вашего комфорта и экономии времени.') }}
                        </p>
                    </fieldset>
                </div>
                <div class="post-services-item">
                    <fieldset class="post-services-item__fieldset">
                        <legend class="post-services-item__legend"><img src="/img/postservices-4.svg" alt=""></legend>
                        <h4 class="post-services-item__title">
                            {{ __('Оборудование бытовой техникой, закуп мебели и текстиля') }}
                        </h4>
                        <p class="post-services-item__text">
                            {{ __('После покупки недвижимости, встаёт закономерный вопрос о покупке мебели и бытовой техники. И здесь мы готовы Вам помочь. Мы сотрудничаем с лучшими производителями мебели и бытовой техники, которую Вы сможете приобрести по очень выгодным ценам.') }}
                        </p>
                    </fieldset>
                </div>
            </div>
        </div>
    </section>

    <section class="media">
        <div class="max-wrap">
            <div class="media-wrap">
                <h2 class="media-title">
                    СМИ о нас
                </h2>
                <div class="media-items">
                    @php
                        $manyNews = App\Models\Media::orderBy('id', 'DESC')
                            ->take(2)
                            ->get();
                    @endphp
                    @foreach ($manyNews as $news)
                        <div class="media-item-container">
                            <div class="media-item">
                                <img src="/img/media-quote.png" alt="quote" class="media-quote">
                                <div class="media-content">
                                    <div class="media-image-mini"><a href="{{ route('media.show', $news->id) }}">
                                            <img class="media-image-mini" src="{{ $news->image2 }}" alt="Media 1"></a>
                                    </div>
                                    <p class="media-text">
                                        {{ $news->{'title_' . app()->getLocale()} }}</p>
                                    <p class="media-unit">
                                        {{ __('Источник') }}: {{ $news->{'smi_' . app()->getLocale()} }}
                                    </p>
                                    <a href="{{ route('media.show', $news->id) }}"
                                        class="media-link">{{ __('Перейти') }}</a>
                                </div>

                                <div class="media-image"><a href="{{ route('media.show', $news->id) }}">
                                        <img class="media-image" src=" {{ $news->image2 }}" alt="Media 1"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
