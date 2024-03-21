<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body
    class="font-sans antialiased   bg-gradient-to-br from-blue-50 via-white to-gray-100 dark:from-zinc-950 dark:via-blue-950  dark:to-zinc-950">
    <x-banner />


    <div class="min-h-screen">



        <!-- Page Heading -->
        <!-- Page Heading -->
        @if (isset($header))
            <header class="">
                <div class="grid grid-cols-1 sm:grid-cols-3  max-w-8xl mx-auto py-4 px-4 sm:px-6 lg:px-8  ">

                    <div>

                    </div>
                    <div class="col-span-1 flex items-center justify-center sm:justify-end">
                        {{ $header }}
                    </div>


                    <div class="col-span-1 flex items-center justify-center sm:justify-center ">


                        <div class="flex justify-center">
                            <button id="toggleThemeButton"
                                class=" flex motion-safe:hover:scale-[2] items-center justify-center p-2 rounded-xl transition duration-300 ease-in-out focus:outline-none
                                          "
                                style=" color: rgb(24, 109, 220);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path
                                        d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </header>
            @livewire('navigation-menu')
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>


</html>
