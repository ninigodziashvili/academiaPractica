
// Front-page


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
window.addEventListener('scroll', function () {
  const navbar = document.querySelector('.nav');
  if (window.scrollY > 100) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

// Navegador
const navSlide = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-link");
  const navLinks = document.querySelectorAll(".nav-link li");

  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-link-activated");
    burger.classList.toggle("toggle")
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`
      }
    })
  });
}

console.log("main.js loaded!");


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



<<<<<<< HEAD

 //nav 
//Axel Sanchez
//barra de navegacion 
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.nav');
    if (window.scrollY > 100) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
=======
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


window.addEventListener('scroll', function () {
  const navbar = document.querySelector('.nav');
  if (window.scrollY > 100) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
>>>>>>> d16b03461ebfcf6f0cd0ca3cf22473681aec6c70
});

// Navegador
const navSlide = () => {
<<<<<<< HEAD
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-link");
    const navLinks = document.querySelectorAll(".nav-link li");

    burger.addEventListener("click", () => {
        nav.classList.toggle("nav-link-activated");
        burger.classList.toggle("toggle")
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = "";
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`
            }
        })
    });
}


//galeria de imagenes

    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const cerrarBtn = document.getElementById('cerrar');

  document.querySelectorAll('.galeria2 img').forEach(img => {
        img.addEventListener('click', () => {
            lightbox.style.display = 'flex';
            lightboxImg.src = img.src;
        });
  });

  cerrarBtn.addEventListener('click', () => {
        lightbox.style.display = 'none';
    lightboxImg.src = '';
  });

  lightbox.addEventListener('click', (e) => {
    if (e.target !== lightboxImg && e.target !== cerrarBtn) {
        lightbox.style.display = 'none';
    lightboxImg.src = '';
    }
  });

=======
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-link");
  const navLinks = document.querySelectorAll(".nav-link li");

  burger.
  ("click", () => {
    nav.classList.toggle("nav-link-activated");
    burger.classList.toggle("toggle")
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`
      }
    })
  });
}
>>>>>>> d16b03461ebfcf6f0cd0ca3cf22473681aec6c70
