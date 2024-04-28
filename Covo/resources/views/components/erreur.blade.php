@props(['field'])

@if ($errors->has($field))
    @foreach ($errors->get($field) as $error)
        <p class="text-red-500 text-xs">{{ $error }}</p>
    @endforeach
@endif


