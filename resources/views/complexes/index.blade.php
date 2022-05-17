adsfsdfsdfsdfs adsfsdfsdfsdfs
@foreach ($complexes as $complex)
    <a href="{{ route('complexes.show', $complex->id) }}">{{ $complex->name }}</a>
    {{ $complex }}
@endforeach
