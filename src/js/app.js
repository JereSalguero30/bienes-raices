document.addEventListener('DOMContentLoaded', function(){
    eventListeners();

    darkMode();
});

function darkMode() {
    const prefiereDarkMode = window.matchMedia(('prefers-color-scheme: dark'));

    if(prefiereDarkMode.matches) {
        document.body.classList.add('darkMode');
    }else {
        document.body.classList.remove('darkMode');
    };

    prefiereDarkMode.addEventListener('change', function() {
        if(prefiereDarkMode.matches) {
            document.body.classList.add('darkMode');
        }else {
            document.body.classList.remove('darkMode');
        };
    });

    const botonDakMode = document.querySelector('.dark-mode-botom');

    botonDakMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
    });
};

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);

    //Muestra campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodosContacto));
};

function navegacionResponsive () {
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else{
        navegacion.classList.add('mostrar');
    }
};

function mostrarMetodosContacto(e) {
    const contactoDiv = document.querySelector('#contacto');

    if(e.target.value === 'telefono') {
        contactoDiv.innerHTML = `
            <label for="telefono">Telefono</label>
            <input id="telefono" type="tel" placeholder="Tu telefono" name="contacto[telefono]">
        

            <p>Indique un horario y fecha</p>

            <label for="Fecha">Fecha:</label>
            <input id="Fecha" type="date" name="contacto[fecha]">

            <label for="horario">Horario:</label>
            <input id="horario" type="time" min="09" max="18" name="contacto[hora]">
            `;     
    }else{
        contactoDiv.innerHTML = `
            <label for="email">Correo</label>
            <input id="email" type="email" placeholder="Tu email" name="contacto[email]" required>
        `;
    }
};