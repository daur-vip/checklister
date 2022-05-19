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
                <a class="alert h3" href="{{ route('admin.flats.create') }}">Добавить новую квартиру</a>

                <table class="table w-75">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Complex Name</th>
                            <th scope="col">Flat type</th>
                            <th scope="col">Price</th>
                            <th scope="col">Square</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                            $complexes = App\Models\Complex::all()->keyBy('id');
                            
                        @endphp
                        @foreach ($flats as $flat)
                            <tr>
                                <th scope="row h5">{{ $i++ }}</th>
                                <td class="h5">{{ $complexes[$flat->complex_id]->name }}</td>
                                <td class="h5">{{ $flat->flat_ru }}</td>
                                <td class="h5">{{ $flat->price }} Евро</td>
                                <td class="h5">{{ $flat->square }} кв.м.</td>
                                <td><a class="h5" href="{{ route('admin.flats.edit', $flat->id) }}"
                                        class="link-warning">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.flats.destroy', $flat->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="">
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('{{ __('Are you sure?') }}')">
                                                {{ __('Delete This Flat') }}
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
