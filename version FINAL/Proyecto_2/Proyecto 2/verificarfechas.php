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
      <link rel="stylesheet" type="text/css" href="estilos/estilos3.css">

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

                    <li><a href="index.html">Cerrar Sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>

<main class="main">
    <div class="container">


<?php

$equipo1=$_GET["equipo1"]; /*esto es el CGI*/
$equipo2=$_GET["equipo2"]; /*esto es el CGI*/
$fecha=$_GET["fecha"]; /*esto es el CGI*/
$hora=$_GET["hora"]; /*esto es el CGI*/
$guardar=$_GET["guardar"];
$partido=$_GET["partido"];
$estadio=$_GET["estadio"];
$lugar=$_GET["lugar"];

$link = mysqli_connect('localhost', 'root', '','proyecto2') or die('Could not connect: ' . mysqli_error());/**esto es el API */

if($guardar==""){
    $query = "INSERT INTO partidos VALUES ('$fecha', '$hora', $partido)";
    $query1 = "INSERT INTO equipo1 VALUES (0, '$equipo1', $partido)";
    $query2 = "INSERT INTO equipo2 VALUES (0, '$equipo2', $partido)";
    $query3 = "INSERT INTO estadios VALUES ('$lugar', '$estadio')";
    $query4 = "INSERT INTO relacion_juega VALUES ($partido, '$estadio')";
}



$result = mysqli_query($link,$query) or die('Hubo un error: ' . mysqli_error($link));
$result1 = mysqli_query($link,$query1) or die('Hubo un error: ' . mysqli_error($link));
$result2 = mysqli_query($link,$query2) or die('Hubo un error: ' . mysqli_error($link));
$result3 = mysqli_query($link,$query3) or die('Hubo un error: ' . mysqli_error($link));
$result4 = mysqli_query($link,$query4) or die('Hubo un error: ' . mysqli_error($link));
echo "Se ingresaron correctamente sus datos<br>"; /**esto es el CGI */
echo "<br>"; /**esto es el CGI */
echo "<script src=https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js></script>
<lottie-player src=https://assets3.lottiefiles.com/packages/lf20_9cyyl8i4.json  background=transparent  speed=1  style=width: 300px; height: 300px;  loop  autoplay></lottie-player>"; /**esto es el CGI */

?>

<center><a class="btn btn-primary" href="ingreso_fechas.php" role="button">Regresar</a></center>
    
</div>
</main>
    

    <footer class="footer">
        <div class="container">
            <p>Proyecto 2, Hecho por Abel Alvarez y Jairo Garcia</p>
        </div>
    </footer>


</body>
</html>