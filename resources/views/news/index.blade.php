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
    @foreach ($manyNews as $news)
        @php
            $reverse = $reverse * -1;
        @endphp
        <div class="complexes">
            <div class="max-wrap complexes-wrap">
                <div class="complex @if ($reverse == 1) isreverse @endif">
                    <div class="complex__image__div">
                        @if (isset($isSmi))
                            <a href="{{ route('media.show', $news->id) }}">
                            @else
                                <a href="{{ route('news.show', $news->id) }}">
                        @endif
                        <img class="complex__image" src="/{{ $news->image1 }}" alt="Complex"></a>
                    </div>
                    <div class="complex__content">
                        <div class="complex__content__title">
                            {{ $news->{'title_' . app()->getLocale()} }}
                        </div>
                        <div class="complex__content__text">
                            @php
                                
                                $maxlen = 430;
                                $file = mb_strcut($news->{'desc1_' . app()->getLocale()}, 0, 300) . '...';
                                // if (strlen($file) > $maxlen) {
                                //     $file = substr($file, 0, strrpos($file, '. ', $maxlen - strlen($file)) + 1);
                                // }
                            @endphp
                            {!! $file !!}
                        </div>
                        @if (isset($isSmi))
                            <div class="flat-index--media">
                                {{ __('Источник') }}: {{ $news->{'smi_' . app()->getLocale()} }}
                            </div>
                        @endif
                        <div class="complex__content__button">
                            @if (isset($isSmi))
                            <a href="{{ route('media.show', $news->id) }}" @else <a
                                    href="{{ route('news.show', $news->id) }}" @endif
                                    class="complex__content__link">@lang('Подробнее')</a>
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
