@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if ($errors->storetask->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->storetask->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.checklists.tasks.update', [$checklist, $task]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-header">{{ __('Edit Task') }}</div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    {{ __('Name') }}
                                </label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">
                                    {{ __('Description') }}
                                </label>
                                <textarea class="form-control" id="description" name="description"
                                    rows="5">{{ $task->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{ __('Save Task') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
