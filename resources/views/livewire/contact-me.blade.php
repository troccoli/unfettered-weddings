<div class="w-full md:w-1/2 lg:w-2/3 bg-uw-pink">
    <form wire:submit.prevent="submitForm" action="#" method="POST">
        @csrf
        <div class="w-full text-uw-gray flex flex-col justify-center leading-loose tracking-wider space-y-8 px-8 md:px-0 md:pr-24 pt-12 md:pt-0">
            <div>
                <div class="py-3">
                    <input wire:model="name" class="w-full px-5 py-3 border-none focus:ring-uw-gray leading-loose tracking-wider" type="text"
                           placeholder="Name" name="name" value="{{ old('name') }}"/>
                    @error('name')
                    <p class="text-red-800 mt-1 ml-5">{{ $message }}</p>
                    @enderror
                </div>
                <div class="py-3">
                    <input wire:model="email" class="w-full px-5 py-3 border-none focus:ring-uw-gray leading-loose tracking-wider" type="text"
                           placeholder="Email" name="email" value="{{ old('email') }}"/>
                    @error('email')
                    <p class="text-red-800 mt-1 ml-5">{{ $message }}</p>
                    @enderror
                </div>
                <div class="py-3">
                    <textarea wire:model.defer="message" row="4" class="w-full h-40 px-5 py-3 border-none focus:ring-uw-gray leading-loose tracking-wider"
                              name="comment" placeholder="Your message">{{ old('comment') }}</textarea>
                    @error('message')
                    <p class="text-red-800 mt-1 ml-5">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-row">
            <button class="w-36 h-10 text-md bg-black hover:bg-uw-pink text-uw-pink hover:bg-uw-gray"
                    type="submit">
                <span class="leading-loose tracking-wider">Send</span>
            </button>

            </div>
        </div>
    </form>
</div>
