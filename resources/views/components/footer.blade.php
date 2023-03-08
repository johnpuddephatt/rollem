<div class="relative overflow-hidden bg-black py-36">
    <div class="container text-white">
        <p class="mx-auto max-w-lg text-center text-sm text-gray lg:mx-0 lg:text-left">{{ $settings['mission'] }}</p>

        <div class="mt-12 flex flex-col items-center gap-2 lg:flex-row">
            <a class="mr-6 text-xl font-bold lg:text-3xl"
                href="mailto:{{ $settings['contact_email'] }}">{{ $settings['company_email'] }}</a>
            <div class="flex flex-row gap-2">
                @foreach (['facebook', 'twitter', 'youtube', 'instagram', 'linkedin', 'vimeo'] as $account)
                    <x-social-icon :account="$account" />
                @endforeach
            </div>
        </div>
    </div>
    <img class="absolute -top-8 -right-36 w-[50em] opacity-[0.15]"
        src="{{ Storage::disk('local')->url($settings['logo']) }}">

</div>
