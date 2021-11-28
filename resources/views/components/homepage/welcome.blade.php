<x-container class="bg-white text-uw-gray">
    <div class="flex flex-col md:flex-row-reverse mb-16">
        <div class="md:w-1/2">
            <img src="{{ url('/images/homepage-banner.jpg') }}" alt="White flowers on a table"
                 class="w-full md:w-auto md:h-full object-left object-cover"/>
        </div>
        <div class="flex flex-col justify-items-start md:my-16 md:pl-8 lg:pl-14 text-center md:text-left">
            <h1 class="mt-8 text-4xl">Unfettered Weddings</h1>
            <p class="mt-8 mx-auto md:mx-0 w-4/5 text-2xl">Making your special day worth remembering</p>
            <div class="hidden flex justify-start md:block">
                <x-homepage.book-a-call-button/>
            </div>
        </div>
    </div>
    <x-section-text>
        <p>
            Hello there, how are you? Thank you for showing an interest in having an Unfettered Wedding. My name is
            Giulio Troccoli-Allard (he/him/his) and I am a wedding celebrant accredited by Humanists UK.
        </p>
        <p>
            The Cambridge Dictionary defines "unfettered" as "not limited by rules or any other controlling influence",
            and the Merriam-Webster as "not controlled or restricted". If that's the sort of wedding you are thinking of
            then you are in the right place.
        </p>
        <p>
            My job is to make your special day even more special, by creating a personalised ceremony that reflects you,
            your lives, your values and whatever else you want.
        </p>
    </x-section-text>
    <div class="flex justify-center md:hidden">
        <x-homepage.book-a-call-button/>
    </div>
</x-container>
