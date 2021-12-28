@php
    $locale = $locale ?? 'en';
    $whiteBackground = $white ?? false;
@endphp
<x-container class="{{ $whiteBackground ? 'bg-white' : 'bg-uw-pink' }} text-uw-gray">
    <x-section-title class="mb-6">{{ trans('contact-me.title', [], $locale) }}</x-section-title>
    <div class="flex flex-col md:flex-row">
        <x-contact-me.text locale="{{ $locale }}"/>
        <livewire:contact-me :locale="$locale" :white="$whiteBackground"/>
    </div>
</x-container>
