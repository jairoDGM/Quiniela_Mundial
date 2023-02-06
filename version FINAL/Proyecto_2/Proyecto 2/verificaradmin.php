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

$equipo=$_GET["nombre_equipo"]; /*esto es el CGI*/
$grupo=$_GET["grupo"]; /*esto es el CGI*/
$puesto=$_GET["puesto"]; /*esto es el CGI*/
$bandera=$_GET["foto"]; /*esto es el CGI*/
$pj=$_GET["jugados"]; /*esto es el CGI*/
$gf=$_GET["afavor"]; /*esto es el CGI*/
$gc=$_GET["contra"];/*esto es el CGI*/
$dif=$_GET["diferencia"];/*esto es el CGI*/
$pts=$_GET["puntos"];/*esto es el CGI*/

$link = mysqli_connect('localhost', 'root', '','proyecto2') or die('Could not connect: ' . mysqli_error());/**esto es el API */

$query = "INSERT INTO equipos VALUES ('$equipo','$grupo','$puesto','$bandera',$pj,$gf,$gc,$dif,$pts)";
$result = mysqli_query($link,$query) or die('Hubo un error: ' . mysqli_error($link) );
echo "Se ingresaron correctamente sus datos<br>"; /**esto es el CGI */
echo "<br>"; /**esto es el CGI */
echo "<script src=https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js></script>
<lottie-player src=https://assets3.lottiefiles.com/packages/lf20_9cyyl8i4.json  background=transparent  speed=1  style=width: 300px; height: 300px;  loop  autoplay></lottie-player>"; /**esto es el CGI */

?>

<center><a class="btn btn-primary" href="Menu_admin.php" role="button">Regresar</a></center>
    
</div>
</main>
    

    <footer class="footer">
        <div class="container">
            <p>Proyecto 2, Hecho por Abel Alvarez y Jairo Garcia</p>
        </div>
    </footer>


</body>
</html>