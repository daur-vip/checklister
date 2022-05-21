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
                <form action="{{ route('admin.flats.update', $flat->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-header">{{ __('Новая квартира') }}</div>
                    <div class="card-body">
                        <div class="mb-3 w-25">
                            <label for="complex" class="form-label">
                                Выберите ЖК:
                            </label>
                            <select type="text" class="" id="complex" name="complex">
                                @foreach ($complexes as $complex)
                                    <option @if ($complex->id == $flat->complex_id) selected @endif value="{{ $complex->id }}">
                                        {{ $complex->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <label for="price_euro">Стоимость в Евро</label>
                        <input class="form-control mb-3" type="text" name="price_euro" id="price_euro"
                            value="{{ old('price_euro', $flat->price_euro) }}">
                        <label for="price_dollar">Стоимость в Долларах</label>
                        <input class="form-control mb-3" type="text" name="price_dollar" id="price_dollar"
                            value="{{ old('price_dollar', $flat->price_dollar) }}">
                        <label for="price_tenge">Стоимость в Тенге</label>
                        <input class="form-control mb-3" type="text" name="price_tenge" id="price_tenge"
                            value="{{ old('price_tenge', $flat->price_tenge) }}">

                        <label for="square">Площадь</label>
                        <input class="form-control mb-3" type="text" name="square" id="square"
                            value="{{ old('square', $flat->square) }}">
                        <label for="flat_ru">Тип квартиры (рус):</label>
                        <input class="form-control mb-3" type="text" name="flat_ru" id="flat_ru"
                            value="{{ old('flat_ru', $flat->flat_ru) }}">
                        <label for="flat_en">Тип квартиры (eng):</label>
                        <input class="form-control mb-3" type="text" name="flat_en" id="flat_en"
                            value="{{ old('flat_en', $flat->flat_en) }}">

                        <div class="three-columns">

                            <div>
                                <input type="checkbox" @if ($flat->first) checked @endif name="first" value=1
                                    id="first">
                                <label for="first">Первичка</label>
                            </div>
                            <div>
                                <input type="checkbox" @if ($flat->furnished) checked @endif name="furnished"
                                    value=1 id="furnished">
                                <label for="furnished">Мебилирована</label>
                            </div>

                        </div>



                        {{-- <div class="mb-3">
                            <label for="desc1_ru" class="form-label">
                                {{ __('Описание 1 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea1" name="desc1_ru" rows="5">{{ $flat->desc1_ru }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc1_en" class="form-label">
                                {{ __('Описание 1 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea2" name="desc1_en" rows="5">{{ $flat->desc1_en }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc2_ru" class="form-label">
                                {{ __('Описание 2 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea3" name="desc2_ru" rows="5">{{ $flat->desc2_ru }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc2_en" class="form-label">
                                {{ __('Описание 2 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea4" name="desc2_en" rows="5">{{ $flat->desc2_en }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc3_ru" class="form-label">
                                {{ __('Описание 3 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea5" name="desc3_ru" rows="5">{{ $flat->desc3_ru }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc3_en" class="form-label">
                                {{ __('Описание 3 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea6" name="desc3_en" rows="5">{{ $flat->desc3_en }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 4 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea7" name="desc4_ru" rows="5">{{ $flat->desc4_ru }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 4 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea8" name="desc4_en" rows="5">{{ $flat->desc4_en }}</textarea>
                        </div> --}}


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


                        {{-- <div class="mb-3">
                            <label for="pros_1" class="form-label">
                                Доп. преимущество 1
                            </label>
                            <input type="text" class="form-control" id="pros_1" name="pros_1"
                                placeholder="{{ __('Доп. преимущество 1') }}">
                        </div>
                        <div class="mb-3">
                            <label for="pros_2" class="form-label">
                                Доп. преимущество 2
                            </label>
                            <input type="text" class="form-control" id="pros_2" name="pros_2"
                                placeholder="{{ __('Доп. преимущество 2') }}">
                        </div>
                        <div class="mb-3">
                            <label for="pros_3" class="form-label">
                                Доп. преимущество 3
                            </label>
                            <input type="text" class="form-control" id="pros_3" name="pros_3"
                                placeholder="{{ __('Доп. преимущество 3') }}">
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
