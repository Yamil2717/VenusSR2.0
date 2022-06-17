<?php
class Mysql_Class
{
  //mysql params
  public function __construct()
    {
      $this->user = 'yamil_exowish';
      $this->password = 'CwJHI1CvJGhs';
      $this->server = 'localhost';
      $this->database = 'yamil_exowishDB';

      $this->init_conexion = new mysqli(
        $this->server,
        $this->user,
        $this->password,
        $this->database
      );
      if ($this->init_conexion -> connect_errno) {
       return exit('<h3> Error de capa E/S</h3>');
      }

    //end


  }

public function String_Scape($string)
  {
    $string = $this->init_conexion->real_escape_string($string);
    $string = stripslashes($string);

    return $string;
  }

public function Passwd_Calculador ($stringPass, $salt)
  {
    $parsed_string = self::String_Scape($stringPass);
    $saltedPW =  $parsed_string . $salt;
    $hashedPW = hash('sha256', $saltedPW);


    //$hashedPW = strtoupper($hashedPW);
         return $hashedPW;
  }
public function Registrar_Usuario($usuario, $pass, $nombres, $apellidos, $email, $sexo, $birddate, $condiciones)
{
  $get_user = self::Get_User($usuario);
  $usuario = self::String_Scape($usuario);
  $nombres = self::String_Scape($nombres);
  $apellidos = self::String_Scape($apellidos);
  $email = self::String_Scape($email);
  $sexo = self::String_Scape($sexo);
  $birddate = self::String_Scape($birddate);
  $condiciones = self::String_Scape($condiciones);
  if (!$get_user['user']) {
    $gen_salt = bin2hex(random_bytes(7));
    $pass_calc = self::Passwd_Calculador ($pass, $gen_salt);

  $res = $this->init_conexion->query("INSERT INTO users (username_user, password_user, password_salt_user, first_name_user, last_name_user, email_user, registry_date_user, sex_user, birth_date_user, terms_and_conditions_user)
  VALUES ('$usuario', '$pass_calc', '$gen_salt', '$nombres', '$apellidos', '$email', NOW(), '$sexo', '$birddate', '$condiciones')");


    return true;
  }else {
    return false;
  }
}

public function login ($user, $pass)
{
      $user = self::String_Scape($user);
      $pass = self::String_Scape($pass);
      $get_salt = self::Get_User($user);

      if ($get_salt) {
        $gen_pass = self::Passwd_Calculador($pass, $get_salt['salt']);
        $res = $this->init_conexion->query("SELECT * FROM users WHERE username_user='$user' and password_user='$gen_pass'");

        $count = $res->num_rows;
        if ($count) {
          session_start();
          $_SESSION['id']=$get_salt['id'];
          $_SESSION['nombre']=$get_salt['nombre'];
          $_SESSION['lastloguin']=$get_salt['LastLogin'];
          $_SESSION['user']=$get_salt['user'];
          self::LastLoguin_update($get_salt['id']);
          return true;
        }else {
          return false;
        }

      }else {
        return false;
      }
}

public function Get_User($user)
{
  $res = $this->init_conexion->query("SELECT * FROM users WHERE username_user='$user'");
  $cont = $res->fetch_array(MYSQLI_ASSOC);

    return $cont;
}

public function LastLoguin_update($id){
  $res = $this->init_conexion->query("UPDATE users SET LastLogin=NOW() WHERE id='$id'");
  return $res;
}

}
//init instance
$mysqli = new Mysql_Class;

//var_dump($mysqli->Registrar_Usuario('usuario', 'pass', 'nombre' , 'email'));
//echo "<pre>";
//var_dump($mysqli->login ('usuarioe', 'pass'));
//var_dump($_SESSION);
//session_destroy();
//echo date("Y-m-d");

 ?>
