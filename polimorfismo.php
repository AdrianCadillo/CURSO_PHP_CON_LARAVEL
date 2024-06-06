<?php 

/// SUPER CLASE
abstract class Login 
{
  public abstract function login();
} 


/**
 * 2 clases hijas
 */

class Eldiar extends Login{
    public function login()
    {
        /**
         * hara un proceso de login
         */
    }
}

class Jeremy extends Login{
    public function login()
    {
        /**
         * hara un proceso de login
         */
    }
}