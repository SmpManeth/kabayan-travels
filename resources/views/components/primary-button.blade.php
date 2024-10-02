<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white bg-button-gradient focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center ']) }}>
    {{ $slot }}
</button>
