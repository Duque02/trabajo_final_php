<?php
require("./repositorio/Session.php");
$session = new Session();

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
</head>

<body>
    <?php
    require("header.php");
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-2" style="background-color:white ;">
                <div id="nav">
                    <div class="cuerporec">
                        <ul>
                            <li><a href="./ron.php">RON</a></li>
                            <br>
                            <li><a href="./aguardiente.php">AGUARDIENTE</a></li>
                            <br>
                            <li><a href="./whisky.php">WHISKY</a></li>
                            <br>
                            <li><a href="./champaña.php">CHAMPAÑA</a></li>
                            <br>
                            <li><a href="./vodka.php">VODKA</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                   <p class="styleText"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat eligendi excepturi vel distinctio repudiandae, enim fuga ratione labore ipsa eos aliquam consequatur voluptate dignissimos ex animi dolore quis saepe reiciendis.
                    <br> <br> <br> <br> <br> <br> <br>
                   </p>
                    
                </div>
        </div>
    </div>
    <?php
    require("footer.php");
    ?>
</body>

</html>