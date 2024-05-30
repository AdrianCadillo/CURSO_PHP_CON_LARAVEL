<?php 
// $primeraForma = array(1,2,"hola");

// $seundaForma = [12,"string",true,function(){return "hola";}];

// echo "<pre>";
// //print_r($primeraForma);
// var_dump($seundaForma);
// echo "</pre>";

// //var_dump($seundaForma);

// $primeraForma[] = 122;

// $Asociativas = [
//     "apellido" => "Armas Pajuelo",
//     "nombres" => "Daniela"
// ];

// $usuarios = [
//  [
//   "name" => "usuario1",
//   "email" => "usuario1@gmail.com"
//  ],
//  [
//     "name" => "usuario2",
//     "email" => "usuario3@gmail.com"
//  ]
// ];

// foreach($usuarios as $user):
//  echo "NOMBRE USUARIO : ".$user["name"]."  ".
//       "EMAIL : ".$user["email"].PHP_EOL;
// endforeach;

// $array = ['dato1'
// ,
// 'dato2'
// ,
// 'dato3'];
// if(is_array($array)){
// echo 'si es array';
// }else{
// echo 'no es array';
// }

// $array = ['dato1'
// ,
// 'dato2'
// ,
// 'dato3'];
// if(in_array('dato2',$array)){
// echo 'el elemento si pertenece al array';
// }else{
// echo 'el elemento no pertenece al array';
// }


/// carpeta/nombreimagen.jpg
// $Data='Hola,Mundo';
// $arreglo = explode("caracter de separación",$variable_cadena);
// $arreglo = explode(",",$Data);
// print_r($arreglo);

// /// ["producto","create"]

// $frutas = ['Mango'
// ,
// 'Lima'
// ,
// 'Fresa'
// ,
// 'Higo'];
// array_push($frutas,'nueva fruta');
// print_r($frutas);

// $array_1 = [1,2,3,4,5];
// $array_2 = [2,4];

// /// array1- array2
// print_r(array_diff($array_1,$array_2));


// $persona = ["Andrea","Pedro"];


// list($persona1,$persona2) = $persona;

// echo $persona1."  ".$persona2;

// $route = ["controller"=>"usuario","methodo"=>"create"];
// extract($route);
// echo $controller ." ".$methodo;

$controlador = "usuario";
$methodo = "import";

$array_compact = compact("controlador","methodo");

echo $array_compact["controlador"];











