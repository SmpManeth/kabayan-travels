@props(['value'])

<p {{ $attributes->merge(['class' => 'text-center font-Yesteryear gradient-text px-2']) }}>{{ $value ?? $slot }}</p>