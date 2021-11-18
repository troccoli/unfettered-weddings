<div {{ $attributes->merge(['class' => 'max-w-md md:max-w-sm lg:max-w-md font-normal leading-8 rounded-sm bg-uw-pink text-uw-gray']) }}>
    <div class="w-full h-48">
        <img src="{{ $image }}" class="w-full h-full object-cover"/>
    </div>
    <div class="p-6">
        <h5 class="text-2xl">{{ $couple }}</h5>
        <svg width="310" height="30" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0 10 L 18 10" stroke="#000"/>
        </svg>
        <p class="mt-2 text-base leading-loose tracking-wider">
            {{ $slot }}
        </p>
    </div>
</div>
