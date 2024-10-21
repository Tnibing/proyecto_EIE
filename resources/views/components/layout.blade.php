<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gradient-to-r from-blue-50 to-gray-50">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./pet-friendly_7608786.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">


    <title>Laravel</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-center">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8"
                                src="./pet-friendly_7608786.png"
                                alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-bar href="/" :active="request()->is('/')">Inicio</x-nav-bar>
                                <x-nav-bar href="/mascotas" :active="request()->is('mascotas')">Mascotas</x-nav-bar>
                                <x-nav-bar href="/cuidadores" :active="request()->is('cuidadores')">Cuidadores</x-nav-bar>
                                <x-nav-bar href="/patrocinios" :active="request()->is('patrocinios')">Patrocinios</x-nav-bar>
                                <x-nav-bar href="/aboutUs" :active="request()->is('aboutUs')">Sobre nosotros</x-nav-bar>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <x-mobile-nav-bar href="/" :active="request()->is('/')">Inicio</x-mobile-nav-bar>
                    <x-mobile-nav-bar href="/mascotas" :active="request()->is('mascotas')">Mascotas</x-mobile-nav-bar>
                    <x-mobile-nav-bar href="/cuidadores" :active="request()->is('cuidadores')">Cuidadores</x-mobile-nav-bar>
                    <x-mobile-nav-bar href="/patrocinios" :active="request()->is('patrocinios')">Patrocinios</x-mobile-nav-bar>
                    <x-mobile-nav-bar href="/aboutUs" :active="request()->is('aboutUs')">Sobre nosotros</x-mobile-nav-bar>
                </div>
            </div>
        </nav>

        <main>

            @if (request()->is('/'))
                <div style="background-image: url('./marek-szturc-BiSFSSQtAmg-unsplash.jpg'); 
                background-size: cover; 
                background-position: center; 
                height: 700px;">
                    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                        <x-hero-section>

                        </x-hero-section>
                    </div>
                </div>
                <x-section>
                </x-section>

                <x-section-2>
                </x-section-2>
            @endif

            @if (request()->is('aboutUs'))
                <x-about-us>
                </x-about-us>
            @endif

            @if (request()->is('patrocinios'))
                <x-patrocinios>
                </x-patrocinios>
            @endif
            
        </main>
    </div>
    <x-footer>
    </x-footer>
</body>

</html>
