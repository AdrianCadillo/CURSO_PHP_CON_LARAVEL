<?php

// function Sumar():void{
//   echo 2+3;  
// }

// function Saludar(string $mensaje):string 
// {
//     return true;
// }

//  //Sumar();
//  echo Saludar("Hola mundo");

/**
 * Funciones anónimas
 */
//  $FAnonima = function(){
//    echo "Hola, desde la clase # 3";
//  };
// $FAnonima = function(string|int|float|array $dato):string|array{
//     return $dato;
// };
//print_r($FAnonima("hola"));
// $numero_1 = 20;

// $operacion = function(int $numero_2) use($numero_1){
//   return $numero_1 +$numero_2;
// };

// echo $operacion(12);

/**
 * Funciones tipo flecha     
 * fn(parametros....) => expresion;
 */

//  $saludo = fn(string $nombre) => "Hola,$nombre buenas noches!";

//   echo $saludo("Adrian");

// $credenciales = [
//     "usuario" => "login",
//     "password" => password_hash("12345",PASSWORD_BCRYPT)
// ];

// $login = fn(string $usuario,string $password) => 
// $credenciales["usuario"] === $usuario and password_verify($password,$credenciales["password"]);

// if($login("login","12345"))
// {
//    echo "login exitoso!"; 
// }
// else{
//     echo "error al realizar login!";
// }


/** funciones tipo flecha anidadas 
 * 
 * fn()=>fn()=>fn()
*/

$calculadora = fn(int $numero1) => fn(int $numero2) => $numero1-$numero2;

echo $calculadora(12)(320);



 







 