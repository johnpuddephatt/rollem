<div class="relative overflow-hidden bg-black py-36">
    <div class="container text-white">
        <p class="max-w-lg text-sm text-gray">{{ $settings['mission'] }}</p>

        <div class="mt-12 flex flex-row items-center gap-2">
            <a class="mr-6 text-3xl font-bold"
                href="mailto:{{ $settings['contact_email'] }}">{{ $settings['company_email'] }}</a>
            @foreach (['facebook', 'twitter', 'youtube', 'instagram', 'linkedin', 'vimeo'] as $account)
                <x-social-icon :account="$account" />
            @endforeach
        </div>
    </div>
    <img class="absolute -top-8 -right-36 w-[50em] opacity-[0.15]"
        src="{{ Storage::disk('local')->url($settings['logo']) }}">

</div>
