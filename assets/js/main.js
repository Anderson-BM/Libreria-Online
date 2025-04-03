// Esperar a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
    console.log('Librería Online - JavaScript cargado correctamente');
    
    // Inicializar todos los tooltips de Bootstrap
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Validación del formulario de contacto
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            let isValid = true;
            
            // Validar nombre
            const nombre = document.getElementById('nombre');
            if (nombre.value.trim() === '') {
                showError(nombre, 'Por favor, introduce tu nombre');
                isValid = false;
            } else {
                removeError(nombre);
            }
            
            // Validar correo electrónico
            const correo = document.getElementById('correo');
            if (!isValidEmail(correo.value)) {
                showError(correo, 'Por favor, introduce un correo electrónico válido');
                isValid = false;
            } else {
                removeError(correo);
            }
            
            // Validar asunto
            const asunto = document.getElementById('asunto');
            if (asunto.value.trim() === '') {
                showError(asunto, 'Por favor, introduce un asunto');
                isValid = false;
            } else {
                removeError(asunto);
            }
            
            // Validar comentario
            const comentario = document.getElementById('comentario');
            if (comentario.value.trim() === '') {
                showError(comentario, 'Por favor, introduce tu mensaje');
                isValid = false;
            } else {
                removeError(comentario);
            }
            
            // Si no es válido, prevenir el envío del formulario
            if (!isValid) {
                event.preventDefault();
            }
        });
    }
    
    // Función para comprobar si un email es válido
    function isValidEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }
    
    // Función para mostrar error en un campo
    function showError(input, message) {
        const formGroup = input.closest('.mb-3');
        input.classList.add('is-invalid');
        
        // Si ya existe un mensaje de error, eliminarlo
        if (formGroup.querySelector('.invalid-feedback')) {
            formGroup.querySelector('.invalid-feedback').remove();
        }
        
        // Crear y añadir el nuevo mensaje de error
        const errorDiv = document.createElement('div');
        errorDiv.className = 'invalid-feedback';
        errorDiv.innerText = message;
        formGroup.appendChild(errorDiv);
    }
    
    // Función para eliminar error de un campo
    function removeError(input) {
        input.classList.remove('is-invalid');
        const formGroup = input.closest('.mb-3');
        const errorDiv = formGroup.querySelector('.invalid-feedback');
        if (errorDiv) {
            errorDiv.remove();
        }
    }
    
    // Animación suave para los enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
});

// AQUI ESTA LA SECCION DE EL SLAY GIRATORIO
const container = document.querySelector('.carousel-container');
const images = document.querySelectorAll('.carousel img');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
let index = 0;

function updateCarousel() {
    container.style.transform = `translateX(${-index * 100}%)`;
}

next.addEventListener('click', () => {
    index = (index + 1) % images.length;
    updateCarousel();
});

prev.addEventListener('click', () => {
    index = (index - 1 + images.length) % images.length;
    updateCarousel();
});

setInterval(() => {
    index = (index + 1) % images.length;
    updateCarousel();
}, 3000);