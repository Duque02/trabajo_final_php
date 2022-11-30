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

<body>


    <?php
    require("header.php");
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="https://cdn-icons-png.flaticon.com/512/45/45637.png" class="img" alt="ERROR 404 NOT FOUND" width="1000%">
            </div>
            <div class="col-md-4">
                <p class="styleText"> ¡Estas a un paso de entrar en nuestra pagina! solo te falta iniciar sesión :D
                    <img src="https://i.pinimg.com/originals/7d/06/89/7d06892c21cd9b97f2b52eb67013de1c.png" class="img-fluid" alt="Responsive image">
                </p>

            </div>

            <div class="col-md-5">
                <p class="subtitulo"> Iniciar sesión </p>

                <form method="POST" action="verificacionCuenta.php">
                    <label for="exampleInputEmail1" class="form-label"> Correo electronico </label>
                    <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
                    <br>
                    <label for="exampleInputPassword1" class="form-label"> Contraseña </label>
                    <input type="password" placeholder="Contraseña" class="form-control" id="exampleInputPassword1" name="password">
                    <br>
                    <button type="submit" class="btn btn-dark"> Iniciar </button>
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                </form>
            </div>
        </div>
    </div>
    <?php
    require("footer.php")
    ?>
</body>

</html>