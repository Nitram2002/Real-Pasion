// Función para manejar la animación de la página de carga
function animateLoadingPage(callback) {
  gsap.fromTo(
    ".loading-page",
    { opacity: 1 },
    {
      opacity: 0,
      display: "none",
      duration: 1.5,
      delay: 3.5,
      onComplete: callback, // Llama a la función de callback después de la animación
    }
  );

  gsap.fromTo(
    ".logo-name",
    {
      y: 50,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 2,
      delay: 0.5,
    }
  );
}

// Función para iniciar la animación y luego redirigir
function redirectWithAnimation(targetUrl) {
  gsap.to(".loading-page", {
    opacity: 1,
    display: "flex",
    duration: 1.5,
    onComplete: () => {
      setTimeout(() => {
        window.location.href = targetUrl; // Redirige a la nueva página después de la animación
      }, 1500); // Ajusta el tiempo según la duración de la animación
    },
  });

  gsap.to(".logo-name", {
    y: 50,
    opacity: 0,
    duration: 2,
  });
}

// Inicializa la animación al cargar la página
animateLoadingPage(() => {
  console.log("Animación inicial completa");
});

// Maneja el clic en los botones para revertir la animación y redirigir
document.querySelectorAll(".redirectButton").forEach(button => {
  button.addEventListener("click", (event) => {
    event.preventDefault(); // Prevenir la acción predeterminada del botón

    const targetUrl = button.getAttribute("data-target");

    // Ejecuta la animación y redirige después de la animación
    redirectWithAnimation(targetUrl);
  });
});


window.onload = function() {
  setTimeout(function() {
      mostrarVentana();
  }, 5000); // 5000 milisegundos = 5 segundos
};

function mostrarVentana() {
  document.getElementById('miVentana').style.display = 'block';
}

function cerrarVentana() {
  document.getElementById('miVentana').style.display = 'none';
}

let selectedColor = '0'; // Default color index

    function selectColor(colorIndex) {
        selectedColor = colorIndex;
        updateImage(); // Update image based on selected size and color
    }

    function updateImage(size) {
        const image = document.getElementById('productImage');
        let sizeSuffix = '';

        // Determine size suffix
        if (size === 'small') {
            sizeSuffix = '-0';
        } else if (size === 'medium') {
            sizeSuffix = '-1';
        } else if (size === 'large') {
            sizeSuffix = '-2';
        } else if (size === 'xlarge') {
            sizeSuffix = '-3';
        } else {
            sizeSuffix = ''; // Default size
        }

        // Update image source based on selected color and size
        image.src = `../images/tienda/balones/balon-adidas-coleccion-modelo-euro24-${selectedColor}${sizeSuffix}.webp`;
    }

