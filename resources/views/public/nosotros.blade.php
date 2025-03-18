@extends('layouts.public')
@section('titulo', 'Nosotros')
@section('content')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init();
    });
</script>

<div class="bg-[#003B5C]">
    <!-- Hero Section -->
    <div class="relative min-h-[40vh] flex items-center">
        <div class="absolute inset-0">
            <img src="{{asset('images/murales.jpg')}}" alt="" class="w-full h-full object-cover opacity-20">
        </div>
        <div class="container relative mx-auto px-4">
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-4xl font-bold text-white mb-4">¿Quiénes Somos?</h1>
                <p class="text-xl text-gray-200">Formando profesionales en computación desde 1995</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-white py-16">
        <div class="container mx-auto px-4 max-w-5xl">
            <!-- Mission Section -->
            <div class="mb-16" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-2xl font-bold mb-6 text-[#003B5C]">Nuestra Misión</h2>
                <p class="text-gray-700">Formar profesionistas altamente competitivos y comprometidos con la sociedad, que actúen con ética, capaces de resolver problemas reales y desarrollar investigación de acuerdo con las necesidades de crecimiento nacionales e internacionales.</p>
            </div>

            <!-- Vision Section -->
            <div class="mb-35" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-2xl font-bold mb-6 text-[#003B5C]">Nuestra Visión</h2>
                <p class="text-gray-700">Ser líderes en el área de Ciencias de la Computación a nivel nacional, basándonos en la actualización de los programas académicos existentes y la creación de nuevos programas de nivel licenciatura y posgrado, fomentando la vinculación con los sectores público, privado y social. Así mismo, promover los valores éticos y morales de alumnos, profesores y trabajadores en todas las actividades, teniendo al alumno como eje central..</p>
            </div>

            <!-- History Section -->
            <div class="mb-35">
                <h2 class="text-2xl font-bold mb-6 text-[#003B5C]">Nuestra Historia</h2>
                <div class="space-y-8">
                    <div class="border-l-4 border-[#003B5C] pl-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <h3 class="font-bold mb-2">1990 - Fundación</h3>
                        <p class="text-gray-700">Establecimiento de la Facultad de Ciencias de la Computación con el objetivo de formar profesionales en tecnología.</p>
                    </div>
                    <div class="border-l-4 border-[#003B5C] pl-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <h3 class="font-bold mb-2">2000 - Expansión</h3>
                        <p class="text-gray-700">Ampliación de programas académicos y establecimiento de laboratorios de investigación especializados.</p>
                    </div>
                    <div class="border-l-4 border-[#003B5C] pl-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <h3 class="font-bold mb-2">2010 - Innovación</h3>
                        <p class="text-gray-700">Implementación de programas de investigación avanzada y colaboraciones internacionales.</p>
                    </div>
                    <div class="border-l-4 border-[#003B5C] pl-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <h3 class="font-bold mb-2">2020 - Presente</h3>
                        <p class="text-gray-700">Liderazgo en investigación de IA y tecnologías emergentes, formando la próxima generación de innovadores.</p>
                    </div>
                </div>
            </div>

            <!-- Areas Section -->
            <div class="mb-35" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-2xl font-bold mb-6 text-[#003B5C]">Áreas de Investigación</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="border-t-4 border-[#003B5C] pt-4" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                        <h3 class="font-bold mb-2">Inteligencia Artificial</h3>
                        <p class="text-gray-700">Investigación en machine learning, procesamiento de lenguaje natural y sistemas inteligentes.</p>
                    </div>
                    <div class="border-t-4 border-[#003B5C] pt-4" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                        <h3 class="font-bold mb-2">Ciberseguridad</h3>
                        <p class="text-gray-700">Desarrollo de sistemas seguros y protección de infraestructuras críticas.</p>
                    </div>
                    <div class="border-t-4 border-[#003B5C] pt-4" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                        <h3 class="font-bold mb-2">Robotica y Hardware</h3>
                        <p class="text-gray-700">Implementacion de hardware con software para resolucion de problemas tecnologicos.</p>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div>
                <h2 class="text-2xl font-bold mb-15 text-[#003B5C]">Nuestro Cuerpo Académico</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <img src="{{asset('images/doc.jpg')}}" alt="Dr. Rubin Linares" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="font-bold">Dr. Gustavo Trinidad Rubín Linares</h3>
                        <p class="text-gray-600">Director de Investigación</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <img src="{{asset('images/carmen.jpg')}}" alt="Dra. Maria del Carmen" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="font-bold">M. C. María del Carmen Santiago Díaz</h3>
                        <p class="text-gray-600">Coordinadora Académica</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <img src="{{asset('images/claudia.jpg')}}" alt="Dr. Ing. Morraja" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="font-bold">M. C. Ana Claudia Zenteno Vázquez</h3>
                        <p class="text-gray-600">Investigador Principal</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <img src="{{asset('images/judith.jpg')}}" alt="Ing. Eduardo Ponce" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="font-bold">M. C. Judith Pérez Marcial</h3>
                        <p class="text-gray-600">Líder de Innovación</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <img src="{{asset('images/doc.jpg')}}" alt="Dr. Rubin Linares" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="font-bold">Dr. Gustavo Trinidad Rubín Linares</h3>
                        <p class="text-gray-600">Director de Investigación</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <img src="{{asset('images/carmen.jpg')}}" alt="Dra. Maria del Carmen" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="font-bold">M. C. María del Carmen Santiago Díaz</h3>
                        <p class="text-gray-600">Coordinadora Académica</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <img src="{{asset('images/claudia.jpg')}}" alt="Dr. Ing. Morraja" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="font-bold">M. C. Ana Claudia Zenteno Vázquez</h3>
                        <p class="text-gray-600">Investigador Principal</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <img src="{{asset('images/judith.jpg')}}" alt="Ing. Eduardo Ponce" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="font-bold">M. C. Judith Pérez Marcial</h3>
                        <p class="text-gray-600">Líder de Innovación</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <img src="{{asset('images/doc.jpg')}}" alt="Dr. Rubin Linares" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="font-bold">Dr. Gustavo Trinidad Rubín Linares</h3>
                        <p class="text-gray-600">Director de Investigación</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <img src="{{asset('images/carmen.jpg')}}" alt="Dra. Maria del Carmen" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="font-bold">M. C. María del Carmen Santiago Díaz</h3>
                        <p class="text-gray-600">Coordinadora Académica</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <img src="{{asset('images/claudia.jpg')}}" alt="Dr. Ing. Morraja" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="font-bold">M. C. Ana Claudia Zenteno Vázquez</h3>
                        <p class="text-gray-600">Investigador Principal</p>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <img src="{{asset('images/judith.jpg')}}" alt="Ing. Eduardo Ponce" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="font-bold">M. C. Judith Pérez Marcial</h3>
                        <p class="text-gray-600">Líder de Innovación</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection