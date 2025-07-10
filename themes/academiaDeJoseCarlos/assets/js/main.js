
//mensajes de texto carrusel

document.addEventListener('DOMContentLoaded', () => {
  const carrusel = document.getElementById('carrusel');
  const cartas = document.querySelectorAll('.carta');
  const indicadores = document.querySelectorAll('.indicador');

  let index = 0;
  const total = cartas.length;

  function actualizarCarrusel() {
    const anchoCarta = cartas[0].offsetWidth + parseInt(getComputedStyle(cartas[0]).marginRight);
    carrusel.scrollTo({
      left: index * anchoCarta,
      behavior: 'smooth'
    });

    indicadores.forEach((dot, i) => {
      dot.classList.toggle('activo', i === index);
    });
  }

  function avanzar() {
    index = (index + 1) % total;
    actualizarCarrusel();
  }

  let intervalo = setInterval(avanzar, 3000);

  indicadores.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      index = i;
      actualizarCarrusel();
      clearInterval(intervalo);
      intervalo = setInterval(avanzar, 3000);
    });
  });
});


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
      const estaAbierto = bloqueActual.classList.contains('abierto');

      // Cerrar todos los bloques
      document.querySelectorAll('.bloque-plegable-moulage').forEach(bloque => {
        bloque.classList.remove('abierto');
      });

      // Si no estaba abierto antes, abrirlo ahora
      if (!estaAbierto) {
        bloqueActual.classList.add('abierto');
      }
    });
  });

/* pestañas corset */

  document.querySelectorAll('.bloque-plegable-corset').forEach(boton => {
    boton.addEventListener('click', () => {
      const bloqueActual = boton.closest('.bloque-plegable-corset');
      const estaAbierto = bloqueActual.classList.contains('abierto');

      // Cerrar todos los bloques
      document.querySelectorAll('.bloque-plegable-corset').forEach(bloque => {
        bloque.classList.remove('abierto');
      });

      // Si no estaba abierto antes, abrirlo ahora
      if (!estaAbierto) {
        bloqueActual.classList.add('abierto');
      }
    });
  });


//mensajes de texto carrusel

document.addEventListener('DOMContentLoaded', () => {
  const carrusel = document.getElementById('carrusel');
  const cartas = document.querySelectorAll('.carta');
  const indicadores = document.querySelectorAll('.indicador');

  let index = 0;
  const total = cartas.length;

  function actualizarCarrusel() {
    const anchoCarta = cartas[0].offsetWidth + parseInt(getComputedStyle(cartas[0]).marginRight);
    carrusel.scrollTo({
      left: index * anchoCarta,
      behavior: 'smooth'
    });

    indicadores.forEach((dot, i) => {
      dot.classList.toggle('activo', i === index);
    });
  }

  function avanzar() {
    index = (index + 1) % total;
    actualizarCarrusel();
  }

  let intervalo = setInterval(avanzar, 3000);

  indicadores.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      index = i;
      actualizarCarrusel();
      clearInterval(intervalo);
      intervalo = setInterval(avanzar, 3000);
    });
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
