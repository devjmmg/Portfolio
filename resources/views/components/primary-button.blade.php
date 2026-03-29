<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full md:w-auto text-sm font-sans bg-lime-500 hover:bg-lime-600 text-white font-semibold px-6 py-3 transition-colors duration-300 ease-linear focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded']) }}>
    {{ $slot }}
</button>
