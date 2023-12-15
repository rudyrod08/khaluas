<?php 
include '../../app/dbConnection.php';
include '../../model/usuario/usuarioModel.php'; 

$modelUsuario = new usuarioModel($conn);
$action = $_POST['action'];
switch ($action){
    case 'ingresar':
        $usuario = $_POST['user'];
        $contraseña = $_POST['pass'];
        $result = $modelUsuario->ingresar($usuario,$contraseña);

        if($result == 1){
            session_start();
            $_SESSION['usuario'] = $usuario;
            $resp['msg'] = "Nombre y contraseña correctos.";
            $resp['status'] = true;
            echo json_encode($resp);
        }

        else if($result == 2){
            $resp['error_type'] = 2;
            $resp['status'] = false;;
            echo json_encode($resp);
        }

        else if($result == 4){
            $resp['msg'] = "ERROR SQL.";
            $resp['error_type'] = 4;
            $resp['status'] = false;;
            echo json_encode($resp);
        }


        else{
            $resp['error_type'] = 3; 
            $resp['status'] = false;
            echo json_encode($resp);  
        }

    break;
    
    default:
    
    case 'registrar':
        $nombre = $_POST['nombre'];
        $apellidos= $_POST['apellidos'];
        $correo= $_POST['correo'];
        $contraseña = $_POST['pass'];
        $contraseña2 = $_POST['pass2'];
        $direccion= $_POST['direccion'];
        $result = $modelUsuario->registrarse($nombre,$apellidos,$correo,$contraseña,$contraseña2,$direccion);

        


    break;
}


?>
