<x-container class="bg-uw-white text-uw-gray">
    <x-section-title class="mb-6">What do couple say?</x-section-title>
    <x-section-text>
        <p>Read what some couples and guests have said.</p>
    </x-section-text>
    <div class="flex flex-wrap justify-center mx-8 my-12 gap-y-20 gap-x-10 md:justify-around">
        <x-testimonial-card image="{{ url('images/testimonials/placeholder.jpg') }}" couple="Mandy and Neil">
            You have a wonderfully engaging style and great balance between the solemnity of the occasion, and great
            fun. I really admired how you wove details through the script. [Charlotte]
        </x-testimonial-card>
        <x-testimonial-card image="{{ url('images/testimonials/placeholder.jpg') }}" couple="Mandy and Neil">
            Loved it. Your tone throughout with pitch changes kept it engaging, and you were funny. [Ian]
        </x-testimonial-card>
        <x-testimonial-card image="{{ url('images/testimonials/placeholder.jpg') }}" couple="Mandy and Neil">
            loved how well you got them couple. Really went deep into their story. [Emma]
        </x-testimonial-card>
    </div>
    <x-section-text>
        <x-link href="#" title="Read all testimonials">See all testimonials</x-link>
    </x-section-text>
</x-container>
