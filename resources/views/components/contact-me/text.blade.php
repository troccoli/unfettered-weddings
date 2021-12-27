<div class="flex flex-col w-full md:w-1/2 space-y-6 px-8 md:pl-24 leading-loose tracking-wider">
    @foreach(trans('contact-me.text', [], $locale ?? 'en') as $line)
    <p>{{ $line }}</p>
    @endforeach
</div>
