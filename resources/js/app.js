import './bootstrap';
import Aos from 'aos';
import 'aos/dist/aos.css';
Aos.init({
    duration: 1000,
    delay: 200,
    once: false,
});

import Typed from 'typed.js';

document.addEventListener('DOMContentLoaded', function () {
    const typedTitle = new Typed('#typed-title', {
        strings: ['Cuerpo Academico', 'Facultad de Ciencias de la Computación'],
        typeSpeed: 100,
        backSpeed: 40,
        showCursor: false,
        loop: true,
    });
});
