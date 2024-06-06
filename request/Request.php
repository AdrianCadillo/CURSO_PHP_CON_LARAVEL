<?php
namespace request;

trait Request 
{
    /**
     * Propiedades y acciones
     */

     public function post(string $NameInput)
     {
       if(isset($_POST[$NameInput])):
         return $_POST[$NameInput];
       endif;

       return null;
     }

     public function get(string $NameInput)
     {
       if(isset($_GET[$NameInput])):
         return $_GET[$NameInput];
       endif;

       return null;
     }

     public function request(string $NameInput)
     {
       if(isset($_REQUEST[$NameInput])):
         return $_REQUEST[$NameInput];
       endif;

       return null;
     }
}