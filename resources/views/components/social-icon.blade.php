@props(['show_account_name' => false, 'account'])

@if (isset($settings[$account]))
    <a title="Visit our {{ $account }} account"
        class="{{ $show_account_name ? 'block mb-2 lg:mb-4' : 'inline-block' }} !font-bold !no-underline" target="_blank"
        href="{{ $settings[$account] }}">
        @svg($account, 'h-10 w-10 text-white border-gray-medium hover:shadow hover:shadow-white rounded-full inline-block border bg-black p-2.5')
        @if ($show_account_name)
            {{ ucfirst($account) }}
        @endif
    </a>
@endif
