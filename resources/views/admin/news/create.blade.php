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
                @if (isset($isSmi))
                    <form action="{{ route('admin.media.store') }}" method="POST" enctype="multipart/form-data">
                    @else
                        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @endif
                @csrf
                <div class="card-header">{{ __('Добавить новость') }}</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="seo_desc_ru" class="form-label">
                            SEO - description для РУССКОЙ версии (Описание, уникальное для каждого комплекса. Не больше
                            двух предложений.)
                        </label>
                        <input type="text" class="form-control" id="seo_desc_ru" name="seo_desc_ru"
                            placeholder=" {{ __('SEO description RU') }}" value="{{ old('seo_desc_ru') }}">
                    </div>
                    <div class="mb-3">
                        <label for="seo_keywords_ru" class="form-label">
                            SEO - keywords для РУССКОЙ версии (Ключевые слова, уникальные для каждого комплекса. До 5
                            слов или фраз через
                            запятую.)
                        </label>
                        <input type="text" class="form-control" id="seo_keywords_ru" name="seo_keywords_ru"
                            placeholder=" {{ __('SEO keywords RU') }}" value="{{ old('seo_keywords_ru') }}">
                    </div>
                    <div class="mb-3">
                        <label for="seo_desc_en" class="form-label">
                            SEO - description для АНГЛИЙСКОЙ версии (Описание, уникальное для каждого комплекса. Не
                            больше двух предложений.)
                        </label>
                        <input type="text" class="form-control" id="seo_desc_en" name="seo_desc_en"
                            placeholder=" {{ __('SEO description ENG') }}" value="{{ old('seo_desc_en') }}">
                    </div>
                    <div class="mb-3">
                        <label for="seo_keywords_en" class="form-label">
                            SEO - keywords для АНГЛИЙСКОЙ версии (Ключевые слова, уникальные для каждого комплекса. До 5
                            слов или фраз через
                            запятую.)
                        </label>
                        <input type="text" class="form-control" id="seo_keywords_en" name="seo_keywords_en"
                            placeholder=" {{ __('SEO keywords ENG') }}" value="{{ old('seo_keywords_en') }}">
                    </div>
                    <div class="mb-3">
                        <label for="title_ru" class="form-label">
                            Название новости (рус)
                        </label>
                        <input type="text" class="form-control" id="title_ru" name="title_ru"
                            placeholder=" {{ __('Название новости (рус)') }}" value="{{ old('title_ru') }}">
                    </div>
                    <div class="mb-3">
                        <label for="title_en" class="form-label">
                            Название новости (eng)
                        </label>
                        <input type="text" class="form-control" id="title_en" name="title_en"
                            placeholder=" {{ __('Название новости (eng)') }}" value="{{ old('title_en') }}">
                    </div>

                    @if (isset($isSmi))
                        <div class="mb-3">
                            <label for="smi_ru" class="form-label">
                                Название СМИ (рус)
                            </label>
                            <input type="text" class="form-control" id="smi_ru" name="smi_ru"
                                placeholder=" {{ __('Название СМИ (eng)') }}" value="{{ old('smi_ru') }}">
                        </div>

                        <div class="mb-3">
                            <label for="smi_en" class="form-label">
                                Название СМИ (eng)
                            </label>
                            <input type="text" class="form-control" id="smi_en" name="smi_en"
                                placeholder=" {{ __('Название СМИ (eng)') }}" value="{{ old('smi_en') }}">
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="desc1_ru" class="form-label">
                            {{ __('Описание 1 на русском') }}
                        </label>
                        <textarea class="form-control" id="complex-textarea1" name="desc1_ru" rows="5">{{ old('desc1_ru') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="desc1_en" class="form-label">
                            {{ __('Описание 1 на английском') }}
                        </label>
                        <textarea class="form-control" id="complex-textarea2" name="desc1_en" rows="5">{{ old('desc1_en') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="desc2_ru" class="form-label">
                            {{ __('Описание 2 на русском') }}
                        </label>
                        <textarea class="form-control" id="complex-textarea3" name="desc2_ru" rows="5">{{ old('desc2_ru') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="desc2_en" class="form-label">
                            {{ __('Описание 2 на английском') }}
                        </label>
                        <textarea class="form-control" id="complex-textarea4" name="desc2_en" rows="5">{{ old('desc2_en') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>{{ __('Фото 1') }}</label>
                        <input type="file" name="image1" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="image1_desc_ru" class="form-label">
                            Описание фото 1 (rus)
                        </label>
                        <input type="text" class="form-control" id="image1_desc_ru" name="image1_desc_ru"
                            placeholder=" {{ __('Описание фото 1 (rus)') }}" value="{{ old('image1_desc_ru') }}">
                    </div>
                    <div class="mb-3">
                        <label for="image1_desc_en" class="form-label">
                            Описание фото 1 (eng)
                        </label>
                        <input type="text" class="form-control" id="image1_desc_en" name="image1_desc_en"
                            placeholder=" {{ __('Описание фото 1 (eng)') }}" value="{{ old('image1_desc_en') }}">
                    </div>

                    <div class="form-group">
                        <label>{{ __('Фото 2') }}</label>
                        <input type="file" name="image2" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="image2_desc_ru" class="form-label">
                            Описание фото 2 (rus)
                        </label>
                        <input type="text" class="form-control" id="image2_desc_ru" name="image2_desc_ru"
                            placeholder=" {{ __('Описание фото 2 (rus)') }}" value="{{ old('image2_desc_ru') }}">
                    </div>
                    <div class="mb-3">
                        <label for="image2_desc_en" class="form-label">
                            Описание фото 2 (eng)
                        </label>
                        <input type="text" class="form-control" id="image2_desc_en" name="image2_desc_en"
                            placeholder=" {{ __('Описание фото 2 (eng)') }}" value="{{ old('image2_desc_en') }}">
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
