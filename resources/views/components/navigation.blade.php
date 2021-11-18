<x-container class="bg-white text-uw-pink md:text-black">
    <div x-data="{ open: false }"
         class="flex flex-col md:items-center md:justify-between md:flex-row">
        <div class="flex md:flex-none flex-row items-center justify-between">
            <div class="h-auto md:h-32 lg:h-40">
                <img src="{{ url('images/logos/square-white-mobile-navbar.png') }}" alt="Unfettered Weddings logo"
                     class=" md:hidden">
                <img src="{{ url('images/logos/square-white-tablet-navbar.png') }}" alt="Unfettered Weddings logo"
                     class="hidden md:block lg:hidden">
                <img src="{{ url('images/logos/square-white-desktop-navbar.png') }}" alt="Unfettered Weddings logo"
                     class="hidden lg:block">
            </div>
            <button class="mr-5 md:hidden rounded-lg focus:outline-none focus:shadow-outline text-black"
                    @click="open = !open">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path x-show="!open" fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"/>
                    <path x-show="open" fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"/>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}"
             class="flex-col flex-grow pr-8 py-4 md:py-0 text-base md:text-lg font-normal hidden md:flex md:justify-end md:flex-row bg-uw-gray md:bg-white">
            <a href="{{ route('home') }}" class="nav-link mx-4 my-2 whitespace-nowrap w-min">Home</a>
            <a href="{{ route('humanist-weddings') }}" class="nav-link mx-4 my-2 whitespace-nowrap w-min">Humanist weddings</a>
{{--            <a href="#" class="nav-link mx-4 my-2 whitespace-nowrap w-min">Testimonials</a>--}}
            <a href="{{ route('unfettered-community') }}" class="nav-link mx-4 my-2 whitespace-nowrap w-min">We are Unfettered</a>
            <div @click.away="open = false" class="relative hidden" x-data="{ open: false }">
                <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span>Dropdown</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                         class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </nav>
    </div>
</x-container>
