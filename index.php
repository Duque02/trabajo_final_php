<?php
    require("./repositorio/Session.php");
    $session = new Session();

    if(!empty($session-> obtenerIdUsuario())) {
        header("Location: home.php"); 
    };

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        require("header.php");
    ?>
  
    <div class="container">
        <div class="row">
        <div class="col-md-3"> 
            <img src="https://cdn-icons-png.flaticon.com/512/45/45637.png" class="img" alt="ERROR 404 NOT FOUND"
            width="1000%">
        </div>
            <div class="col-md-4"> 
                <p class="styleText">  ¡Bienvendio a star shopping! <br> Somos una empresa de licores en la que nuestro principal proposito es que tengas la mejor experiencia con nuestros productos y tengas un placentero viaje a las estrellas. </p>
            
            </div>

            <div class="col-md-5"> 
                <p class="subtitulo"> ¿Deseas iniciar sección? </p>

                    <form method="POST">
                        <label for="exampleInputEmail1" class="form-label"> Correo electronico </label>
                        <input type="email"  placeholder="email@gmail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
                            <br> 
                        <label for="exampleInputPassword1" class="form-label"> Contraseña </label>
                        <input type="password" placeholder="*********" class="form-control" id="exampleInputPassword1" name="password">
                            <br> 
                        <label for="cedula"> cedula </label>
                        <input type="text" placeholder="1000456789" class="form-control" id="cedula" aria-describedby="cedula" name="cedula">
                            <br>
                       <label for="nombre"> Nombre completo </label>
                       <input type="text" placeholder="Edward Newgate" class="form-control" id="nombre" name="nombre">
                            
                       <p class="check"> <input type="checkbox" class="form-check-input" id="exampleCheck1"> Soy mayor de edad </p>
                        
                       <input class="boton" type="submit" value="acceder" onclick="this.form.action = 'registro.php'">

                       <br> <br>

                    </form>   
            </div> 
        </div>
    </div>
    <?php
    require("footer.php")
    ?>
</body>
</html>

<!-- 
display grid /gap -->