<?php

if ($_SESSION['nombre']) {
  header("location: index.php");
}
$errors = '';
if (isset($_GET['registrarse'])) {
  if (!$comprobador->validar_requerido_name($_GET['nombres'])) {
    $errors .= 'No ha escrito un Nombre o Apodo valido<br>';
  }
  if (!$comprobador->validar_requerido_name($_GET['apellidos'])) {
    $errors .= 'No ha escrito un Nombre o Apodo valido<br>';
  }
  if (!$comprobador->validar_requerido_name($_GET['user'])) {
    $errors .= 'No ha escrito un Usuario valido<br>';
  }
  if (!$comprobador->validar_requerido_name($_GET['email'])) {
    $errors .= 'No ha escrito un Nombre o Apodo<br>';
  }
  if (!$comprobador->validar_requerido_name($_GET['password'])) {
    $errors .= 'No ha escrito una contraseña valida<br>';
  }
  if (!$comprobador->validar_requerido_name($_GET['repassword'])) {
    $errors .= 'Repite la contraseña<br>';
  }
  if (!$comprobador->validar_iguales($_GET['password'], $_GET['repassword'])) {
    $errors .= 'Las contraseñas tienen que ser iguales<br>';
  }
  if (!$comprobador->validar_mayor_edad($_GET['birddate'])) {
    $errors .= 'No eres mayor de edad<br>';
    header('Refresh: 5; URL=https://youtube.com/watch?v=FHBz3-GJ7Y4');
  }
  if (!isset($_GET['sex'])) {
    $errors .= 'Seleciona un genero<br>';
  }
  if (!isset($_GET['terms-and-conditions'])) {
    $errors .= 'Acepta los terminos y condiciones<br>';
  }
  if (!$errors) {
    $exec = $mysqli->Registrar_Usuario($_GET['user'], $_GET['password'], $_GET['nombres'], $_GET['apellidos'], $_GET['email'], $_GET['sex'], $_GET['birddate'], $_GET['terms-and-conditions']);
    var_dump($exec);
  }
  $error =
  '                <div class="error">
                      <button class="close">×</button>
                      '.$errors.'
                  </div>';
}