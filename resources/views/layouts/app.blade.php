<!DOCTYPE html>
<html class="scroll-smooth antialiased 2xl:text-lg">

<head>

    @production
        @includeWhen(isset($settings['google_analytics']), 'analytics')
    @endproduction

    <title>
        @yield('title', config('app.description')) | {{ config('app.name') }}
    </title>
    <meta name="description" content="@yield('description', config('app.description'))" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:image" content="@yield('image', 'fallback')" />

    <link rel="canonical" href="@yield('canonical', Request::url())" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src='//unpkg.com/alpinejs' defer></script>
    @stack('head')
</head>

<body class="text-[0.875rem] leading-[157.1%] tracking-normal lg:text-[1rem] lg:leading-[162.5%]">
    @yield('templatecontent')
    @stack('footer')
</body>

</html>
