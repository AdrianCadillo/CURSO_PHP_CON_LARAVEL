<?php
// $claseanonoima = new class(12,45){
 
//     private int $Numero1;
//     private int $Numero2;
//     public function __construct(int $num1,int $num2)
//     {
//         //echo "hola, soy el constructor";

//         $this->Numero1 = $num1;

//         $this->Numero2 = $num2;

//     }

//     public function getOperacion(string $operando = "+"):string
//     {
//       $resultado = "";
//       switch($operando)
//       {
//        case "+": $resultado= " RESULTADO : ".$this->Numero1+$this->Numero2; break;
//        case "-": $resultado= " RESULTADO : ".$this->Numero1-$this->Numero2; break;
//        default:

//        $resultado = "error";
//        break;
//       }

//       return $resultado;
//     }
// };

// $clase = new $claseanonoima(20,60);
// echo $clase->getOperacion("-");

class Area {
    private $area;

    public function setArea($area)
    {
      $this->area = $area;
    }

    public function getArea()
    {
        return $this->area->getPrintArea();
    }
}

$objetoArea = new Area;

$objetoArea->setArea(new class(4,8){
    private int|float $Base;
    private int|float $Altura;

    public function __construct(int|float $base,int|float $altura)
    {
       $this->Base = $base; $this->Altura = $altura; 
    }

    public function getPrintArea():int|float
    {
      return ($this->Base * $this->Altura) / 2;
    }
});

echo $objetoArea->getArea();