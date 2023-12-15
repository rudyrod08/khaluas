<?php include '../../app/dbConnection.php'?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/login/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                       
                <!-------------      image     ------------->
                
                <img src="../../resources/img/playera_rot.png" alt="">
                <!-- <div class="text">
                    <p>Join the community of developers <i>- ludiflex</i></p>
                </div> -->
                
            </div>

            <div class="col-md-6 right">
                
            <form id="form-login" action="">
            <div class="input-box">
                   
                   <header>Iniciar sesión</header>
                   <div class="input-field">
                        <input type="text" class="input" name="user" id="user" required="" autocomplete="off">
                        <label for="email">Nombre de usuario</label> 
                    </div> 
                   <div class="input-field">
                        <input type="password" class="input" name="pass" id="pass" required="">
                        <label for="pass">Contraseña</label>
                    </div> 
                   <div class="input-field">
                        
                        <button type="button" class="submit" onclick="ingresar()">Iniciar Sesión</button>
                   </div> 
                   <div class="signin">
                    <span>¿No tienes una cuenta? <a href="register.php">Crea una</a></span>
                   </div>
                </div>
            </form>
                  
            </div>
        </div>
    </div>
</div>
<script src="../../resources/js/usuario/usuario.js"></script>
</body>
</html>