<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
    <h2> Hola </h2>
    <p> INICIA TU REGISTRO </p>

    <div class="input-wrapper">
        <input type="text" name="name" placeholder="Nombre">
        <img class="input-icon" src="images/name.svg" alt="">
    </div>

    <div class="input-wrapper">
        <input type="text" name="direction" placeholder="Direccion">
        <img class="input-icon" src="images/direction.svg" alt="">
    </div>

    <div class="input-wrapper">
        <input type="tel" name="phone" placeholder=" Telefono ">
        <img class="input-icon" src="images/phone.svg" alt="">
    </div>

    <div class="input-wrapper">
        <input type="password" name="password" placeholder="Contraseña">
        <img class="input-icon" src="images/password.svg" alt="">
    </div>
    <div class="input-wrapper">
        <input type="email" name="Email" placeholder=" Email ">
        <img class="input-icon" src="images/email.svg" alt="">
    </div>
    <input class="btn" type="submit" name="registar" value="ENVIAR">

</form>

<?php
    include("registrar.php");
?>

</body>
</html>