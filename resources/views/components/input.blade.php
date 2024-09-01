@props(['type' => 'text', 'name', 'value' => ''])

<input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" {{ $attributes->merge(['class' => 'form-control']) }}>
