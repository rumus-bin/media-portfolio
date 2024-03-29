<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')



    {{--    @vite('resources/libs/gsap/gsap.min.js')--}}
    {{--    @vite('resources/libs/gsap/ScrollSmoother.min.js')--}}
    {{--    @vite('resources/libs/gsap/ScrollTrigger.min.js')--}}

</head>
<body class="antialiased">
{{--    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">--}}
{{--        @if (Route::has('login'))--}}
{{--            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                @auth--}}
{{--                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
{{--                @else--}}
{{--                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                    @if (Route::has('register'))--}}
{{--                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                    @endif--}}
{{--                @endauth--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    </div>--}}

<div id="home"></div>
@vite('resources/js/app.js')
<script src="/libs/gsap/gsap.min.js" defer></script>
<script src="/libs/gsap/ScrollSmoother.min.js" defer></script>
<script src="/libs/gsap/ScrollTrigger.min.js" defer></script>
<script src="/js/app.js" defer></script>
</body>
</html>
