@extends('layouts.front')



@section('content')
    @php
    $reverse = 1;

    if (session()->get('locale') == null) {
        session()->put('locale', app()->getLocale());
    } else {
        App::setLocale(session()->get('locale'));
    }
    @endphp
    @foreach ($complexes as $complex)
        @php
            $reverse = $reverse * -1;
        @endphp
        <div class="complexes">
            <div class="max-wrap complexes-wrap">
                <div class="complex @if ($reverse == 1) isreverse @endif">
                    <div class="complex__image__div"><a href="{{ route('complex.show', $complex->id) }}"><img
                                class="complex__image" src="/{{ $complex->image1 }}" alt="Complex"></a></div>
                    <div class="complex__content">
                        <div class="complex__content__title">
                            {{ $complex->name }}
                        </div>
                        @php
                            $maxlen = 450;
                            $file1 = $complex->{'desc1_' . app()->getLocale()};
                            if (strlen($file1) > $maxlen) {
                                $file1 = substr($file1, 0, strrpos($file1, '.', $maxlen - strlen($file1)) + 1);
                            }
                            $file2 = $complex->{'desc1_' . app()->getLocale()};
                            if (strlen($file2) > $maxlen) {
                                $file2 = substr($file2, 0, strrpos($file2, '!', $maxlen - strlen($file2)) + 1);
                            }
                            if (mb_strlen($file2) > mb_strlen($file1)) {
                                $file = $file2;
                            } else {
                                $file = $file1;
                            }
                        @endphp
                        <div class="complex__content__text">{!! $file !!}
                        </div>

                        <div class="complex__content__button">
                            <a href="{{ route('complex.show', $complex->id) }}"
                                class="complex__content__link">@lang('На страницу комплекса')</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
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
