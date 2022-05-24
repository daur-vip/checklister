@extends('layouts.front')

@section('content')
    @php

    if (session()->get('locale') == null) {
        session()->put('locale', app()->getLocale());
    } else {
        App::setLocale(session()->get('locale'));
    }
    @endphp
    <section class="slider slider-contact">

        <div class="slider-content slider-content--complex">
            <h1 class="slider-title-services">
                {{ __('Контакты') }}
            </h1>
        </div>
    </section>



    <section class="about-1">
        <div class="max-wrap about-1-wrap">
            <div class="about-1-text">
                <div class="slider-text-services">
                    <h1 class="slider-title-services">
                        {{ __('Казахстан') }}
                    </h1>

                    <p><span style="font-weight: 600">{{ __('Адрес') }}:</span> {{ __('г. Алматы, пр. Абая 151') }}</p>
                    <br>

                    <ul style="line-height: 1.9em">
                        <li><a class="slider-link-contact" href="tel:+77777071234">{{ __('Телефон') }}: +7 777
                                707
                                1234</a></li>

                        <li><a class="slider-link-contact" target="_blank"
                                href="https://wa.me/77777071234?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C+%D1%85%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8+%D0%B2+%D0%A2%D1%83%D1%80%D1%86%D0%B8%D0%B8.">Whatsapp:
                                +7 777 707 1234
                            </a></li>

                        <li><a class="slider-link-contact" target="_blank" href="https://t.me/myflatkz">Telegram: +7 777 707
                                1234
                            </a></li>

                        <li><a class="slider-link-contact" target="_blank" href="viber://add?number=77777071234">Viber: +7
                                777 707
                                1234
                            </a></li>
                        <li><a class="slider-link-contact" target="_blank" href="https://instagram.com/myflat.kz">Instagram:
                                @myflat.kz
                            </a></li>
                    </ul>


                </div>

            </div>


            <div class="about-1-text">
                <div class="slider-text-services">
                    <h1 class="slider-title-services">
                        {{ __('Турция') }}
                    </h1>

                    <p><span style="font-weight: 600">{{ __('Адрес') }}: </span>Mahmutlar, Barbaros Cd. No:
                        16, 07460 Alanya</p><br>

                    <ul style="line-height: 1.9em">
                        <li><a class="slider-link-contact" href="tel:+905348268407">{{ __('Телефон') }}: +90 534 826
                                8407</a></li>

                        <li><a class="slider-link-contact" target="_blank"
                                href="https://wa.me/905348268407?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C+%D1%85%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8+%D0%B2+%D0%A2%D1%83%D1%80%D1%86%D0%B8%D0%B8.">Whatsapp:
                                +90 534 826 8407
                            </a></li>

                        <li><a class="slider-link-contact" target="_blank" href="https://t.me/myflatTR">Telegram: +90 534
                                826 8407
                            </a></li>

                        <li><a class="slider-link-contact" target="_blank" href="viber://add?number=905348268407">Viber: +90
                                534 826 8407
                            </a></li>
                        <li><a class="slider-link-contact" target="_blank" href="https://instagram.com/myflat.kz">Instagram:
                                @myflat.kz
                            </a></li>
                    </ul>
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
