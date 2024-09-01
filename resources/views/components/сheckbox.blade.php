@props(['name', 'checked' => false])

<input type="checkbox" name="{{ $name }}" {{ $checked ? 'checked' : '' }} {{ $attributes->merge(['class' => 'form-check-input']) }}>
<label {{ $attributes->merge(['class' => 'form-check-label']) }}>
    {{ $slot }}
</label>
