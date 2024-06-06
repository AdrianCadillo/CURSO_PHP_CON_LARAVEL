<?php

/// superClase
abstract class Clase{

    public abstract function Attemp(array $credentials =[]):bool;

    public function logout()
    {
        /**
         * Proceso de cerrar session
         */
    }
}


class Login extends Clase 
{
    private array $credentialsLogin;

    public function __construct()
    {
        $this->credentialsLogin = [
            "usuario" => "login",
            "password" => password_hash("123456",PASSWORD_BCRYPT)
        ];
    }
    /**
     * Método para realziar login
     */
    public function Attemp(array $credentials =[]):bool
    {
       return $this->credentialsLogin["usuario"] === $credentials["usuario"]
              and password_verify($credentials["password"],$this->credentialsLogin["password"]);
    }
}

$login = new Login;

$credecialesUser = [
    "usuario" => "login",
    "password" => "1234567"
];

echo $login->Attemp($credecialesUser) ? 'Bienvenido al sistema':'Error en las credenciales';