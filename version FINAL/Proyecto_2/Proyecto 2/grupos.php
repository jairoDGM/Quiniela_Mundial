<html>
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Fase de Grupos</title>
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
                    <li><a href="grupos.php">Fase de Grupos</a></li>
                    <li><a href="octavos.php">Octavos</a></li>
                    <li><a href="cuartos.php">Cuartos</a></li>
                    <li><a href="semifinal.php">Semifinal</a></li>
                    <li><a href="final.php">Final</a></li>
                    <li><a href="Menu.php">Menu</a></li>
                </ul>
            </nav>
        </div>
    </header>   

<main class="main">
<?php

$link = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());

$query = "SELECT * FROM equipos ORDER BY grupo";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

$nombre_equipo="";
$grupo="";
$puesto_clasificatoria="";
$bandera="";
$pj=0;
$gf=0;
$gc=0;
$dif=0;
$pts=0;

$anterior = "";
$veces = 0;


while ($line = mysqli_fetch_array($result)) {

   $nombre_equipo=$line["nombre_equipo"];
   $grupo=$line["grupo"];
   $puesto_clasificatoria=$line["puesto_clasificatoria"];
   $bandera=$line["bandera"];
   $pj=$line["pj"];
   $gf=$line["gf"];
   $gc=$line["gc"];
   $dif=$line["dif"];
   $pts=$line["pts"];

  if($grupo != $anterior){
      if($veces == 0){ /** caso base */
          $anterior = $grupo;
          echo"<br><table class='table caption-top'>
            <caption>GRUPO $grupo</caption>
            <thead>
                <tr>
                <th scope='col'>Bandera</th>
                <th scope='col'>Nombre</th>
                <th scope='col'>pj</th>
                <th scope='col'>gf</th>
                <th scope='col'>gc</th>
                <th scope='col'>dif</th>
                <th scope='col'>pts</th>
                </tr>
            </thead>";

            echo "\t<tr>\n";
            echo "\t\t<td>$bandera</td>\n";
            echo "\t\t<td>$nombre_equipo</td>\n";
            echo "\t\t<td>$pj</td>\n";
            echo "\t\t<td>$gf</td>\n";
            echo "\t\t<td>$gc</td>\n";
            echo "\t\t<td>$dif</td>\n";
            echo "\t\t<td>$pts</td>\n";
            echo "\t</tr>\n";
            $veces = $veces + 1;
      }elseif($veces > 0){
          $veces = 1;
          
          $anterior = $grupo;
          echo"<table class='table caption-top'>
          <caption>GRUPO $grupo</caption>
          <thead>
          <tr>
          <th scope='col'>Bandera</th>
          <th scope='col'>Nombre</th>
          <th scope='col'>pj</th>
          <th scope='col'>gf</th>
          <th scope='col'>gc</th>
          <th scope='col'>dif</th>
          <th scope='col'>pts</th>
          </tr>
          </thead>";
          echo "\t<tr>\n";
          echo "\t\t<td>$bandera</td>\n";
            echo "\t\t<td>$nombre_equipo</td>\n";
            echo "\t\t<td>$pj</td>\n";
            echo "\t\t<td>$gf</td>\n";
            echo "\t\t<td>$gc</td>\n";
            echo "\t\t<td>$dif</td>\n";
            echo "\t\t<td>$pts</td>\n";
            echo "\t</tr>\n";
      }
    }elseif($grupo == $anterior){
        echo "\t<tr>\n";
        echo "\t\t<td>$bandera</td>\n";
        echo "\t\t<td>$nombre_equipo</td>\n";
        echo "\t\t<td>$pj</td>\n";
        echo "\t\t<td>$gf</td>\n";
        echo "\t\t<td>$gc</td>\n";
        echo "\t\t<td>$dif</td>\n";
        echo "\t\t<td>$pts</td>\n";
        echo "\t</tr>\n";
      $anterior = $grupo;
  }

}

echo "</table>\n\n<br><br><br>";

mysqli_close($link);


?>


   <br>
   </main>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<center><a href="grupos2.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Fechas Fase Grupos</a></center>
</html>