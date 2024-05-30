<?php

/**
 * Necesitamos la fecha de nacimiento
 */
$FechaNacimiento = $_POST["fechanac"];// 2028

$FechaNacimiento = explode("-",$FechaNacimiento);
/// separamos el año , mes y día
$Anio = $FechaNacimiento[0];
$Mes = $FechaNacimiento[1];
$Dia = $FechaNacimiento[2];


$Digito = 0;
$Suerte = $Anio + $Mes + $Dia; /// 2028

while($Suerte > 9){
  $Digito = fmod($Suerte,10);//8,0,2
  $Suerte = floor($Suerte/10);/// 202,22,2
  $Suerte+=$Digito;/// 210,22,3
}

echo $Suerte;/// header();

