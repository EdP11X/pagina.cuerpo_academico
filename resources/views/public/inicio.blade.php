@extends('layouts.public')
@section('titulo', 'Inicio')
@section('content')

<!-- Hero Section -->
<div class="bg-[#003B5C] py-29" data-aos="fade-down">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-4" data-aos="fade-up" data-aos-delay="200">Cuerpo Académico de Computación y Sistemas</h1>
        <p class="text-lg text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="400">Facultad de Ciencias de la Computación BUAP</p>
        <div class="mt-8 flex justify-center gap-4" data-aos="fade-up" data-aos-delay="600">
            <a href="https://www.cs.buap.mx/OfertaAcademica.php" class="bg-white px-6 py-2 text-sm font-semibold text-[#003B5C] hover:bg-gray hover:scale-105">Explorar Programas</a>
            <a href="{{route('nosotros')}}" class="text-white text-sm font-semibold hover:scale-105">Conocer más →</a>
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="bg-white py-12 border-b">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="p-9 text-center hover:scale-150" data-aos="fade-up" data-aos-delay="100">
                <h3 class="font-semibold text-[#003B5C]">Investigadores</h3>
                <p class="text-2xl font-bold text-gray-900">25+</p>
            </div>
            <div class="p-9 text-center hover:scale-150" data-aos="fade-up" data-aos-delay="200">
                <h3 class="font-semibold text-[#003B5C]">Publicaciones</h3>
                <p class="text-2xl font-bold text-gray-900">100+</p>
            </div>
            <div class="p-9 text-center hover:scale-150" data-aos="fade-up" data-aos-delay="300">
                <h3 class="font-semibold text-[#003B5C]">Proyectos</h3>
                <p class="text-2xl font-bold text-gray-900">30+</p>
            </div>
            <div class="p-9 text-center hover:scale-150" data-aos="fade-up" data-aos-delay="400">
                <h3 class="font-semibold text-[#003B5C]">Colaboraciones</h3>
                <p class="text-2xl font-bold text-gray-900">15+</p>
            </div>
        </div>
    </div>
</div>

<!-- Faculty Section -->
<div class="bg-white py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-2xl font-bold text-[#003B5C] mb-4">Académicos Destacados</h2>
            <p class="text-gray-600">Conoce a nuestros investigadores líderes.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 border hover:shadow-lg hover:scale-115" data-aos="flip-left" data-aos-delay="100">
                <h3 class="font-semibold text-[#003B5C]">Dr. Gustavo Trinidad Rubín Linares</h3>
                <p class="text-sm text-gray-600 mb-2">Líder del Cuerpo Académico</p>
                <p class="text-gray-600">Especialista en Hardware y Robótica con más de 15 años de experiencia.</p>
            </div>
            <div class="p-6 border hover:shadow-lg hover:scale-115" data-aos="flip-left" data-aos-delay="200">
                <h3 class="font-semibold text-[#003B5C]">M. C. María del Carmen Santiago Díaz</h3>
                <p class="text-sm text-gray-600 mb-2">Investigadora Principal</p>
                <p class="text-gray-600">Líder en Programación de bajo nivel y Robótica.</p>
            </div>
            <div class="p-6 border hover:shadow-lg hover:scale-115" data-aos="flip-left" data-aos-delay="300">
                <h3 class="font-semibold text-[#003B5C]">M. C. Ana Claudia Zenteno Vázquez</h3>
                <p class="text-sm text-gray-600 mb-2">Coordinadora de Proyectos</p>
                <p class="text-gray-600">Experta en Hardware, Robótica y Ciberseguridad.</p>
            </div>
        </div>
        <div class="text-center mt-8" data-aos="fade-up" data-aos-delay="400">
            <a href="{{route('nosotros')}}" class="inline-block bg-[#003B5C] text-white px-6 py-2 text-sm font-semibold hover:bg-[#003C9D] hover:scale-105 transition-colors duration-300">Ver más académicos</a>
        </div>
    </div>
</div>

<!-- Research Areas Section -->
<div class="bg-gray-50 py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8"> 
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-2xl font-bold text-[#003B5C] mb-4">Áreas de Investigación</h2>
            <p class="text-gray-600">Nuestro cuerpo académico se especializa en diversas áreas de la computación.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg transition-shadow duration-300 bg-white p-6 rounded-lg shadow-md hover:border hover:scale-95" data-aos="fade-right" data-aos-delay="100">
                <h3 class="font-semibold text-[#003B5C] mb-3">Inteligencia Artificial y Robótica</h3>
                <p class="text-gray-600">Investigación en sistemas autónomos, visión computacional y aprendizaje profundo.</p>
            </div>
            <div class="bg-white p-6 rounded-lg transition-shadow duration-300 bg-white p-6 rounded-lg shadow-md hover:border hover:scale-95" data-aos="fade-up" data-aos-delay="200">
                <h3 class="font-semibold text-[#003B5C] mb-3">Sistemas Embebidos y Hardware</h3>
                <p class="text-gray-600">Desarrollo de sistemas embebidos y arquitectura de computadoras.</p>
            </div>
            <div class="bg-white p-6 rounded-lg transition-shadow duration-300 bg-white p-6 rounded-lg shadow-md hover:border hover:scale-95" data-aos="fade-left" data-aos-delay="300">
                <h3 class="font-semibold text-[#003B5C] mb-3">Programación de Bajo Nivel</h3>
                <p class="text-gray-600">Especialización en lenguajes de bajo nivel y desarrollo de sistemas operativos.</p>
            </div>
        </div>
        <div class="text-center mt-8" data-aos="fade-up" data-aos-delay="400">
            <a href="{{route('nosotros')}}" class="inline-block bg-[#003B5C] text-white px-6 py-2 text-sm font-semibold hover:bg-[#003C9D] hover:scale-105 transition-colors duration-300">Ver más </a>
        </div>
    </div>
</div>

<!-- Image Gallery Section -->
<div class="bg-white py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-2xl font-bold text-[#003B5C] mb-4">Colaboraciones</h2>
            <p class="text-gray-600">Explora nuestras actividades académicas y de investigación.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="https://conacic.siycise.org/">
                <div class="overflow-hidden rounded-lg shadow-lg" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{asset('images/conacic.jpg')}}" alt="Instalaciones" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-110">
                    <div class="p-4 bg-white">
                        <h3 class="font-semibold text-[#003B5C]">CONACIC</h3>
                        <p class="text-sm text-gray-600">Espacios modernos para el aprendizaje</p>
                    </div>
                </div>
            </a>
            <a href="https://www.cs.buap.mx/CuerposAcademicos.php">
                <div class="overflow-hidden rounded-lg shadow-lg" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset('images/fcc.jpg')}}" alt="Docencia" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-110">
                    <div class="p-4 bg-white">
                        <h3 class="font-semibold text-[#003B5C]">Cuerpo Academico FCC</h3>
                        <p class="text-sm text-gray-600">Formación de calidad</p>
                    </div>
                </div>
            </a>
            <a href="https://www.cs.buap.mx/">
                <div class="overflow-hidden rounded-lg shadow-lg" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{asset('images/murales.jpg')}}" alt="Investigación" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-110">
                    <div class="p-4 bg-white">
                        <h3 class="font-semibold text-[#003B5C]">Investigación Innovadora</h3>
                        <p class="text-sm text-gray-600">Desarrollo de nuevas tecnologías</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="text-center mt-8" data-aos="fade-up" data-aos-delay="400">
            <a href="{{route('eventos')}}" class="inline-block bg-[#003B5C] text-white px-6 py-2 text-sm font-semibold hover:bg-[#003C9D] hover:scale-105 transition-colors duration-300">Ver más eventos</a>
        </div>
    </div>
</div>

<!-- News and Updates Section -->
<div class="bg-[#003B5C] py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-2xl font-bold text-white mb-4">Noticias y Actualizaciones</h2>
            <p class="text-gray-400">Mantente al día con nuestros últimos logros y actividades</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:scale-101" data-aos="fade-up" data-aos-delay="100">
                <span class="text-sm text-[#003B5C] font-semibold">15 Marzo 2024</span>
                <h3 class="font-semibold text-gray-900 mt-2">Premio Nacional de Investigación</h3>
                <p class="text-gray-600 mt-2">Nuestro equipo recibió reconocimiento por su investigación en IA.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:scale-101" data-aos="fade-up" data-aos-delay="200">
                <span class="text-sm text-[#003B5C] font-semibold">10 Marzo 2024</span>
                <h3 class="font-semibold text-gray-900 mt-2">Nueva Colaboración Internacional</h3>
                <p class="text-gray-600 mt-2">Iniciamos proyecto conjunto con Universidad de Stanford.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:scale-101" data-aos="fade-up" data-aos-delay="300">
                <span class="text-sm text-[#003B5C] font-semibold">1 Marzo 2024</span>
                <h3 class="font-semibold text-gray-900 mt-2">Publicación Destacada</h3>
                <p class="text-gray-600 mt-2">Artículo publicado en revista internacional de alto impacto.</p>
            </div>
        </div>
    </div>
</div>

<!-- Featured Research Projects -->
<div class="bg-white py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center mb-12 " data-aos="fade-up">
            <h2 class="text-2xl font-bold text-[#003B5C] mb-4">Proyectos Destacados</h2>
            <p class="text-gray-600">Conoce nuestras investigaciones más relevantes</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="border rounded-lg overflow-hidden hover:shadow-lg hover:scale-105" data-aos="fade-right">
                <div class="p-6">
                    <h3 class="font-semibold text-[#003B5C] text-xl mb-3">Sistema de Visión Artificial para Robótica</h3>
                    <p class="text-gray-600 mb-4">Desarrollo de algoritmos avanzados de procesamiento de imágenes para robots autónomos.</p>
                    <div class="flex gap-2">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">IA</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Robótica</span>
                    </div>
                </div>
            </div>
            <div class="border rounded-lg overflow-hidden hover:shadow-lg hover:scale-105" data-aos="fade-left">
                <div class="p-6">
                    <h3 class="font-semibold text-[#003B5C] text-xl mb-3">Optimización de Sistemas Embebidos</h3>
                    <p class="text-gray-600 mb-4">Investigación en técnicas de optimización para sistemas embebidos de tiempo real.</p>
                    <div class="flex gap-2">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Hardware</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Sistemas Embebidos</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-8" data-aos="fade-up" data-aos-delay="400">
            <a href="{{route('investigaciones')}}" class="inline-block bg-[#003B5C] text-white px-6 py-2 text-sm font-semibold hover:bg-[#003C9D] hover:scale-105 transition-colors duration-300">Ver más proyectos</a>
        </div>
    </div>
</div>

<!-- Upcoming Events -->
<div class="bg-gray-50 py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-2xl font-bold text-[#003B5C] mb-4">Próximos Eventos</h2>
            <p class="text-gray-600">Calendario de actividades académicas y fechas importantes</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-sm hover:border hover:shadow-lg hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                <div class="text-[#003B5C] text-xl font-bold mb-2">20</div>
                <div class="text-[#003B5C] font-semibold mb-4">Marzo</div>
                <h3 class="font-semibold text-gray-900">Seminario de Investigación</h3>
                <p class="text-gray-600 text-sm mt-2">Presentación de avances en proyectos de IA</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm hover:border hover:shadow-lg hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                <div class="text-[#003B5C] text-xl font-bold mb-2">25</div>
                <div class="text-[#003B5C] font-semibold mb-4">Marzo</div>
                <h3 class="font-semibold text-gray-900">Taller de Robótica</h3>
                <p class="text-gray-600 text-sm mt-2">Hands-on con robots educativos</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm hover:border hover:shadow-lg hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                <div class="text-[#003B5C] text-xl font-bold mb-2">30</div>
                <div class="text-[#003B5C] font-semibold mb-4">Marzo</div>
                <h3 class="font-semibold text-gray-900">Conferencia Internacional</h3>
                <p class="text-gray-600 text-sm mt-2">Sistemas Embebidos y IoT</p>
            </div>
        </div>
        <div class="text-center mt-8" data-aos="fade-up" data-aos-delay="400">
            <a href="{{route('eventos')}}" class="inline-block bg-[#003B5C] text-white px-6 py-2 text-sm font-semibold hover:bg-[#003C9D] hover:scale-105 transition-colors duration-300">Ver más eventos</a>
        </div>
    </div>
</div>

<!-- Contact CTA Section -->
<div class="bg-[#003B5C] py-12 text-center" data-aos="fade-up">
    <h2 class="text-2xl font-bold text-white mb-4">Únete a Nuestro Equipo</h2>
    <p class="text-gray-300 mb-8">Descubre oportunidades de investigación y desarrollo.</p>
    <div class="flex justify-center gap-4">
        <a href="{{route('contacto')}}" class="bg-white px-6 py-2 text-sm font-semibold text-[#003B5C] hover:scale-105">Contactar</a>
        <a href="{{route('nosotros')}}" class="text-white text-sm font-semibold hover:scale-105">Más información →</a>
    </div>
</div>

@endsection