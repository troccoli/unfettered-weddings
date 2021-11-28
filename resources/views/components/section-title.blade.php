<div {{ $attributes->merge(['class' => 'text-center']) }}>
    <h1 class="text-2xl">{{ $slot }}</h1>
    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" class="mx-auto">
        <path d="M 0 10 L 20 10" stroke="#000"/>
    </svg>
</div>
