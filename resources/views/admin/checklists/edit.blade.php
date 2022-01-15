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
                <form action="{{ route('admin.checklist_groups.checklists.update', [$checklistGroup, $checklist]) }}"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-header">{{ __('Edit checklist') }} </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Name
                            </label>
                            <input value="{{ $checklist->name }}" type="text" class="form-control" id="name" name="name">
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{ __('Save Checklist') }}</button>
                    </div>
                </form>
            </div>
            <form action="{{ route('admin.checklist_groups.checklists.destroy', [$checklistGroup, $checklist]) }}"
                method="POST">
                @csrf
                @method('DELETE')
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('{{ __('Are you sure?') }}')">
                        {{ __('Delete This Checklist') }}
                    </button>
                </div>
            </form>

            <hr />

            <h2>{{ __('List of tasks') }}</h2>


            <table class="table table-striped">

                <tbody>

                    @foreach ($checklist->tasks as $task)
                        <tr>
                            <td>{{ $task->name }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.checklists.tasks.edit', [$checklist, $task]) }}">{{ __('Edit') }}</a>
                            <form style="display: inline-block"
                                action="{{ route('admin.checklists.tasks.destroy', [$checklist, $task]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('{{ __('Are you sure?') }}')">
                                        {{ __('Delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

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
                <form action="{{ route('admin.checklists.tasks.store', $checklist) }}" method="POST">
                    @csrf
                    <div class="card-header">{{ __('New Task') }}</div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    {{ __('Name') }}
                                </label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">
                                    {{ __('Description') }}
                                </label>
                                <textarea class="form-control" id="description" name="description"
                                    rows="5">{{ old('description') }}</textarea>
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
