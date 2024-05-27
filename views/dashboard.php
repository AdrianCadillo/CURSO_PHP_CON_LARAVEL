<?php 
if(PHP_SESSION_ACTIVE !== session_status())
{
    session_start();
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
  <h1 class="text-2xl">Bienvenido <?php echo isset($_SESSION["user_login"]) ? $_SESSION["user_login"]:"" ?></h1>  
</body>
</html>