@props(['for'])

@error($for)
    <small {{ $attributes->merge(['class' => 'invalid-feedback']) }}>{{ $message }}</small>
@enderror
