<?php
/**
 * 
 */
class Animal {
  public final function comer()
  {
    echo "comer";
  }
}

class Gato extends Animal
{
    public function comer()
    {
      echo "El gato come carne";
    }
}