<div {{ $attributes->merge(['class' => 'max-w-md md:max-w-sm lg:max-w-md font-normal leading-8 rounded-sm bg-uw-pink text-uw-gray']) }}>
    <div class="p-6">
        <q class="mt-2 text-base leading-loose tracking-wider italic">
            {{ $slot }}
        </q>
        <svg width="310" height="30" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0 10 L 18 10" stroke="#000"/>
        </svg>
        <cite>{{ $from }}</cite>
    </div>
</div>
