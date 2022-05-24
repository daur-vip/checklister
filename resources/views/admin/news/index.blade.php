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
                    <a class="alert h3" href="{{ route('admin.media.create') }}">Создать новую новость</a>
                @else
                    <a class="alert h3" href="{{ route('admin.news.create') }}">Создать новую новость</a>
                @endif
                <table class="table w-75">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">News Title</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($manyNews as $news)
                            <tr>
                                <th scope="row h5">{{ $i++ }}</th>
                                <td class="h5">{{ $news->title_ru }}</td>
                                <td><a class="h5" href="
                                                                                @if (isset($isSmi)) {{ route('admin.media.edit', $news->id) }}
                                    @else
                                    {{ route('admin.news.edit', $news->id) }} @endif
                                                                                " class="link-warning">Edit</a>
                                </td>
                                <td>
                                    @if (isset($isSmi))
                                        <form action="{{ route('admin.media.destroy', $news->id) }}" method="POST">
                                        @else
                                            <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST">
                                    @endif
                                    @csrf
                                    @method('DELETE')
                                    <div class="">
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('{{ __('Are you sure?') }}')">
                                            {{ __('Delete This News') }}
                                        </button>
                                    </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>

@endsection
