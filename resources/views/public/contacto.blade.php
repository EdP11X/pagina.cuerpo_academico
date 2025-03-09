@extends('layouts.public')
@section('titulo', 'Contacto')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init();
    });
</script>

<div class="min-h-screen bg-[#003B5C]/5 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-16" data-aos="fade-down" data-aos-duration="1000">
            <h1 class="text-4xl font-extrabold text-[#003B5C] sm:text-5xl md:text-6xl">
                <span class="block xl:inline">Contacta con Nosotros</span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-base text-gray-600 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                Conecta con el Cuerpo Académico de la Facultad de Ciencias de la Computación
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Contact Form Section -->
            <div class="bg-white rounded-2xl shadow-xl p-8" data-aos="fade-right" data-aos-duration="1000">
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre Completo</label>
                        <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#003B5C] focus:ring-[#003B5C]">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                        <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#003B5C] focus:ring-[#003B5C]">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Asunto</label>
                        <input type="text" name="subject" id="subject" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#003B5C] focus:ring-[#003B5C]">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#003B5C] focus:ring-[#003B5C]"></textarea>
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#003B5C] hover:bg-[#002B44] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#003B5C] transition duration-150 ease-in-out">
                            Enviar Mensaje
                        </button>
                    </div>
                </form>
            </div>

            <!-- Information Section -->
            <div class="space-y-8">
                <!-- Faculty Info -->
                <div class="backdrop-blur-lg bg-white/30 rounded-2xl shadow-xl p-8 border border-white/20" data-aos="fade-left" data-aos-duration="1000">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Información de la Facultad de Ciencias de la Computacion</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Facultad de Ciencias de la Computación</p>
                                <p class="text-sm text-gray-500">Av. San Claudio y 14 sur, Ciudad Universitaria</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Correo Electrónico</p>
                                <p class="text-sm text-gray-500">contacto@fcc.buap.mx</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Teléfono</p>
                                <p class="text-sm text-gray-500">+52 (222) 229-5500 Ext. 7200</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Schedule Info -->
                <div class="backdrop-blur-lg bg-white/30 rounded-2xl shadow-xl p-8 border border-white/20" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Horario de Atención</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-500">Lunes - Viernes</span>
                            <span class="text-sm text-gray-900">8:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-500">Sábado</span>
                            <span class="text-sm text-gray-900">9:00 AM - 1:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-500">Domingo</span>
                            <span class="text-sm text-gray-900">Cerrado</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="mt-12 backdrop-blur-lg bg-white/30 rounded-2xl shadow-xl p-8 border border-white/20" data-aos="fade-up" data-aos-duration="1000">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Ubicación</h3>
            <div class="aspect-w-16 aspect-h-9">
                <iframe class="w-full h-96 rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4628017277924!2d-98.2046873!3d19.0048115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc0d719f3af8f%3A0xa2900a3d52406e69!2sFacultad%20de%20Ciencias%20de%20la%20Computaci%C3%B3n%20BUAP!5e0!3m2!1ses-419!2smx!4v1680000000000!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection