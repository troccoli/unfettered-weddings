<a {{ $attributes->merge(['class' => 'group flex max-w-max']) }}>
    <p>{{ $slot }}</p>
    <div class="flex flex-wrap content-center group-hover:animate-ping">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-12" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
    </div>
</a>