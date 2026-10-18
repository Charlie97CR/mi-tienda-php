// Variables principales
const carrito = document.getElementById('carrito');
const lista1 = document.getElementById('lista-1');
const contenedorCarrito = document.querySelector('#lista-carrito tbody');
const btnVaciarCarrito = document.getElementById('vaciar-carrito');

// Arreglo donde se guardarán los productos del carrito
let articulosCarrito = [];

// Inicializar los Event Listeners
cargarEventListeners();

function cargarEventListeners() {
    // Cuando haces clic en "Agregar al carrito"
    lista1.addEventListener('click', agregarProducto);

    // Cuando haces clic en el botón "X" para eliminar un producto
    carrito.addEventListener('click', eliminarProducto);

    // Vaciar el carrito completo
    btnVaciarCarrito.addEventListener('click', (e) => {
        e.preventDefault();
        articulosCarrito = [];
        limpiarHTML();
    });
}

// Función para agregar el producto al carrito
function agregarProducto(e) {
    e.preventDefault();

    // Verificamos si el usuario hizo clic en un botón "Agregar al carrito"
    if (e.target.classList.contains('agregar-carrito')) {
        const productoSeleccionado = e.target.parentElement.parentElement;

        leerDatosProducto(productoSeleccionado);
    }
}

// Extraer la información del producto seleccionado
function leerDatosProducto(producto) {
    // Crear un objeto con los datos del producto
    const infoProducto = {
        imagen: producto.querySelector('img').src,
        titulo: producto.querySelector('h3').textContent,
        precio: producto.querySelector('.precio').textContent,
        id: producto.querySelector('a').getAttribute('data-id'),
        cantidad: 1
    };

    // Revisar si el elemento ya existe en el carrito
    const existe = articulosCarrito.some(producto => producto.id === infoProducto.id);

    if (existe) {
        // Actualizamos la cantidad si ya existe
        const productos = articulosCarrito.map(producto => {
            if (producto.id === infoProducto.id) {
                producto.cantidad++;
                return producto;
            } else {
                return producto;
            }
        });
        articulosCarrito = [...productos];
    } else {
        // Agregamos el producto al arreglo del carrito
        articulosCarrito = [...articulosCarrito, infoProducto];
    }

    carritoHTML();
}

// Eliminar un producto del carrito
function eliminarProducto(e) {
    if (e.target.classList.contains('borrar')) {
        const productoId = e.target.getAttribute('data-id');

        // Filtrar el arreglo para eliminar el producto con el ID seleccionado
        articulosCarrito = articulosCarrito.filter(producto => producto.id !== productoId);

        carritoHTML(); // Volver a pintar el HTML actualizado
    }
}

// Mostrar el carrito de compras en el HTML (en la tabla)
function carritoHTML() {
    // Limpiar el HTML previo para evitar duplicados
    limpiarHTML();

    // Recorrer el carrito y generar el HTML
    articulosCarrito.forEach(producto => {
        const { imagen, titulo, precio, cantidad, id } = producto;

        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <img src="${imagen}" width="100">
            </td>
            <td>${titulo}</td>
            <td>${precio}</td>
            <td>
                <a href="#" class="borrar" data-id="${id}">X</a>
            </td>
        `;

        // Agregar el HTML del carrito en el tbody
        contenedorCarrito.appendChild(row);
    });
}

// Limpiar el tbody del carrito
function limpiarHTML() {
    // Forma rápida de limpiar
    while (contenedorCarrito.firstChild) {
        contenedorCarrito.removeChild(contenedorCarrito.firstChild);
    }
}