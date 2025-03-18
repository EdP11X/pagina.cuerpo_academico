@extends('layouts.public')
@section('titulo', 'Paginas')
@section('content')

<div class="bg-[#003B5C]">
    <!-- Hero Section -->
    <div class="relative min-h-[40vh] flex items-center">
        <div class="absolute inset-0 bg-[#003B5C]/90"></div>
        <div class="container relative mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-8/12 px-4 ml-auto mr-auto text-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="text-white">
                        <h1 class="text-4xl font-bold leading-tight mb-4">Recursos y Documentación</h1>
                        <p class="text-lg mb-8">Accede a nuestra biblioteca digital de recursos académicos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-white py-12">
        <div class="container mx-auto px-4">
            <!-- Resources Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="200">
                <!-- Resource Card 1 -->
                <div class="border border-gray-200 rounded p-6 hover:border-[#003B5C] transition-colors hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute inset-0">
                        <img src="{{asset('images/murales.jpg')}}" alt="" class="w-full h-full object-cover opacity-20">
                    </div>
                    <div class="text-[#003B5C] mb-4">
                        <i class="fas fa-file-pdf text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">CONACIC</h3>
                    <p class="text-gray-600 mb-4 text-sm">El escenario donde la innovación en Ciencias Computacionales cobra vida..</p>
                    <a href="https://conacic.siycise.org/" class="text-[#003B5C] hover:text-[#002B44] text-sm font-medium">Ver más →</a>
                </div>

                <!-- Resource Card 2 -->
                <div class="border border-gray-200 rounded p-6 hover:border-[#003B5C] transition-colors hover:scale-105" data-aos="fade-up" data-aos-delay="400">
                    <div class="absolute inset-0">
                        <img src="{{asset('images/murales.jpg')}}" alt="" class="w-full h-full object-cover opacity-20">
                    </div>
                    <div class="text-[#003B5C] mb-4">
                        <i class="fas fa-book text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Academicos FCC</h3>
                    <p class="text-gray-600 mb-4 text-sm">Todos los profesores e investigadores de tiempo completo de la FCC.</p>
                    <a href="https://www.cs.buap.mx/CuerposAcademicos.php" class="text-[#003B5C] hover:text-[#002B44] text-sm font-medium">Ver más →</a>
                </div>

                <!-- Resource Card 3 -->
                <div class="border border-gray-200 rounded p-6 hover:border-[#003B5C] transition-colors hover:scale-105" data-aos="fade-up" data-aos-delay="500">
                    <div class="absolute inset-0">
                        <img src="{{asset('images/murales.jpg')}}" alt="" class="w-full h-full object-cover opacity-20">
                    </div>
                    <div class="text-[#003B5C] mb-4">
                        <i class="fas fa-video text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">FCC</h3>
                    <p class="text-gray-600 mb-4 text-sm">Videos educativos y presentaciones de conferencias.</p>
                    <a href="https://www.cs.buap.mx/" class="text-[#003B5C] hover:text-[#002B44] text-sm font-medium">Ver más →</a>
                </div>
                                
                <!-- Resource Card 4 -->
                <div class="border border-gray-200 rounded p-6 hover:border-[#003B5C] transition-colors hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute inset-0">
                        <img src="{{asset('images/murales.jpg')}}" alt="" class="w-full h-full object-cover opacity-20">
                    </div>
                    <div class="text-[#003B5C] mb-4">
                        <i class="fas fa-file-pdf text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">CONACIC</h3>
                    <p class="text-gray-600 mb-4 text-sm">El escenario donde la innovación en Ciencias Computacionales cobra vida..</p>
                    <a href="https://conacic.siycise.org/" class="text-[#003B5C] hover:text-[#002B44] text-sm font-medium">Ver más →</a>
                </div>

                <!-- Resource Card 5 -->
                <div class="border border-gray-200 rounded p-6 hover:border-[#003B5C] transition-colors hover:scale-105" data-aos="fade-up" data-aos-delay="400">
                    <div class="absolute inset-0">
                        <img src="{{asset('images/murales.jpg')}}" alt="" class="w-full h-full object-cover opacity-20">
                    </div>
                    <div class="text-[#003B5C] mb-4">
                        <i class="fas fa-book text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Academicos FCC</h3>
                    <p class="text-gray-600 mb-4 text-sm">Todos los profesores e investigadores de tiempo completo de la FCC.</p>
                    <a href="https://www.cs.buap.mx/CuerposAcademicos.php" class="text-[#003B5C] hover:text-[#002B44] text-sm font-medium">Ver más →</a>
                </div>

                <!-- Resource Card 6 -->
                <div class="border border-gray-200 rounded p-6 hover:border-[#003B5C] transition-colors hover:scale-105" data-aos="fade-up" data-aos-delay="500">
                    <div class="absolute inset-0">
                        <img src="{{asset('images/murales.jpg')}}" alt="" class="w-full h-full object-cover opacity-20">
                    </div>
                    <div class="text-[#003B5C] mb-4">
                        <i class="fas fa-video text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">FCC</h3>
                    <p class="text-gray-600 mb-4 text-sm">Videos educativos y presentaciones de conferencias.</p>
                    <a href="https://www.cs.buap.mx/" class="text-[#003B5C] hover:text-[#002B44] text-sm font-medium">Ver más →</a>
                </div>
            </div>

            <!-- Latest Documents Section -->
            <div class="mt-16" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-2xl font-semibold mb-6 text-center text-[#003B5C]">Documentos Recientes</h2>
                <div class="space-y-3">
                    <!-- Document Item 1 -->
                    <div class="border border-gray-200 rounded p-4 flex items-center justify-between hover:border-[#003B5C] transition-colors" data-aos="fade-left" data-aos-delay="300">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-file-alt text-[#003B5C]"></i>
                            <div>
                                    <h3 class="font-medium">Guía de Investigación 2024</h3>
                                    <p class="text-sm text-gray-500">Actualizado: Marzo 15, 2024</p>
                            </div>
                        </div>
                        <a href="chrome-extension://efaidnbmnnnibpcajpcglclefindmkaj/https://conacic.siycise.org/docs/LIBRO%201%202024%20HORIZONTES_GRL_MCSD_GRL-%204.pdf" class="text-[#003B5C] hover:text-[#002B44]"><i class="fas fa-download"></i></a>
                    </div>

                    <!-- Document Item 2 -->
                    <div class="border border-gray-200 rounded p-4 flex items-center justify-between hover:border-[#003B5C] transition-colors" data-aos="fade-left" data-aos-delay="400">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-file-alt text-[#003B5C]"></i>
                            <div>
                                <h3 class="font-medium">Manual de Procedimientos</h3>
                                <p class="text-sm text-gray-500">Actualizado: Marzo 10, 2024</p>
                            </div>
                        </div>
                        <a href="chrome-extension://efaidnbmnnnibpcajpcglclefindmkaj/https://conacic.siycise.org/docs/LIBRO%202%202024%20Avances%20en%20Computacio%CC%81n-%20%20%20Perspectivas%20Acade%CC%81micas%20y%20de%20Investigacio%CC%81n%20en%20Inteligencia%20Artificial,%20Ciencia%20de%20Datos%20y%20Seguridad_2.pdf" class="text-[#003B5C] hover:text-[#002B44]"><i class="fas fa-download"></i></a>
                    </div>

                    <!-- Document Item 3 -->
                    <div class="border border-gray-200 rounded p-4 flex items-center justify-between hover:border-[#003B5C] transition-colors" data-aos="fade-left" data-aos-delay="500">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-file-alt text-[#003B5C]"></i>
                            <div>
                                <h3 class="font-medium">Calendario Académico</h3>
                                <p class="text-sm text-gray-500">Actualizado: Marzo 5, 2024</p>
                            </div>
                        </div>
                        <a href="chrome-extension://efaidnbmnnnibpcajpcglclefindmkaj/https://conacic.siycise.org/docs/LIBRO%202%202024%20Avances%20en%20Computacio%CC%81n-%20%20%20Perspectivas%20Acade%CC%81micas%20y%20de%20Investigacio%CC%81n%20en%20Inteligencia%20Artificial,%20Ciencia%20de%20Datos%20y%20Seguridad_2.pdf" class="text-[#003B5C] hover:text-[#002B44]"><i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection