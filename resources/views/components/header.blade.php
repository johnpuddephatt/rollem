<header id="main-header" x-data="{ menuOpen: false }"
    class="fixed top-0 left-0 z-40 w-full py-12 text-white max-lg:!translate-y-0 max-lg:!opacity-100">
    <div class="container flex flex-row items-start justify-between">
        <a href="/">
            <img class="h-36 w-36 opacity-90 lg:h-56 lg:w-56" src="{{ Storage::disk('local')->url($settings['logo']) }}">
        </a>

        <button @click="menuOpen = !menuOpen" class="relative z-50 text-lg font-bold lg:hidden">Menu</button>

        <nav :class="!menuOpen && 'max-lg:translate-x-full'"
            class="inset-0 z-40 flex flex-col items-start gap-2 text-lg font-semibold transition max-lg:fixed max-lg:h-screen max-lg:justify-center max-lg:bg-black max-lg:p-8 lg:flex-row">
            @foreach ($primary_menu as $menu_item)
                <div class="group relative">
                    <a class="inline-block rounded py-2 px-6 transition group-hover:bg-white group-hover:bg-opacity-10"
                        href="{{ $menu_item['value'] }}">
                        {{ $menu_item['name'] }}
                    </a>
                    @if (count($menu_item['children']))
                        <div
                            class="ml-4 hidden pt-2 lg:pointer-events-none lg:absolute lg:top-full lg:z-40 lg:ml-0 lg:block lg:translate-y-2 lg:opacity-0 lg:transition lg:group-hover:pointer-events-auto lg:group-hover:translate-y-0 lg:group-hover:opacity-100">
                            <div class="lg:min-w-[12em] lg:divide-y lg:divide-gray lg:overflow-hidden lg:rounded">
                                @foreach ($menu_item['children'] as $child_item)
                                    <a class="block truncate px-6 py-1.5 text-sm text-white transition lg:bg-white lg:bg-opacity-90 lg:text-black lg:hover:bg-gray"
                                        href="{{ $child_item['value'] }}">
                                        {{ $child_item['name'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
            <x-login-link class="mt-2 ml-6" redirect-url="{{ route('nova.pages.dashboard') }}" label="Login" />
        </nav>
    </div>
</header>
