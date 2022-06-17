<?php
require('src/includes/functions/ClassMysql.php');
require('src/includes/functions/ClassComprobadores.php');
require('src/includes/pages/registry.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="src/css/pages/normalize.min.css">
    <link rel="stylesheet" href="src/css/fonts/font-icons.min.css">
    <link rel="stylesheet" href="src/css/fonts/font-main.min.css">
    <link rel="stylesheet" href="src/css/pages/login.min.css">
</head>
<body class="background-main">
    <div class="banner-main">
        <img class="background-img" src="src/src-images/images/Fondo01.jpg" alt="Fondo de la pagina web | exowish">
        <div class="box">
            <div class="box-body">
                <img class="logotipo" src="src/src-images/images/Logotipo.png" alt="Logotipo de exowish.">
                <form method="get">
                    <div class="input-box">
                        <input name="nombres" class="input" type="text" placeholder="Nombre(s)" required>
                        <span class="input-icons icon-user"></span>
                    </div>
                    <div class="input-box">
                        <input name="apellidos" class="input" type="text" placeholder="Apellido(s)" required>
                        <span class="input-icons icon-user"></span>
                    </div>
                    <div class="input-box">
                        <input name="user" class="input" type="text" placeholder="Usuario" required>
                        <span class="input-icons icon-star"></span>
                    </div>
                    <div class="input-box">
                        <input name="email" class="input" type="email" placeholder="Ejemplo@exowish.com" required>
                        <span class="input-icons icon-mail"></span>
                    </div>
                    <div class="input-box">
                        <input name="password" class="input" type="password" placeholder="Ingrese su contraseña" required>
                        <span class="input-icons icon-lock"></span>
                    </div>
                    <div class="input-box">
                        <input name="repassword" class="input" type="password" placeholder="Repita su contraseña" required>
                        <span class="input-icons icon-shield"></span>
                    </div>
                    <div class="input-box">
                        <input name="birddate" class="input" type="date" placeholder="Ingrese su año de nacimiento" required>
                        <span class="input-icons icon-cake"></span>
                    </div>
                    <div class="input-box">
                        <input type="radio" name="sex" value="0" id="sex-f" />
                        <label for="sex-f">Mujer</label>
                        <input type="radio" name="sex" value="1" id="sex-m" required/>
                        <label for="sex-m">Hombre</label>
                        <input type="radio" name="sex" value="2" id="sex-pnd"/>
                        <label for="sex-pnd">Prefiero no decirlo</label>
                    </div>
                    <div class="input-box">
                        <input type="checkbox" name="terms-and-conditions" value="1" id="terms-and-conditions" required>
                        <label for="terms-and-conditions">
                            Aceptar <a class="text" href="terms_and_conditions.php">terminos y condiciones.</a>
                        </label>
                    </div>
                    <input class="submit" type="submit" name="registrarse" value="Crear Cuenta">
                </form>
                <?php
                if ($errors) {
                  echo $error;
                }
                 ?>
                <!-- <div class="error">
                    <button class="close">×</button>
                    Usted no cumple con la edad minima, lo sentimos.
                </div>
                <div class="error">
                    <button class="close">×</button>
                    El nombre de usuario está en uso, por favor escoja otro.
                </div>
                <div class="error">
                    <button class="close">×</button>
                    Las contraseñas no coinciden, vuelva a introducirlas.
                </div>
                <div class="error">
                    <button class="close">×</button>
                    Felicidades se ha registrado correctamente.
                </div> -->
                <p class="text">¿Ya tienes cuenta?</p>
                <a class="text" href="login.php">Iniciar sesión</a>
            </div>
        </div>
    </div>
</body>
</html>
