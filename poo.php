<?php 
 
// class Persona 
// {
//     public string $dni;
//     public string $apellidos;
//     public string $nombres;

//     public function __construct(string $dni_,string $apellidos_,string $nombres_)
//     {
//         $this->dni = $dni_; $this->apellidos = $apellidos_;
//         $this->nombres = $nombres_;
//     }

//     /// accion o método

//     public function PrintPersona():string
//     {
//       return "PERSONA : ".$this->apellidos." ".$this->nombres;
//     }

// }

// $estudiante = new Persona("12345678","Perez Mendoza","Elisa Susana");

// // $estudiante->dni = "01238484";
// // $estudiante->apellidos = "Armas Pajuelo";
// // $estudiante->nombres = "Pedro Carlos";

// // echo $estudiante->apellidos;

// echo $estudiante->PrintPersona();


class Persona 
{
 private string $Dni;
 private string $Apellidos;
 private string $Nombres; 
 
    public function setDni(string $dni):void
    {
     $this->Dni = $dni;
    }

    public function setApellidos(string $apellidos):void
    {
     $this->Apellidos = $apellidos;
    }

    public function getDni():string
    {
     return $this->Dni;
    }

    public function getApellidos():string
    {
     return $this->Apellidos;
    }
}

class Estudiante extends Persona
{

}


$estudiante = new Estudiante;

$estudiante->setDni("12232432");
$estudiante->setApellidos("apellidos");

echo  $estudiante->getDni()."  ".$estudiante->getApellidos();
