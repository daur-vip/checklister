@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.checklist_groups.update', $checklistGroup) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-header">{{ __('Edit checklist group') }}</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                {{ __('Name') }}
                            </label>
                            <input value="{{ $checklistGroup->name }}" type="text" class="form-control" id="name"
                                name="name">
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                    </div>
                </form>

            </div>
            <form action="{{ route('admin.checklist_groups.destroy', $checklistGroup) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('{{ __('Are you sure?') }}')">
                        {{ __('Delete This Checklist Group') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
