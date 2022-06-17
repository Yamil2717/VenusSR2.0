<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="src/css/pages/normalize.min.css">
    <link rel="stylesheet" href="src/css/fonts/font-icons.min.css">
    <link rel="stylesheet" href="src/css/fonts/font-main.min.css">
    <link rel="stylesheet" href="src/css/pages/login.min.css">
</head>
<body class="background-main">
    <div class="banner-main">
        <img class="background-img" src="src/src-images/images/Fondo01.jpg" alt="Fondo de la pagina web Exowish">
        <div class="box">
            <div class="box-body">
                <img class="logotipo" src="src/src-images/images/Logotipo.png" alt="Logotipo de exowish.">
                <form action="">
                    <div class="input-box">
                        <input class="input" type="text" placeholder="Usuario">
                        <span class="input-icons icon-star"></span>
                    </div>
                    <div class="input-box">
                        <input class="input" type="password" placeholder="Ingrese su contraseña">
                        <span class="input-icons icon-shield"></span>
                    </div>
                    <input class="submit" type="submit" value="Iniciar sesión">
                </form>
                <div class="error">
                    <button class="close">×</button>
                    Los datos ingresados no son correctos.
                </div>
                <p class="text">¿No tienes cuenta aún?</p>
                <a class="text" href="registry.php">Registrarse</a>
                <a class="text" href="#">¿Olvidaste tú contraseña?</a>
            </div>
        </div>
    </div>
</body>
</html>