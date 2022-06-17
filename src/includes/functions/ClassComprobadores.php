<?php
class comprobador{
  public function validar_requerido($string){
    $res=strlen($string);

    if ($res > 8) {
      return true;
    }else {
      return false;
    }

  }

public function validar_requerido_name($string){
    $res=strlen($string);

    if ($res > 4) {
      return true;
    }else {
      return false;
    }

  }

  public  function validar_iguales($a, $b){
      if($a == $b){
         return true;
      }else{
         return false;
      }
   }
   public function validar_mayor_edad($fecha)
   {
     $fecha_actual = strtotime(date("d-m-Y"));
     $fecha_entrada = strtotime("$fecha");
     $fecha_entrada += 568024668;
     if ($fecha_actual > $fecha_entrada) {
       return true;
     }else {
       return false;
     }
     //eturn $fecha_entrada;
   }
}
$comprobador = new comprobador;
 ?>
