
@props(['name', 'value', 'options'])

<select {{ $attributes->merge(['class' => 'form-control']) }} id="{{ $name }}" name="{{ $name }}">
    @foreach ($options as $id => $name)
        <option value="{{ $id }}" {{ old($name, $value) == $id ? 'selected' : '' }}>{{ $name }}</option>
    @endforeach
</select>