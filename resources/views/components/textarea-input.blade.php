@props(['disabled' => false])

<textarea @disabled($disabled) {{ $attributes->merge(['class' => 'block p-4 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500']) }}>{{ $slot }}</textarea>