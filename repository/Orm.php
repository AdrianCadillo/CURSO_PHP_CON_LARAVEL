<?php
namespace repository;

interface Orm 
{
  /**
   *Método para Insert
   **/  

   public function Insert(array $datos);

   /**
    * Actualizar
    */

  public function update(array $datos);


  public function get();


  public function where();
}