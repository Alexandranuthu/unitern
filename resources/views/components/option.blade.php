@props(['value', 'label'])

<option value="{{ $value }}" {{ $attributes->merge(['class' => 'py-1 px-2']) }}>
    {{ $label }}
</option>
