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
