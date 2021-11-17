<x-container class="bg-uw-pink text-uw-gray">
    <div
        class="px-8 grid grid-cols-1 space-y-6 sm:space-y-12 md:grid-cols-2 md:gap-8 md:space-y-0 lg:grid-cols-3 lg:gap-x-12 lg:gap-y-8">
        <x-homepage.gallery-photo>
            {{ url('images/gallery/photo-1.jpg') }}
            <x-slot name="alt">man raising his right arm beside woman holding bouquet of flowers</x-slot>
        </x-homepage.gallery-photo>
        <x-homepage.gallery-photo class="lg:col-span-2 lg:row-span-2">
            {{ url('images/gallery/photo-2.jpg') }}
            <x-slot name="alt">two women in white and red floral dress</x-slot>
        </x-homepage.gallery-photo>
        <x-homepage.gallery-photo>
            {{ url('images/gallery/photo-3.jpg') }}
            <x-slot name="alt">red and white eat, drink, and be married signage near brown tree</x-slot>
        </x-homepage.gallery-photo>
        <x-homepage.gallery-photo class="lg:col-span-2 lg:row-span-2">
            {{ url('images/gallery/photo-4.jpg') }}
            <x-slot name="alt">woman riding on back of man</x-slot>
        </x-homepage.gallery-photo>
        <x-homepage.gallery-photo>
            {{ url('images/gallery/photo-5.jpg') }}
            <x-slot name="alt">two black steel chairs beside table</x-slot>
        </x-homepage.gallery-photo>
        <x-homepage.gallery-photo>
            {{ url('images/gallery/photo-6.jpg') }}
            <x-slot name="alt">two man's hands wearing gold-colored wedding rings</x-slot>
        </x-homepage.gallery-photo>
    </div>
</x-container>
