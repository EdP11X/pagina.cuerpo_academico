@extends('layouts.public')
@section('titulo', 'Eventos')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init();
    });
</script>

<!-- Hero Section -->
<div class="bg-[#003B5C]">
    <div class="relative min-h-[40vh] flex items-center">
        <div class="absolute inset-0 bg-[#003B5C]/90"></div>
        <div class="absolute inset-0">
            <img src="{{asset('images/CC03.jpg')}}" alt="" class="w-full h-full object-cover opacity-20">
        </div>
        <div class="container relative mx-auto px-4">
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-4xl font-bold text-white mb-4">Eventos Académicos</h1>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto">Mantente al día con los eventos y actividades del Cuerpo Académico de Computación y Sistemas</p>
            </div>
        </div>
    </div>
</div>

<!-- Events Section -->
<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Upcoming Events -->
        <div class="mb-16">
            <h2 class="text-2xl font-bold text-[#003B5C] mb-8">Próximos Eventos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Event Card 1 -->
                <a href="https://conacic.siycise.org/program">
                    <div class="border border-gray-200 rounded-lg overflow-hidden hover:border-[#003B5C] transition-colors" data-aos="fade-up" data-aos-delay="100">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-semibold text-[#003B5C]">15 Mar 2024</span>
                                <span class="text-xs bg-[#003B5C]/10 text-[#003B5C] px-3 py-1 rounded-full">Conferencia</span>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Inteligencia Artificial en la Educación</h3>
                            <p class="text-gray-600 mb-4">Conferencia sobre el impacto de la IA en los procesos educativos actuales.</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                <span>Auditorio FCC</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Event Card 2 -->
                <a href="https://conacic.siycise.org/program">
                    <div class="border border-gray-200 rounded-lg overflow-hidden hover:border-[#003B5C] transition-colors" data-aos="fade-up" data-aos-delay="200">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-semibold text-[#003B5C]">20 Mar 2024</span>
                                <span class="text-xs bg-[#003B5C]/10 text-[#003B5C] px-3 py-1 rounded-full">Taller</span>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Desarrollo de Sistemas Embebidos</h3>
                            <p class="text-gray-600 mb-4">Taller práctico sobre programación de microcontroladores y sistemas embebidos.</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                <span>Laboratorio de Hardware</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Event Card 3 -->
                <a href="https://conacic.siycise.org/program">
                    <div class="border border-gray-200 rounded-lg overflow-hidden hover:border-[#003B5C] transition-colors" data-aos="fade-up" data-aos-delay="300">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-semibold text-[#003B5C]">25 Mar 2024</span>
                                <span class="text-xs bg-[#003B5C]/10 text-[#003B5C] px-3 py-1 rounded-full">Seminario</span>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Tendencias en Robótica</h3>
                            <p class="text-gray-600 mb-4">Seminario sobre las últimas tendencias en robótica y automatización.</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                <span>Sala de Conferencias</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Past Events -->
        <div>
            <h2 class="text-2xl font-bold text-[#003B5C] mb-8">Eventos Anteriores</h2>
            <div class="space-y-6">
                <!-- Past Event 1 -->
                <div class="border-l-4 border-[#003B5C] pl-4" data-aos="fade-left" data-aos-duration="800">
                    <div class="text-sm text-gray-500 mb-1">10 Feb 2024</div>
                    <h3 class="text-lg font-semibold mb-2">Simposio de Investigación en Computación</h3>
                    <p class="text-gray-600">Presentación de proyectos de investigación del cuerpo académico.</p>
                </div>

                <!-- Past Event 2 -->
                <div class="border-l-4 border-[#003B5C] pl-4" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="text-sm text-gray-500 mb-1">15 Ene 2024</div>
                    <h3 class="text-lg font-semibold mb-2">Workshop de Programación Avanzada</h3>
                    <p class="text-gray-600">Taller intensivo sobre técnicas avanzadas de programación.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection