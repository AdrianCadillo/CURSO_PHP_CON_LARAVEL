<?php

use request\Authenticate;
use request\Request;
require './request/Request.php';
require './request/Authenticate.php';
class CategoriaController 
{
  use Request,Authenticate;
}

$categoria = new CategoriaController;

echo $categoria->post("apellidos");