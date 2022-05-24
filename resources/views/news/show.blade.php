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
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(../{{ $news->image1 }});    background-size: cover;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           background-position: center;">
        @if ($news->image3)
            <div class="gallery inviz">
                <a href="/{{ $news->image3 }}" class="big" rel="rel1"><img src="/{{ $news->image3 }}"
                        alt="flat 1"></a>
            </div>
        @endif

        @if ($news->image4)
            <div class="gallery inviz">
                <a href="/{{ $news->image4 }}" class="big" rel="rel1"><img src="/{{ $news->image4 }}"
                        alt="flat 1"></a>
            </div>
        @endif

        @if ($news->image5)
            <div class="gallery inviz">
                <a href="/{{ $news->image5 }}" class="big" rel="rel1"><img src="/{{ $news->image5 }}"
                        alt="flat 1"></a>
            </div>
        @endif
        @if ($news->image6)
            <div class="gallery inviz">
                <a href="/{{ $news->image6 }}" class="big" rel="rel1"><img src="/{{ $news->image6 }}"
                        alt="flat 1"></a>
            </div>
        @endif


        <div class="slider-content slider-content--complex">
            <h1 class="flat-title">
                {{ $news->{'title_' . app()->getLocale()} }}
            </h1>
            @if (isset($isSmi))
                <div class="flat-media">
                    {{ __('Источник') }}: {{ $news->{'smi_' . app()->getLocale()} }}
                </div>
            @endif
            <div class="slider-text--news">{!! $news->{'desc1_' . app()->getLocale()} !!}</div>
            @if ($news->{'image1_desc_' . app()->getLocale()} != null)
                <div class="flat-price--mini">{{ __('На фото') }}: {{ $news->{'image1_desc_' . app()->getLocale()} }}
                </div>
            @endif


        </div>
    </section>


    <section class="about-1">
        <div class="max-wrap about-1-wrap-news">
            <div class="about-1-news gallery">
                <a class="about-1-news-link" href="/{{ $news->image2 }}" class="big" rel="rel1">
                    <img class="image-news" src="/{{ $news->image2 }}" alt="news 2">
                    @if ($news->{'image2_desc_' . app()->getLocale()} != null)
                        <div class="about-1-image-desc">{{ __('На фото') }}:
                            {{ $news->{'image2_desc_' . app()->getLocale()} }}
                        </div>
                    @endif
                </a>
                {!! $news->{'desc2_' . app()->getLocale()} !!}
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
