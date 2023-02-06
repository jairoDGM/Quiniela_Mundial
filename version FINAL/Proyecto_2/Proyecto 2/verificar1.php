<html>
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Verificacion - Qatar 2022</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="estilos/estilos_index.css">
      <meta http-equiv="refresh" content="time; URL=https://www.google.com.gt/" />

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

$usuario=$_GET["nombre"]; /*esto es el CGI*/
$contrasena=$_GET["contrasena"];/*esto es el CGI*/

/**aca aparece como Ejemplo pero en phpadmyn esta como ejemplo, aca no importa porque las bases de datos
 * no son key sensitive*/
$link = mysqli_connect('localhost', 'root', '','proyecto2') or die('Could not connect: ' . mysqli_error());/**esto es el API */

$query = "SELECT * FROM Usuarios ";

$result = mysqli_query($link,$query) or die('Hubo un error: ' . mysqli_error($link));
echo " <br>"; /**esto es el CGI */
echo "Se obtuvieron correctamente los datos<br>"; /**esto es el CGI */
echo " <br>"; /**esto es el CGI */
echo "<br>"; /**esto es el CGI */
echo "Validando datos...<br>"; /**esto es el CGI */

$verificacion = false;
while($line = mysqli_fetch_array($result)){ 
    $contrasena2 = $line["Contrasena"];
    $usuario2 = $line["usuario"];
    
    if($usuario2 == $usuario){
        if($contrasena2 == $contrasena){
            echo"<script src=https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js></script>
            <lottie-player src=https://assets6.lottiefiles.com/packages/lf20_n7jwyqom.json  background=transparent  speed=0.5  style=width: 100px; height: 100px;  loop  autoplay></lottie-player>";
            echo "<br>"; /**esto es el CGI */
            echo "\t\t<td>
                <a class=btn btn-primary href=Menu.php role=button>Ingresar</a>
                </td>\n";
            echo "\t</tr>\n";
            
            $verificacion = false;
            break;
        }else{
            $verificacion = true;
        }
    }else{
        $verificacion = true;
    }
    
};
if($verificacion == true){
    echo"<script src=https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js></script>
    <lottie-player src=https://assets3.lottiefiles.com/packages/lf20_pqpmxbxp.json  background=transparent  speed=1  style=width: 300px; height: 300px;  loop  autoplay></lottie-player>";
    echo "<br>"; /**esto es el CGI */
    echo"La contraseña o el usuario son incorrectos, intente de nuevo<br>";
    echo "<br>"; /**esto es el CGI */
    echo"<a class=btn btn-primary href=index.html role=button>REINTENTAR</a>";
    echo "<br>"; /**esto es el CGI */
}

mysqli_close($link);


?> <!--fin del codigo ejecutable de php-->

</div>
</div>
</div>

  </body>
</html>