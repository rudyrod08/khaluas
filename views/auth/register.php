<?php include '../../app/dbConnection.php'?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/register/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">

                <div class="input-box">
                   <form id="form-register" action="">
                   <header class="mt-2">Crear tu cuenta</header>
                   
                   <div class="input-field">
                        <label for="nombres">Nombre</label>
                        <input type="text" class="input" id="nombre" name="nombre" required="">
                    </div> 

                    <div class="input-field">
                        <label for="nombres">Apellidos</label>
                        <input type="text" class="input" id="apellidos" name="apellidos" required="">
                    </div> 

                    <div class="input-field">
                        <label for="correo">Correo</label>
                        <input type="text" class="input" id="correo" name="correo" required="">
                    </div> 


                    <div class="input-field">
                        <label for="pass">Contraseña</label>
                        <input type="password" class="input" id="pass" name="pass" required="">
                    </div> 

                    <div class="input-field">
                        <label for="pass">Repetir contraseña</label>
                        <input type="password" class="input" id="pass2" name="pass2" required="">
                    </div> 

                    <div class="input-field">
                        <label for="pass">Dirección</label>
                        <input type="text" class="input" id="direccion" name="direccion"required="">
                    </div> 


                    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">He leído y acepto los terminos y condiciones</label>                        
                    </div>

                   <div class="input-field mt-3">
                        <button type="submit" class="submit" onclick="registrarse()">Registrarme</button>
                   </div> 
                   </form>

                   <div class="signin">
                    <span>¿Tienes una cuenta? <a href="login.php">Inicia sesión</a></span>
                   </div>
                </div>  
            
        </div>
    </div>
</div>
<script src="../../resources/js/usuario/usuario.js"></script>
</body>
</html>