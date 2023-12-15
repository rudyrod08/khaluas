<?php
include 'app/dbConnection.php';
include 'model/productosModel.php';
$modeloProductos = new productosModel($conn);


$data = json_decode(file_get_contents("php://input"), true);

// Verificar si se recibieron datos y si hay detalles de productos
if ($data && isset($data['detalles'])) {
    // Puedes realizar otras operaciones con la información total de la compra
    if (isset($data['total'])) {
        $total = $data['total'];
        $fecha = date("Y-m-d");
        $clienteId = 1;

        $modeloProductos->insertarVenta($fecha, $clienteId, $total);
    }

    $detallesCompra = $data['detalles'];

    // Iterar sobre los detalles de compra
    foreach ($detallesCompra as $detalle) {
        $idVenta = $modeloProductos->obtenerIdVenta();
        $idProducto = $detalle['id'];
        $cantidad = $detalle['cantidad'];
        $precio = $detalle['precio'];
        $subtotal = $detalle['subtotal'];

        $modeloProductos->insertarDetalleVenta($idVenta, $idProducto, $cantidad, $precio, $subtotal);

    }


} else {
    echo "No se recibieron detalles de compra";
}

?>