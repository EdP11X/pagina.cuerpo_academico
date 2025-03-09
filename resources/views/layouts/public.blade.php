<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - Cuerpo Academico</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init();
    });
</script>
</head>
<body>
    <header class="bg-[#003B5C]/80 backdrop-blur-sm">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1 items-center">
                <a href="#" class="-m-1.5 p-1.5">
                    <img src="{{asset('images/logo.png')}}" alt="Banner" class="h-12 w-auto">
                    <span class="sr-only">Cuerpo Academico</span>
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
                    <span class="sr-only">Open main menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12 flex-1 justify-center">
                @foreach(
                    [   'inicio' => ['Inicio', 'fas fa-home'],
                        'nosotros' => ['Nosotros', 'fas fa-users'],
                        'investigaciones' => ['Investigaciones', 'fas fa-file'],
                        'eventos' => ['Eventos', 'fas fa-bullhorn'],
                        'paginas' => ['Paginas', 'fas fa-paper-plane'],
                        'contacto' => ['Contacto', 'fas fa-envelope']
                    ] as $ruta => [$label, $icon])
                    <a href="{{route($ruta)}}" class="text-sm/6 font-semibold text-white hover:text-gray-200 inline-flex items-center gap-2">
                        <i class="{{$icon}}"></i>
                        {{$label}}
                    </a>
                @endforeach
            </div>
        </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
            </button>
        </div>
        <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                    <a href="{{route('inicio')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Inicio</a>
                    <a href="{{route('nosotros')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Nosotros</a>
                    <a href="{{route('investigaciones')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Investigaciones</a> 
                    <a href="{{route('eventos')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Eventos</a>   
                    <a href="{{route('paginas')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Paginas</a>
                    <a href="{{route('contacto')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Contacto</a>
                </div>
            </div>
        </div>
        </div>
    </div>
    </header>

    <main clas="flex-1 relative overflow-hidden">
        @yield('content')
    </main>
    

<footer class="bg-white rounded-lg shadow-sm m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="https://flowbite.com/" class="hover:underline">Laboratorio Robotica™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="{{route('nosotros')}}" class="hover:underline me-4 md:me-6">About</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
        </li>
        <li>
            <a href="{{route('contacto')}}" class="hover:underline">Contact</a>
        </li>
    </ul>
    </div>
</footer>


</body>
</html>