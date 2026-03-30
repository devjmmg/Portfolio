@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'text-sm border-gray-300 focus:border-lime-500 focus:ring-lime-500 rounded shadow-sm']) }}>
