<?php

class productosModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function obtenerProductos() {
        $sqlConsulta = "SELECT * FROM productos WHERE activo = 1";
        $result = mysqli_query($this->conn, $sqlConsulta);
        if ($result) {
            return $result;
        }
    }

    public function insertarDetalleVenta($ventaId, $productoId, $cantidad, $precio, $subTotal) {
        $sqlConsulta = "INSERT INTO detalle_ventas(venta_id, producto_id, cantidad, precio, subtotal)
        VALUES($ventaId, $productoId, $cantidad, $precio, $subTotal);";
        $result = mysqli_query($this->conn, $sqlConsulta);
        return $result;
    }
    public function insertarVenta($fecha, $idCliente, $total) {
        $sqlConsulta = "INSERT INTO ventas(fecha, cliente_id, total)
        VALUES('$fecha', $idCliente, $total);";
        $result = mysqli_query($this->conn, $sqlConsulta);
        return $result;
    }
    public function obtenerIdVenta() {
        $sqlConsulta = "SELECT MAX(id_venta) AS id FROM ventas";
        $result = mysqli_query($this->conn, $sqlConsulta);
        if ($result) {
            $row = $result->fetch_assoc();
            return $row['id'];
        }
    }
}


?>