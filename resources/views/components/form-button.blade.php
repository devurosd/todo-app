<button {{ $attributes->merge(['class' => 'rounded-md bg-lime-600 px-3 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-lime-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600', 'type' => 'submit']) }}>
    {{ $slot }}
</button>