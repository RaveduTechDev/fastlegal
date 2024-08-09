@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 focus:border-danger-300 focus:outline-none focus:ring-danger-300 rounded-md shadow-sm',
]) !!}>
