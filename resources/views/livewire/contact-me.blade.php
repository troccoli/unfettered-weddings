<div class="w-full md:w-1/2 lg:w-2/3 bg-uw-pink relative">
    @if($successMessage)
    <div class="w-full h-full absolute block top-0 left-0 bg-uw-pink z-50">
        <div class="w-full mt-12 md:mt-0 px-8 md:pl-24 leading-loose tracking-wider">
            <p>{{ $successMessage }}</p>
        </div>
     </div>
    @endif
    <form wire:submit.prevent="submitForm" action="#" method="POST">
        @csrf
        <div
            class="w-full text-uw-gray flex flex-col justify-center leading-loose tracking-wider space-y-8 px-8 md:px-0 md:pr-24 pt-12 md:pt-0">
            <div>
                <div class="py-3">
                    <input wire:model="name"
                           class="w-full px-5 py-3 border-none focus:ring-uw-gray leading-loose tracking-wider"
                           type="text"
                           placeholder="{{ trans('contact-me.placeholders.name', [], $locale) }}" name="name" value="{{ old('name') }}"/>
                    @error('name')
                    <p class="text-red-800 mt-1 ml-5">{{ $message }}</p>
                    @enderror
                </div>
                <div class="py-3">
                    <input wire:model="email"
                           class="w-full px-5 py-3 border-none focus:ring-uw-gray leading-loose tracking-wider"
                           type="text"
                           placeholder="{{ trans('contact-me.placeholders.email', [], $locale) }}" name="email" value="{{ old('email') }}"/>
                    @error('email')
                    <p class="text-red-800 mt-1 ml-5">{{ $message }}</p>
                    @enderror
                </div>
                <div class="py-3">
                    <textarea wire:model.defer="message" row="4"
                              class="w-full h-40 px-5 py-3 border-none focus:ring-uw-gray leading-loose tracking-wider"
                              name="comment" placeholder="{{ trans('contact-me.placeholders.message', [], $locale) }}">{{ old('comment') }}</textarea>
                    @error('message')
                    <p class="text-red-800 mt-1 ml-5">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-row">
                <button class="w-36 h-10 text-md bg-black hover:bg-uw-pink text-uw-pink hover:bg-uw-gray inline-flex justify-center items-center"
                        type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <span class="leading-loose tracking-wider">{{ trans('contact-me.button', [], $locale) }}</span>
                </button>
            </div>
        </div>
    </form>
</div>
