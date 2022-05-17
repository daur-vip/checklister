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
                            <label for="name" class="form-label">
                                Название
                            </label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder=" {{ __('Название комплекса') }}" value="{{ $complex->name }}">
                        </div>

                        <div class="mb-3">
                            <label for="desc1_ru" class="form-label">
                                {{ __('Описание 1 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea1" name="desc1_ru" rows="5">{{ $complex->desc1_ru }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc1_en" class="form-label">
                                {{ __('Описание 1 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea2" name="desc1_en" rows="5">{{ $complex->desc1_en }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc2_ru" class="form-label">
                                {{ __('Описание 2 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea3" name="desc2_ru" rows="5">{{ $complex->desc2_ru }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc2_en" class="form-label">
                                {{ __('Описание 2 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea4" name="desc2_en" rows="5">{{ $complex->desc2_en }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc3_ru" class="form-label">
                                {{ __('Описание 3 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea5" name="desc3_ru" rows="5">{{ $complex->desc3_ru }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc3_en" class="form-label">
                                {{ __('Описание 3 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea6" name="desc3_en" rows="5">{{ $complex->desc3_en }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 4 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea7" name="desc4_ru" rows="5">{{ $complex->desc4_ru }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 4 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea8" name="desc4_en" rows="5">{{ $complex->desc4_en }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 5 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea9" name="desc5_ru" rows="5">{{ $complex->desc5_ru }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 5 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea10" name="desc5_en" rows="5">{{ $complex->desc5_en }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 6 на русском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea11" name="desc6_ru" rows="5">{{ $complex->desc6_ru }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                {{ __('Описание 6 на английском') }}
                            </label>
                            <textarea class="form-control" id="complex-textarea12" name="desc6_en" rows="5">{{ $complex->desc6_en }}</textarea>
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
