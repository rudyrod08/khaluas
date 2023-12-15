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
}

function vaciarCarrito() {
  carrito = [];
  actualizarCarrito();
  console.log("El carrito ha sido vaciado.");
}

function mostrarCarrito() {
  if (carrito.length > 0) {
    // Seleccionar la modal por su ID
    let contenedor = document.getElementById("contenedorCarrito");
    let modal = new bootstrap.Modal(contenedor); // Crear el objeto modal

    // Obtener la lista de productos y limpiarla antes de mostrar los productos
    let listaProductos = document.getElementById("listaProductos");
    listaProductos.innerHTML = "";

    // Crear un objeto para rastrear la cantidad de cada producto en el carrito
    let cantidadProductos = {};

    // Variable para calcular el total de la compra
    let totalCompra = 0;

    // Recorrer el carrito y contar la cantidad de cada producto
    for (let i = 0; i < carrito.length; i++) {
      let producto = carrito[i];
      if (cantidadProductos[producto.nombre]) {
        // Si el producto ya está en el carrito, incrementa su cantidad
        cantidadProductos[producto.nombre] += 1;
      } else {
        // Si es la primera vez que se agrega el producto, establece su cantidad en 1
        cantidadProductos[producto.nombre] = 1;
      }
    }

    // Mostrar los productos agregados al carrito, considerando la cantidad
    for (let productoNombre in cantidadProductos) {
      if (cantidadProductos.hasOwnProperty(productoNombre)) {
        let cantidad = cantidadProductos[productoNombre];
        let precioUnitario = carrito.find(
          (producto) => producto.nombre === productoNombre
        ).precio;
        let listItem = document.createElement("li");
        let subtotal = precioUnitario * cantidad;

        // Calcular el total de la compra
        totalCompra += subtotal;

        listItem.textContent = `${productoNombre} - $${precioUnitario} x ${cantidad} = $${subtotal}`;

        // Añadir clases CSS a los elementos de la lista si es necesario
        listItem.classList.add("fs-5", "fw-bolder", "my-2"); // Reemplaza "custom-class" con la clase que desees aplicar

        listaProductos.appendChild(listItem);
      }
    }

    // Mostrar el total de la compra al final de la lista de productos
    let totalElement = document.createElement("li");
    totalElement.textContent = `Total: $${totalCompra}`;
    totalElement.classList.add("text-end", "fs-5", "fw-bolder", "mt-4", "me-4");
    listaProductos.appendChild(totalElement);

    modal.show(); // Mostrar la modal utilizando Bootstrap
  }
}

function realizarCompra() {
  let detallesCompra = []; // Array para almacenar detalles de la compra

  carrito.forEach((producto) => {
    let cantidad = carrito.filter((p) => p.nombre === producto.nombre).length;
    let subtotal = cantidad * producto.precio;

    // Crear un objeto con los detalles de cada producto en el carrito
    let detalleProducto = {
      id: producto.id,
      nombre: producto.nombre,
      cantidad: cantidad,
      precio: producto.precio,
      subtotal: subtotal,
    };

    // Verificar si el detalle del producto ya está agregado para evitar duplicados
    if (!detallesCompra.some((detalle) => detalle.nombre === producto.nombre)) {
      detallesCompra.push(detalleProducto);
    }
  });

  // Calcular el total de la compra sumando todos los subtotales
  let totalCompra = detallesCompra.reduce(
    (total, detalle) => total + detalle.subtotal,
    0
  );

  const datosCompra = {
    detalles: detallesCompra,
    total: totalCompra,
  };

  const datosJSON = JSON.stringify(datosCompra); // Convertir a JSON para enviar al servidor

  const xhr = new XMLHttpRequest();
  const url = "guardarCompra.php"; // Ruta al archivo PHP en el servidor que manejará la solicitud

  xhr.open("POST", url, true);
  xhr.setRequestHeader("Content-Type", "application/json");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        console.log("Compra realizada con éxito");
      } else {
        console.error("Error al realizar la compra");
      }
    }
  };

  xhr.send(datosJSON);
}
