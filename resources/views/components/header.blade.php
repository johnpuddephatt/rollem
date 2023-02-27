<header id="main-header" x-data="{ menuOpen: false }"
    class="to-transparent fixed top-0 left-0 z-10 w-full bg-gradient-to-b from-[#000000aa] py-12 text-white">
    <div class="container flex flex-row items-start justify-between">
        <a href="/">
            <img class="h-48 w-48 opacity-90 lg:h-56 lg:w-56" src="{{ Storage::disk('local')->url($settings['logo']) }}">
        </a>

        <button @click="menuOpen = !menuOpen" class="relative z-50 text-lg font-bold lg:hidden">Menu</button>

        <nav :class="!menuOpen && 'max-lg:translate-x-full'"
            class="inset-0 flex flex-col items-start gap-12 text-lg font-semibold transition max-lg:absolute max-lg:h-screen max-lg:justify-center max-lg:bg-black max-lg:p-16 lg:flex-row">
            @foreach ($primary_menu as $menu_item)
                <a href="{{ $menu_item['value'] }}">
                    {{ $menu_item['name'] }}
                </a>
            @endforeach
            <x-login-link redirect-url="{{ route('nova.pages.dashboard') }}" label="Login" />
        </nav>
    </div>
</header>
