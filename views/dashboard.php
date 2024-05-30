<?php 
if(PHP_SESSION_ACTIVE !== session_status())
{
    session_start();
}

if(!isset($_SESSION["user_login"]) and !isset($_COOKIE["user_login"]) )
{
  header("location:./login.php");
  exit;
}

if(isset($_SESSION["user_login"]))
{
  $UsuarioAuthenticado = $_SESSION["user_login"];
}else{
  $UsuarioAuthenticado = openssl_decrypt($_COOKIE["user_login"],"AES-128-CBC","curso");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body>
  <h1 class="text-2xl">Bienvenido <?php echo  $UsuarioAuthenticado; ?></h1>  
</body>
</html>