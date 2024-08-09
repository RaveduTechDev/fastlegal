<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-danger-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-danger-300 focus:bg-danger-300 active:bg-danger-300 focus:outline-none focus:ring-2 focus:ring-danger-300 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
