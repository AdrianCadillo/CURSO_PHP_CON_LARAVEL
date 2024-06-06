<?php

use repository\Orm;
require 'Orm.php';
class Model implements Orm
{
    private string $sql;

    private string $Tabla = "productos";
   /**
   *Método para Insert
   * insert into tabla(columna1,columna2) values(?,?) | values(:columna1,:columna2)
   **/  

   public function Insert(array $datos){

    $this->sql = "INSERT INTO $this->Tabla(";

    foreach($datos as $key => $value):
      $this->sql.=$key.",";
    endforeach;

    $this->sql = rtrim($this->sql,",").") VALUES(";

    foreach($datos as $key => $value):
        $this->sql.=":".$key.",";
    endforeach;
 
    return  $this->sql = rtrim($this->sql,",").")";
   }

   /**
    * Actualizar
    */

  public function update(array $datos){}


  public function get(){}


  public function where(){} 
}

$model = new Model;

echo $model->Insert([
    "nombre_producto" => "Coca cola de 3 litros",
    "precio" => 10,
    "stock" => 20
]);