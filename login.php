<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Iniciar sesion</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php require 'partials/header.php' ?>

    <h1>Iniciar sesion a tu cuenta de Futbol</h1>
    <h2>Para disfrutar la pasion de futbol</h2>
    <span>o <a href="signup.php">Registrate</a></span>

    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Ingrese su email">
        <input type="password" name="password" placeholder="Ingrese su contraseña">
        <input type="submit" value="Enviar">
    </form>

</body>

</html>