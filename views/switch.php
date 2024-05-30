<?php
/** FECHA DE NACIMIENTO */
$FechaNacimiento = "1996-02-04"; //[1996,11,04]

$FechaNacimiento = explode("-",$FechaNacimiento);

$Mes = $FechaNacimiento[1];
$Dia = $FechaNacimiento[2];
 

$SignoZodiacal = "";
switch($Mes):
 case 1: $SignoZodiacal = $Dia <=20 ? "CAPRICORNIO":"ACUARIO";break; 
 case 2: $SignoZodiacal = $Dia <=19 ? "ACUARIO":"PISCIS";break; 
 case 3: $SignoZodiacal = $Dia <=20 ? "PISCIS":"ARIES";break;
 default:
 $SignoZodiacal  = "ERROR";
 break;
endswitch;

echo $SignoZodiacal;