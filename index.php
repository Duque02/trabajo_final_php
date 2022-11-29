<?php
    require("./repositorio/Session.php");
    $session = new Session();

    if(isset($session->obtenerIdUsuario())) {
        header("Location: home.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color: #F2F3F4;">
    <?php
        require("header.php");
    ?>
  
    <div class="container">
        <div class="row">
            <div class="col-6 well"> 
    
                <p class="styleText">  ¡Bienvendio a star shopping! <br> Somos una empresa de licores en la que nuestro principal proposito es que tengas la mejor experiencia con nuestros productos y tengas un placentero viaje a las estrellas. </p>
                <img src="https://discurramba.com/wp-content/uploads/2021/02/Grupo-159-min-2.png" class="img-fluid" alt="ERROR 404 NOT FOUND">
            </div>

            <div class="col-md-6 well "> 
                <p> ¿Deseas iniciar sección? </p>

                        <br> <br>

                    <form method="POST">
                        <label for="exampleInputEmail1" class="form-label"> Correo electronico </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
                            <br> 
                        <label for="exampleInputPassword1" class="form-label"> Contraseña </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            <br> 
                        <p>
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">

                        <label for="cedula"> cedula </label>
                            <input type="text" name="cedula"> 
                       <label for="nombre"> nombre</label>
                       <input type="text" name="nombre">
                        
                        Soy mayor de edad
                        </p>
                       <input type="submit" value="ACCEDER" onclick="this.form.action = 'registro.php'">


                    </form>   
            </div> 
        </div>
    </div>
    <?php
    require("footer.php")
    ?>
</body>
</html>