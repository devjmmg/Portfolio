@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'block mt-2 w-full text-sm border-gray-300 shadow-sm focus:border-lime-500 focus:outline-none focus:ring-lime-500 rounded']) }}>
                                                               
