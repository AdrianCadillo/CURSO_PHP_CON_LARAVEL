<?php 
if(PHP_SESSION_ACTIVE !== session_status())
{
    session_start();
}

$Credenciales = [
   "username" => "usuario",
   "password" => "123456"
];

if(isset($_POST["entrar"]))
{
    
    $Errors = [];
   /// validación de la entrada de datos
   if(empty($_POST["username"]))
   {
     $Errors[] = "Ingrese el campo username";
   }else{
    $_SESSION["username"] = $_POST["username"];
   }

   if(empty($_POST["password"]))
   {
     $Errors[] = "Ingrese el password";
   }


   if(count($Errors) > 0)
   {
    $_SESSION["errors"] = $Errors;
   }else{
    /// realizamos el proceso de login
     $Username = $_POST["username"];
     $Password = $_POST["password"];

     if($Username === $Credenciales["username"] and $Password === $Credenciales["password"])
     {
      $Remember =  isset($_POST["remember"]) ? true:false;

       if($Remember){
         setcookie("user_login",
         openssl_encrypt($Username,"AES-128-CBC","curso"),time()+45,"/");
       }else{
         /// hacer login
        $_SESSION["user_login"] = $Username;
       }
       header("location:../views/dashboard.php");
      exit;
     }else{
        $_SESSION["error_login"] = "credenciales incorrectos";
     }
   }

   header("location:../views/login.php");
}