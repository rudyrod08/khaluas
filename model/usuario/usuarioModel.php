<?php
class usuarioModel{

    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function ingresar($usuario, $password){
        $sqlConsulta = "SELECT nombre, password FROM usuarios WHERE nombre = '$usuario'";
        $result = mysqli_query($this->conn, $sqlConsulta);

        if($result){
            $row = mysqli_fetch_object($result);

            if($result->num_rows > 0 && password_verify($password, $row->password)){
                return 1;
            }
        }
        if($usuario == '' && $password == ''){
            return 2;
        }

        return 3;
    }    

    public function registrarse($nombre, $apellidos, $correo, $contraseña, $contraseña2, $direccion){
        if($contraseña == $contraseña2){
            $nombreExistente = $this->verificarNombreExistente($nombre);
            if ($nombreExistente === false){
                
            } else{
                return 2; //Nombre existente
            }
        }
        
        else{
            return 1; //Contraseñas no coinciden
        }

    }

    public function verificarNombreExistente($nombre) {
        $sqlConsulta = "SELECT COUNT(*) as count FROM usuarios WHERE nombre = ?";
        $stmt = mysqli_prepare($this->conn, $sqlConsulta);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $nombre);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
    
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $count = $row['count'];
    
                if ($count > 0) {
                    return true; // El nombre ya existe en la base de datos
                } else {
                    return false; // El nombre no existe en la base de datos
                }
            } else {
                return null; // Error en la obtención de resultados
            }
        } else {
            return null; // Error en la preparación de la consulta
        }
    }

}



?>