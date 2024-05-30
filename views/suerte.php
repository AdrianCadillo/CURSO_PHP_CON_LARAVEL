<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero de la suerte</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body>
    <div class="shadow-lg shadow-black  w-80 mx-auto my-4 p-4">
       <form action="../controlador/logicasuerte.php" method="post">
       <h1 class="lg:text-3xl md:text-2xl sm:text-xl font-bold
        text-blue-700 mb-4">Numero de la suerte</h1>
        <input type="date" name="fechanac" class="border border-blue-600 rounded-lg
        font-bold w-full p-2">

        <button class="p-2 border-2 border-blue-500 bg-blue-400 hover:bg-blue-500
          rounded-lg text-white font-bold w-40 mx-auto block mt-2">Calcular</button>
       </form>
    </div>
</body>
</html>