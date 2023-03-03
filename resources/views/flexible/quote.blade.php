<blockquote
    class="bg-{{ $layout->background_colour ?? 'teal' }} flex flex-col justify-center py-32 text-center lg:py-48 lg:text-left">
    <div class="container">

        <p class="text-{{ $layout->quote_colour ?? 'white' }} max-w-7xl text-5xl font-bold italic lg:text-8xl"
            style="text-indent: -1ch">
            “ <span class="text-{{ $layout->text_colour ?? 'lilac' }}">{{ $layout->quote }}</span>&nbsp;”
        </p>
        @if ($layout->source)
            <cite class="mt-8 block text-3xl font-bold not-italic text-white">{{ $layout->source }}</cite>
        @endif
    </div>
</blockquote>
