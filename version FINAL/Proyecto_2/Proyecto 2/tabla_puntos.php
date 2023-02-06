<html>
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Posiciones Quiniela</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="estilos/estilos3.css"></link>
  
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

    </head>
    <body class="p-5">
  <header class="header">
        <div class="container logo-navegacion">
            <a href="#" class="logo">QATAR 2022</a>
            <nav class="navigation">
                <ul>
                    <li><a href="Menu.php">Menu</a></li>
                </ul>
            </nav>
        </div>
    </header>   

<main class="main">
    <div class="container">

  <table class="table caption-top">
  <caption>Punteo de Usuarios</caption>
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Usuario</th>
      <th scope="col"> Puntos Fase 1</th>
      <th scope="col"> Puntos Fase 2</th>
      <th scope="col"> Puntos Fase 3</th>
      <th scope="col"> Puntos Fase 4</th>
      <th scope="col"> Puntos Totales</th>

    </tr>
  </thead>

<?php

$link = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());

$query = "SELECT * FROM Usuarios";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

$nombre="";
$usuario="";
$pts1=0;
$pts2=0;
$pts3=0;
$pts4=0;
$ptsTotal=0;


while ($line = mysqli_fetch_array($result)) {

   $nombre=$line["nombre"];
   $usuario=$line["usuario"];
   $pts1=$line["pts_fase1"];
   $pts2=$line["pts_fase2"];
   $pts3=$line["pts_fase3"];
   $pts4=$line["pts_fase4"];
   $ptsTotal=$pts1 + $pts2 + $pts3 + $pts4;

   echo "\t<tr>\n";
   echo "\t\t<td>$nombre</td>\n";
   echo "\t\t<td>$usuario</td>\n";
   echo "\t\t<td>$pts1</td>\n";
   echo "\t\t<td>$pts2</td>\n";
   echo "\t\t<td>$pts3</td>\n";
   echo "\t\t<td>$pts4</td>\n";
   echo "\t\t<td>$ptsTotal</td>\n";
   echo "\t</tr>\n";
}
echo "</table>\n";


mysqli_close($link);


?>


</main>
</div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>