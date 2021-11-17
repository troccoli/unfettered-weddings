<div {{ $attributes->merge(['class' => 'w-full']) }}>
    <img src="{{ $slot }}" alt="{{ $alt }}" class="rounded-2xl sm:rounded-xl lg:rounded-lg"/>
</div>
