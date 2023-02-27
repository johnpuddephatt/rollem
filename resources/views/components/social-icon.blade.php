@if (isset($settings[$account]))
    <a title="Visit our {{ $account }} account"
        class="bg-black text-white border-gray-medium hover:shadow-white inline-block rounded-full border p-2.5 hover:shadow"
        target="_blank" href="{{ $settings[$account] }}">@svg($account, 'h-4 w-4')</a>
@endif
