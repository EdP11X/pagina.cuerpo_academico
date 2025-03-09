@extends('layouts.public')
@section('titulo', 'Investigaciones')
@section('content')

<!-- Hero Section -->
<div class="bg-[#003B5C] py-16" data-aos="fade-down">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">Investigaciones y Proyectos</h1>
        <p class="text-lg text-gray-300 max-w-3xl mx-auto">Descubre nuestras líneas de investigación y contribuciones al campo de la computación</p>
    </div>
</div>

<!-- Research Categories Section -->
<div class="bg-white py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Research Category 1 -->
            <a href="https://www.buap.mx/node/67">
            <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 hover:border-[#003B5C] transition-colors" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-xl font-semibold text-[#003B5C] mb-4">Inteligencia Artificial y Robótica</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>• Sistemas Autónomos Inteligentes</li>
                    <li>• Visión por Computadora</li>
                    <li>• Aprendizaje Profundo</li>
                </ul>
            </div>
            </a>
            <!-- Research Category 2 -->
            <a href="https://www.buap.mx/node/67">
            <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 hover:border-[#003B5C] transition-colors" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-semibold text-[#003B5C] mb-4">Sistemas Embebidos</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>• Arquitectura de Computadoras</li>
                    <li>• Sistemas en Tiempo Real</li>
                    <li>• IoT y Microcontroladores</li>
                </ul>
            </div>
            </a>
            <!-- Research Category 3 -->
            <a href="https://www.buap.mx/node/67">
            <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 hover:border-[#003B5C] transition-colors" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-xl font-semibold text-[#003B5C] mb-4">Programación de Bajo Nivel</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>• Desarrollo de Sistemas Operativos</li>
                    <li>• Optimización de Código</li>
                    <li>• Programación de Drivers</li>
                </ul>
            </div>
            </a>
        </div>
    </div>
</div>

<!-- Current Research Projects Section -->
<div class="bg-gray-50 py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-[#003B5C] mb-8 text-center" data-aos="fade-up">Proyectos de Investigación Actuales</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Project 1 -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200" data-aos="fade-right">
                <h3 class="text-xl font-semibold text-[#003B5C] mb-2">Desarrollo de Sistemas Robóticos Autónomos</h3>
                <p class="text-sm text-gray-500 mb-4">Dr. Trinidad Rubin Linares, Dra. María del Carmen Díaz</p>
                <p class="text-gray-600 mb-4">Investigación sobre el desarrollo de sistemas robóticos autónomos utilizando técnicas avanzadas de inteligencia artificial y aprendizaje profundo.</p>
                <div class="flex gap-2 text-sm">
                    <span class="bg-[#003B5C]/10 text-[#003B5C] px-3 py-1 rounded-full">Robótica</span>
                    <span class="bg-[#003B5C]/10 text-[#003B5C] px-3 py-1 rounded-full">IA</span>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200" data-aos="fade-left">
                <h3 class="text-xl font-semibold text-[#003B5C] mb-2">Optimización de Sistemas Embebidos</h3>
                <p class="text-sm text-gray-500 mb-4">Ing. Morraja, Dr. Trinidad Rubin Linares</p>
                <p class="text-gray-600 mb-4">Estudio sobre técnicas de optimización para sistemas embebidos en tiempo real, enfocado en aplicaciones IoT y control industrial.</p>
                <div class="flex gap-2 text-sm">
                    <span class="bg-[#003B5C]/10 text-[#003B5C] px-3 py-1 rounded-full">Sistemas Embebidos</span>
                    <span class="bg-[#003B5C]/10 text-[#003B5C] px-3 py-1 rounded-full">IoT</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Publications Section -->
<div class="bg-white py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-[#003B5C] mb-8 text-center" data-aos="fade-up">Publicaciones Recientes</h2>
        <div class="space-y-6">
            <!-- Publication 1 -->
            <a href="https://www.buap.mx/node/67">
            <div class="p-6 border border-gray-200 rounded-lg hover:border-[#003B5C] transition-colors" data-aos="fade-up" data-aos-delay="100">
                <h3 class="font-semibold text-[#003B5C] mb-2">En la BUAP se diseñan robots con utilidad social</h3>
                <p class="text-sm text-gray-500 mb-3">Publicado en: BUAP, 2023</p>
                <p class="text-gray-600">Artículo sobre el labor académico realizado en el Laboratorio de Robótica Móvil BUAP en la Facultad e Ciencias de la Computación.</p>
            </div>
            </a>
            <!-- Publication 2 -->
            <a href="https://www.buap.mx/node/67">
            <div class="p-6 border border-gray-200 rounded-lg hover:border-[#003B5C] transition-colors" data-aos="fade-up" data-aos-delay="200">
                <h3 class="font-semibold text-[#003B5C] mb-2">En la BUAP se diseñan robots con utilidad social</h3>
                <p class="text-sm text-gray-500 mb-3">Publicado en: BUAP, 2023</p>
                <p class="text-gray-600">Artículo sobre el labor académico realizado en el Laboratorio de Robótica Móvil BUAP en la Facultad e Ciencias de la Computación.</p>
            </div>
            </a>
        </div>
    </div>
</div>

<!-- Contact CTA Section -->
<div class="bg-[#003B5C] py-12 text-center" data-aos="fade-up">
    <h2 class="text-2xl font-bold text-white mb-4">Colabora con Nosotros</h2>
    <p class="text-gray-300 mb-8">¿Interesado en nuestras investigaciones? Contáctanos para explorar oportunidades de colaboración.</p>
    <div class="flex justify-center gap-4">
        <a href="{{route('contacto')}}" class="bg-white px-6 py-2 text-sm font-semibold text-[#003B5C]">Contactar</a>
        <a href="{{route('nosotros')}}" class="text-white text-sm font-semibold">Conocer más →</a>
    </div>
</div>

@endsection