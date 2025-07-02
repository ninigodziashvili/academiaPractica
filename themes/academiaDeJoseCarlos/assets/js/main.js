
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




/*
// Abrir y cierra contenido de acordeones

function acordeons() {
  const acordeon = document.getElementsByClassName('contenedor');

  for (let i = 0; i < acordeon.length; i++) {
    acordeon[i].addEventListener('click', function () {
      for (let j = 0; j < acordeon.length; j++) {
        if (acordeon[j] !== this) {
          acordeon[j].classList.remove('activa');
        }
      }
      this.classList.toggle('activa');
    });
  }
}

// Fijo de navegador

window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("abajo", window.scrollY > 0);
})

function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

document.addEventListener("DOMContentLoaded", function () {
  var slideIndex = 1;
  showSlides(slideIndex);
});

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}

acordeons();
navSlide();


// dark / light mode

const checkbox = document.getElementById("checkbox")
checkbox.addEventListener("change", () => {
  document.body.classList.toggle("dark")
})


*/