//nav 
//barra de navegacion 

document.addEventListener('DOMContentLoaded', function () {
  const navbar = document.querySelector('.nav');

  window.addEventListener('scroll', function () {
    if (window.scrollY > 100) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
});


document.addEventListener("DOMContentLoaded", function () {
  const botones = document.querySelectorAll(".boton-leermas");

  botones.forEach(btn => {
    btn.addEventListener("click", function () {
      const mensaje = btn.parentElement;
      const resumen = mensaje.querySelector(".resumen");
      const completo = mensaje.querySelector(".completo");

      if (completo.classList.contains("oculto")) {
        completo.classList.remove("oculto");
        resumen.style.display = "none";
        btn.textContent = "Leer menos";
      } else {
        completo.classList.add("oculto");
        resumen.style.display = "inline";
        btn.textContent = "Leer más";
      }
    });
  });
});

// Preguntas frequentas

        document.addEventListener('DOMContentLoaded', function() {
            const acordeonItems = document.querySelectorAll('.acordeon .contenedor');
  
            acordeonItems.forEach(function(item) {
                const etiqueta = item.querySelector('.etiqueta');
                etiqueta.addEventListener('click', function() {
                    acordeonItems.forEach(function(otherItem) {
                        if (otherItem !== item) {
                            otherItem.classList.remove('activa');
                        }
                    });
                    item.classList.toggle('activa');
                });
            });
        });

 // Burger Menu

  const hamburger = document.getElementById('hamburger');
  const navList = document.getElementById('nav-list');

  hamburger.addEventListener('click', () => {
    navList.classList.toggle('open');
    hamburger.classList.toggle('active');
  });

  // Agenda

window.addEventListener('load', function () {
  setTimeout(function () {
    const loader = document.querySelector('.pespunte-loader');
    if (loader) {
      loader.style.display = 'none';
    }
  }, 20); // 2000 milisegundos = 2 segundos
});

document.querySelectorAll('.escuelas-lista li').forEach(item => {
  item.addEventListener('click', () => {
    const escuela = item.getAttribute('data-escuela');
    const wrapper = document.querySelector(`.pin-wrapper.${escuela}`);

    if (wrapper.classList.contains('activo')) {
      // Si ya está activo, lo desactivamos
      wrapper.classList.remove('activo');
    } else {
      // Si no está activo, quitamos los activos y activamos este
      document.querySelectorAll('.pin-wrapper').forEach(w => {
        w.classList.remove('activo');
      });
      wrapper.classList.add('activo');
    }
  });
});



/* pestañas moulage */


document.querySelectorAll('.bloque-plegable-moulage').forEach(boton => {
  boton.addEventListener('click', () => {
    const bloqueActual = boton.closest('.bloque-plegable-moulage');
    bloqueActual.classList.toggle('abierto');
  });
});


/* pestañas corset */


document.querySelectorAll('.bloque-plegable-corset').forEach(boton => {
  boton.addEventListener('click', () => {
    const bloqueActual = boton.closest('.bloque-plegable-corset');
    bloqueActual.classList.toggle('abierto');
  });
});