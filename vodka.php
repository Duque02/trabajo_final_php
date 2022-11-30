<?php
require("./repositorio/Session.php");
$session = new Session();

?>

<!DOCTYPE php>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VODKA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
</head>

<body>
    <?php
    require("header.php");
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Opciones</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="./home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./features.php">Features</a> 
                <li class="nav-item">
                    <a class="nav-link" href="./pricing.php">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./disabled.php">Disabled</a>
                </li>
            </ul>
        </div> -->
    </nav>
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
    <?php
    require("footer.php");
    ?>
</body>

</html>