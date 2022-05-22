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
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(../{{ $complex->image1 }});    background-size: cover;
                                                                                                                                                               background-position: center;">
        <div class="gallery inviz">
            <a href="/{{ $complex->image1 }}" class="big" rel="rel1"><img src="/{{ $complex->image1 }}"
                    alt="Complex 1"></a>
        </div>
        <div class="slider-content slider-content--complex">
            <h1 class="slider-title slider-title--complex">
                {{ $complex->name }}
            </h1>
            <div class="slider-text slider-text--complex">{!! $complex->{'desc1_' . app()->getLocale()} !!}</div>
        </div>
    </section>



    <section class="about-1">
        <div class="max-wrap about-1-wrap">
            <div class="about-1-text">
                {!! $complex->{'desc2_' . app()->getLocale()} !!}
            </div>
            <div class="about-1-image gallery">

                <a href="/{{ $complex->image2 }}" class="big" rel="rel1"><img class="image-fit"
                        src="/{{ $complex->image2 }}" alt="Complex 2"></a>

            </div>
        </div>
    </section>

    <section class="about-2">
        <div class="about-2-bg"
            style="background-image: url(../{{ $complex->image3 }});
                                                                                                                                                               background-size: cover;
                                                                                                                                                               background-repeat: no-repeat;
                                                                                                                                                               background-position: center;">
        </div>
        <div class="gallery inviz">
            <a href="/{{ $complex->image3 }}" class="big" rel="rel1"><img src="/{{ $complex->image3 }}"
                    alt="Complex 1"></a>
        </div>
        <div class="about-2-wrap">
            {!! $complex->{'desc3_' . app()->getLocale()} !!}
        </div>
        <div class="services-triangles complex-triangles">
            <div class="complex-triangles-left"></div>
            <div class="complex-triangles-right"></div>
        </div>
    </section>


    <section class="about-3">
        <div class="max-wrap about-3-wrap">
            <div class="about-3-item--div gallery">

                <a class="ablock" href="/{{ $complex->image4 }}" class="big" rel="rel1"><img
                        class="about-3-item--img" src="/{{ $complex->image4 }}" alt=""></a>

            </div>
            <div class="about-3-item--text">
                {!! $complex->{'desc4_' . app()->getLocale()} !!}
            </div>
            <div class="about-3-item--div gallery">
                <a class="ablock" href="/{{ $complex->image5 }}" class="big" rel="rel1"><img
                        class="about-3-item--img" src="/{{ $complex->image5 }}" alt=""></a>
            </div>
        </div>
        <div class="services-triangles">
            <div class="services-triangles-left"></div>
            <div class="services-triangles-right"></div>
        </div>
    </section>

    <section class="about-4">
        <h2 class="section-4__title">
            {{ __('Инфраструктура') }}
        </h2>
        <div class="max-wrap">
            <div class="about-4-wrap">
                <div class="about-4-left gallery">
                    <a href="/{{ $complex->image6 }}" class="big" rel="rel1"><img class="about-4-left__img"
                            src="/{{ $complex->image6 }}" alt=""></a>
                </div>
                <div class="about-4-right">
                    <div class="gallery">
                        <a href="/{{ $complex->image7 }}" class="big" rel="rel1"><img
                                class="about-4-right__img" src="/{{ $complex->image7 }}" alt=""></a>
                    </div>
                    <div class="gallery">
                        <a href="/{{ $complex->image8 }}" class="big" rel="rel1"><img
                                class="about-4-right__img" src="/{{ $complex->image8 }}" alt=""></a>
                    </div>
                    <div class="gallery">
                        <a href="/{{ $complex->image9 }}" class="big" rel="rel1"><img
                                class="about-4-right__img" src="/{{ $complex->image9 }}" alt=""></a>
                    </div>
                    <div class="gallery">
                        <a href="/{{ $complex->image10 }}" class="big" rel="rel1"><img
                                class="about-4-right__img" src="/{{ $complex->image10 }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-5">
        <div class="gallery inviz">
            <a href="/{{ $complex->image11 }}" class="big" rel="rel1"><img src="/{{ $complex->image11 }}"
                    alt="Complex 1"></a>
        </div>
        <div class="about-5-bg"
            style="background-image: url(/{{ $complex->image11 }});
                                                                                                                                                               background-size: cover;
                                                                                                                                                               background-repeat: no-repeat;
                                                                                                                                                               background-position: center;">
        </div>
        <div class="about-5-wrap">
            <div class="about-5-item">
                <h4 class="about-5-item__title">{{ __('Расстояние до') }} </h4>
                <div class="about-5-item__text">{!! $complex->{'desc5_' . app()->getLocale()} !!}</div>
            </div>
            <div class="about-5-item">
                <h4 class="about-5-item__title">{{ __('Квартиры') }}</h4>
                <div class="about-5-item__text">{!! $complex->{'desc6_' . app()->getLocale()} !!}</div>
            </div>
        </div>
    </section>

    {!! $complex->map !!}
    <main id="flats" class="main smt">
        <div class="results">
            <div class="max-wrap">
                <div class="result-items">
                    @foreach ($flats as $flat)
                        <div class="result-item">
                            <a href="{{ route('flat.show', $flat->id) }}"><img class="result-img"
                                    src="/{{ $flat->image1 }}" alt="Result 1"></a>
                            <div class="result-item__title-wrap">
                                <h4 class="result-item__title">{{ $complex->name }}</h4>
                            </div>

                            <p class="result-item__price">{{ $flat->price_euro }} €</p>

                            <p class="result-item__desc">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                    </path>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                </svg>{{ $complex->{'area_' . app()->getLocale()} }}
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
                </div>
            </div>
        </div>
    </main>
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
    footer-waves-white
@endsection
