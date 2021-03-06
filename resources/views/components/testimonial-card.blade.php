<div {{ $attributes->merge(['class' => 'max-w-md md:max-w-sm lg:max-w-md font-normal leading-8 rounded-sm bg-uw-pink text-uw-gray']) }}>
    <div class="w-full h-48">
        <img src="{{ $image }}" class="w-full h-full object-cover"/>
    </div>
    <div class="p-6">
        <h5 class="text-2xl text-center">{{ $couple }}</h5>
        <svg width="80" height="20" xmlns="http://www.w3.org/2000/svg" class="mx-auto">
            <path d="M 0 10 L 80 10" stroke="#000"/>
        </svg>
        <q class="mt-2 text-base leading-loose tracking-wider italic">
            {{ $slot }}
        </q>
        <svg width="310" height="30" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0 10 L 18 10" stroke="#000"/>
        </svg>
        <cite>{{ $from }}</cite>
    </div>
</div>
