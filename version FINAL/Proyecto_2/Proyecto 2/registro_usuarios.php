<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Registro Usuarios - Qatar 2022</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="estilos/estilos_registro.css"></link>
  
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
    <div class="modal-dialog text-center">
      <div class="col-sm-12 main-section">
        <div class="modal-content">

<?php

$usuario=$_GET["usuario"]; /*esto es el CGI*/
$nombre=$_GET["nombre"]; /*esto es el CGI*/
$contrasena=$_GET["contrasena"];/*esto es el CGI*/

$link = mysqli_connect('localhost', 'root', '','proyecto2') or die('Could not connect: ' . mysqli_error());/**esto es el API */

$query = "INSERT INTO usuarios VALUES ('$nombre','$contrasena','$usuario',0,0,0,0)";
$result = mysqli_query($link,$query) or die('Hubo un error: ' . mysqli_error($link));
echo "Se ingresaron correctamente sus datos<br>"; /**esto es el CGI */
echo "<br>"; /**esto es el CGI */
echo "<script src=https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js></script>
<lottie-player src=https://assets3.lottiefiles.com/packages/lf20_9cyyl8i4.json  background=transparent  speed=1  style=width: 300px; height: 300px;  loop  autoplay></lottie-player>"; /**esto es el CGI */

?>

<br>
<center><a href="index.html" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">INICIAR SESION</a></center>
<br> 
</div>
</div>
</div>

  
</body>
</html>