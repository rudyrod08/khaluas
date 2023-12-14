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
}


?>