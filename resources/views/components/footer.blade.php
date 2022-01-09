<x-container class="bg-uw-gray text-uw-pink">
    <div class="flex flex-col lg:flex-row">
        <div class="lg:w-1/3 mx-auto mt-14 lg:m-auto lg:flex lg:place-content-center">
            <img src="{{ url('images/logos/square-gray-mobile-footer.png') }}" alt="Unfettered Weddings logo"
                 class=" md:hidden">
            <img src="{{ url('images/logos/square-gray-tablet-footer.png') }}" alt="Unfettered Weddings logo"
                 class="hidden md:block lg:hidden">
            <img src="{{ url('images/logos/square-gray-desktop-footer.png') }}" alt="Unfettered Weddings logo"
                 class="hidden lg:block">
        </div>
        <ul class="lg:w-1/3 lg:m-auto text-center text-base md:text-lg font-normal space-y-5 md:space-y-7">
{{--            <li><a href="{{ route('about-humanism') }}" class="nav-link">About humanism</a></li>--}}
            <li><a href="{{ route('contact-me') }}" class="nav-link">Contact me</a></li>
            <li><a href="{{ route('privacy-notice') }}" class="nav-link">Privacy notice</a></li>
            <li><a href="{{ route('price-list') }}" class="nav-link">Price list</a></li>
        </ul>
        <div
            class="w-1/2 sm:w-1/3 mx-auto my-14 md:my-16 lg:m-auto flex justify-between lg:justify-center lg:space-x-8 xl:space-x-12">
            <x-social.facebook/>
            <x-social.instagram/>
            <x-social.twitter/>
        </div>
    </div>
</x-container>
