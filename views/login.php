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
    <title>Login</title>
    <!-- 
    <script src="https://cdn.tailwindcss.com"></script>
   -->
   <link rel="stylesheet" href="./output.css">
</head>
<body class="bg-gray-900">
    <div class="flex justify-center my-4 w-full">
       <div class="shadow-lg shadow-black p-4 lg:w-80 md:60 w-[350px] bg-white">
         <h1 class="text-2xl mb-4">Login</h1>
          <div class="mt-3">
            <?php 
             if(isset($_SESSION["errors"])):
            ?>
            <?php foreach($_SESSION["errors"] as $error): ?>
                <span class="text-red-600"><?php echo $error; ?></span><br>
             <?php endforeach; ?>   
            <?php unset($_SESSION["errors"]); endif;?>

            <?php 
             if(isset($_SESSION["error_login"])):
            ?>
             <span class="text-red-600 font-bold"><?php echo $_SESSION["error_login"] ?></span> 
            <?php unset($_SESSION["error_login"]); endif;?>
          </div>
         <form action="../controlador/loginController.php" method="post">
         <input type="text" class="p-2 border border-blue-600 w-full mb-2
         focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg
         placeholder:italic font-bold" name="username"
         placeholder="Username...."
         value="<?php echo isset($_SESSblue["username"]) ? $_SESSION["username"]: '';unset($_SESSION["username"]) ?>">
         <input type="password" class="p-2 border border-blue-600 w-full mb-2
         focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg
         placeholder:italic font-bold" name="password" placeholder="Password....">
         <label for="">
            Recordar la sesión 
            <input type="checkbox" class="mb-2" name="remember">
         </label>
         <br>
         <button class="p-2 border-2 border-blue-500 bg-blue-400 hover:bg-blue-500
          rounded-lg text-white font-bold w-40 mx-auto block mt-2" name="entrar">Entrar</button>
         </form>
     </div>
     
        
    </div>
</body>
</html>