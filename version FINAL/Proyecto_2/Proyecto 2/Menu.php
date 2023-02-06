<html>
<head>
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Menu Seleccion - Qatar 2022</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="estilos/estilos4.css">

      <!-- JQUERY -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!--FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

      <!-- Los iconos tipo Solid de Fontawesome-->
      <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
      <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>





<body class="p-5">
    <header class="header">
        <div class="container logo-navegacion">
            <a href="#" class="logo">QATAR 2022</a>
            <nav class="navigation">
                <ul>
            
                    <li><a href="Quiniela.php"> Quiniela</a></li>
                    <li><a href="grupos.php"> Horarios</a></li>
                    <li><a href="tabla_puntos.php">Tabla Puntos</a></li>
                    <li><a href="index.html">Cerrar Sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>
</form>





<main class="main">
    <div class="container">
    <h1>PAISES CLASIFICADOS</h1>
</br>
    <table class="table">
        
  <thead>
    <tr>

      <th scope="col">NOMBRE</th>


    </tr>
  </thead>
<?php



$link = mysqli_connect('localhost', 'root', '','proyecto2') or die('Could not connect: ' . mysqli_error());/**esto es el API */

$query = "SELECT * FROM equipos ";
$result = mysqli_query($link,$query) or die('Hubo un error: ' . mysqli_error($link));

while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    $Bandera=$line["bandera"];
    $NombreE=$line["nombre_equipo"];

 
    echo "\t<tr>\n";

    echo "\t\t<td>$NombreE</td>\n";

    echo "\t</tr>\n";
 }
 echo "</table>\n";
 
 
 mysqli_close($link);

?>
    
</div>
</main>
    

    <footer class="footer">
        <div class="container">
            <p>Proyecto 2, Hecho por Abel Alvarez y Jairo Garcia</p>
        </div>
    </footer>


</body>
</html>