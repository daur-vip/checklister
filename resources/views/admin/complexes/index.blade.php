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
                <a class="alert h3" href="{{ route('admin.complexes.create') }}">Создать новый комплекс</a>

                <table class="table w-75">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Complex Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($complexes as $complex)
                            <tr>
                                <th scope="row h5">{{ $i++ }}</th>
                                <td class="h5">{{ $complex->name }}</td>
                                <td><a class="h5" href="{{ route('admin.complexes.edit', $complex->id) }}"
                                        class="link-warning">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.complexes.destroy', $complex->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="">
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('{{ __('Are you sure?') }}')">
                                                {{ __('Delete This Complex') }}
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
