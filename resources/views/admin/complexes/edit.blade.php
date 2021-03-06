@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></span>
                        <strong>{{ session('success') }}</strong>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.complexes.update', $complex->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-header">{{ __('Новый комплекс') }}</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="seo_desc_ru" class="form-label">
                                SEO - description для РУССКОЙ версии (Описание, уникальное для каждого комплекса. Не больше
                                двух предложений.)
                            </label>
                            <input type="text" class="form-control" id="seo_desc_ru" name="seo_desc_ru"
                                placeholder=" {{ __('SEO description RU') }}"
                                value="{{ old('seo_desc_ru', $complex->seo_desc_ru) }}">
                        </div>

                        <div class="mb-3">
                            <label for="seo_keywords_ru" class="form-label">
                                SEO - keywords для РУССКОЙ версии (Ключевые слова, уникальные для каждого комплекса. До 5
                                слов или фраз через
                                запятую.)
                            </label>
                            <input type="text" class="form-control" id="seo_keywords_ru" name="seo_keywords_ru"
                                placeholder=" {{ __('SEO keywords RU') }}"
                                value="{{ old('seo_keywords_ru', $complex->seo_keywords_ru) }}">
                        </div>

                        <div class="mb-3">
                            <label for="seo_desc_en" class="form-label">
                                SEO - description для АНГЛИЙСКОЙ версии (Описание, уникальное для каждого комплекса. Не
                                больше двух предложений.)
                            </label>
                            <input type="text" class="form-control" id="seo_desc_en" name="seo_desc_en"
                                placeholder=" {{ __('SEO description ENG') }}"
                                value="{{ old('seo_desc_en', $complex->seo_desc_en) }}">
                        </div>

                        <div class="mb-3">
                            <label for="seo_keywords_en" class="form-label">
                                SEO - keywords для АНГЛИЙСКОЙ версии (Ключевые слова, уникальные для каждого комплекса. До 5
                                слов или фраз через
                                запятую.)
                            </label>
                            <input type="text" class="form-control" id="seo_keywords_en" name="seo_keywords_en"
                                placeholder=" {{ __('SEO keywords ENG') }}"
                                value="{{ old('seo_keywords_en', $complex->seo_keywords_en) }}">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Название
                            </label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder=" {{ __('Название комплекса') }}"
                                value="{{ old('name', $complex->name) }}">
                        </div>
                        <div class="mb-3">
                            <label for="area_ru" class="form-label">
                                Название района (рус)
                            </label>
                            <input type="text" class="form-control" id="area_ru" name="area_ru"
                                placeholder=" {{ __('Название района (рус)') }}"
                                value="{{ old('area_ru', $complex->area_ru) }}">
                        </div>
                        <div class="mb-3">
                            <label for="area_en" class="form-label">
                                Название района (eng)
                            </label>
                            <input type="text" class="form-control" id="area_en" name="area_en"
                                placeholder=" {{ __('Название района (eng)') }}"
                                value="{{ old('area_en', $complex->area_en) }}">
                        </div>

                        <div class="mb-3">
                            <label for="map" class="form-label">
                                {{ __('Ссылка на яндекс карту') }} (При создании карты выбирайте ширину 100%, высоту
                                400px)
                            </label>
                            <textarea class="form-control" id="map" name="map" rows="5">{{ old('map', $complex->map) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="desc1_ru" class="form-label">
                                {{ __('Описание 1 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea1" name="desc1_ru"
                                rows="5">{{ old('desc1_ru', $complex->desc1_ru) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc1_en" class="form-label">
                                {{ __('Описание 1 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea2" name="desc1_en"
                                rows="5">{{ old('desc1_en', $complex->desc1_en) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc2_ru" class="form-label">
                                {{ __('Описание 2 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea3" name="desc2_ru"
                                rows="5">{{ old('desc2_ru', $complex->desc2_ru) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc2_en" class="form-label">
                                {{ __('Описание 2 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea4" name="desc2_en"
                                rows="5">{{ old('desc2_en', $complex->desc2_en) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc3_ru" class="form-label">
                                {{ __('Описание 3 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea5" name="desc3_ru"
                                rows="5">{{ old('desc3_ru', $complex->desc3_ru) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc3_en" class="form-label">
                                {{ __('Описание 3 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea6" name="desc3_en"
                                rows="5">{{ old('desc3_en', $complex->desc3_en) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 4 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea7" name="desc4_ru"
                                rows="5">{{ old('desc4_ru', $complex->desc4_ru) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 4 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea8" name="desc4_en"
                                rows="5">{{ old('desc4_en', $complex->desc4_en) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 5 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea9" name="desc5_ru"
                                rows="5">{{ old('desc5_ru', $complex->desc5_ru) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 5 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea10" name="desc5_en"
                                rows="5">{{ old('desc5_en', $complex->desc5_en) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 6 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea11" name="desc6_ru"
                                rows="5">{{ old('desc6_ru', $complex->desc6_ru) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 6 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea12" name="desc6_en"
                                rows="5">{{ old('desc6_en', $complex->desc6_en) }}</textarea>
                        </div>



                        <div class="form-group">
                            <label>{{ __('Фото 1') }}</label>
                            <input type="file" name="image1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>{{ __('Фото 2') }}</label>
                            <input type="file" name="image2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>{{ __('Фото 3') }}</label>
                            <input type="file" name="image3" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>{{ __('Фото 4') }}</label>
                            <input type="file" name="image4" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>{{ __('Фото 5') }}</label>
                            <input type="file" name="image5" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>{{ __('Фото 6') }}</label>
                            <input type="file" name="image6" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>{{ __('Фото 7') }}</label>
                            <input type="file" name="image7" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>{{ __('Фото 8') }}</label>
                            <input type="file" name="image8" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>{{ __('Фото 9') }}</label>
                            <input type="file" name="image9" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>{{ __('Фото 10') }}</label>
                            <input type="file" name="image10" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>{{ __('Фото 11') }}</label>
                            <input type="file" name="image11" class="form-control">
                        </div>
                        @php
                            $pros = [
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
                                'video_observation' => 'Видеонаблюдение 24/7',
                                'aquapark' => 'Аквапарк',
                                'table_tennis' => 'Настольный теннис',
                                'security' => 'Круглосуточная охрана',
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

                        <div class="three-columns">
                            @foreach ($pros as $pro => $proname)
                                <div>
                                    <input type="checkbox" @if ($complex->{$pro} == 1) checked @endif
                                        name="{{ $pro }}" value=1 id="{{ $pro }}">
                                    <label for="{{ $pro }}">{{ $proname }}</label>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="mb-3">
                            <label for="pros_1" class="form-label">
                                Доп. преимущество 1
                            </label>
                            <input type="text" class="form-control" id="pros_1" name="pros_1"
                                placeholder="{{ __('Доп. преимущество 1') }}" value="{{ $complex->pros_1 }}">
                        </div>
                        <div class="mb-3">
                            <label for="pros_2" class="form-label">
                                Доп. преимущество 2
                            </label>
                            <input type="text" class="form-control" id="pros_2" name="pros_2"
                                placeholder="{{ __('Доп. преимущество 2') }}" value="{{ $complex->pros_2 }}">
                        </div>
                        <div class="mb-3">
                            <label for="pros_3" class="form-label">
                                Доп. преимущество 3
                            </label>
                            <input type="text" class="form-control" id="pros_3" name="pros_3"
                                placeholder="{{ __('Доп. преимущество 3') }}" value="{{ $complex->pros_3 }}">
                        </div> --}}


                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#complex-textarea1'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#complex-textarea2'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#complex-textarea3'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#complex-textarea4'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#complex-textarea5'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#complex-textarea6'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#complex-textarea7'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#complex-textarea8'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#complex-textarea9'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#complex-textarea10'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#complex-textarea11'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#complex-textarea12'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
