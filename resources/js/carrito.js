let carrito = [];

function agregarProducto(id, nombre, precio) {
  let producto = {
    id: id,
    nombre: nombre,
    precio: precio,
  };

  carrito.push(producto);
  console.log("Producto agregado al carrito:", producto);
  actualizarCarrito();
}

function actualizarCarrito() {
  let cantidad = carrito.length;

  let cantidadElemento = document.getElementById("cantidadCarrito");
  cantidadElemento.textContent = cantidad;
  cantidadElemento.style.display = cantidad > 0 ? "block" : "none";

  // Otras lógicas de actualización del carrito
  // ...
}

function mostrarCarrito() {
  if (carrito.length > 0) {
    let contenedor = document.getElementById("contenedorCarrito");
    contenedor.style.display = "block";

    // Obtener la lista de productos
    let listaProductos = document.getElementById("listaProductos");
    listaProductos.innerHTML = ""; // Limpiar la lista antes de mostrar los productos

    // Mostrar los productos agregados al carrito
    for (let i = 0; i < carrito.length; i++) {
      let producto = carrito[i];
      let listItem = document.createElement("li");
      listItem.textContent = producto.nombre + " - $" + producto.precio;
      listaProductos.appendChild(listItem);
    }
  }
}
function realizarCompra() {
  // Lógica para realizar la compra
  // Puedes enviar los productos al servidor para finalizar la compra,
  // limpiar el carrito, etc.
  // Ejemplo: enviar los productos al servidor con una petición AJAX
  // ...

  // Limpiar el carrito después de realizar la compra
  carrito = [];
  actualizarCarrito();

  // Ocultar el contenedor del carrito después de realizar la compra
  document.getElementById("contenedorCarrito").style.display = "none";

  // Otras acciones después de realizar la compra
  // ...
}
