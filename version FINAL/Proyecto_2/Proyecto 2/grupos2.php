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
  <div class="container">
<?php

$link = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());

$query = "SELECT * FROM equipos ORDER BY grupo";

$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));

$nombre_equipo="";
$grupo="";
$puesto_clasificatoria="";

$anterior = "";
$veces = 0;


while ($line = mysqli_fetch_array($result)) {

   $nombre_equipo=$line["nombre_equipo"];
   $grupo=$line["grupo"];
   $puesto_clasificatoria=$line["puesto_clasificatoria"];

  if($grupo != $anterior){
      if($veces == 0){ /** caso base */
          $anterior = $grupo;
          echo"<table class='table caption-top'>
            <caption>GRUPO $grupo</caption>
            <thead>
                <tr>
                <th scope='col'>Equipo Local</th>
                <th scope='col'>Equipo Visitante</th>
                <th scope='col'>Fecha</th>
                <th scope='col'>hora</th>
                <th scope='col'>Lugar</th>
                <th scope='col'>Estadio</th>
                <th scope='col'>Numero de Partido</th>
                </tr>
            </thead>";

          if($puesto_clasificatoria == 'grupo'){ /**PARA QUE FUNCIONES SE TIENE QUE IDENTIFICAR CON "GRUPO" */
            $link2 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
            $query2 = "SELECT * FROM equipo1";
            $result2 = mysqli_query($link2,$query2) or die('Query failed: ' . mysqli_error($link2));

            $nombre_equipo2 = '';
            $numero_partido2 = 0;
            while ($line2 = mysqli_fetch_array($result2)) {
              $nombre_equipo2=$line2["nombre_equipo"];
              $numero_partido2=$line2["numero_partido"];

              if($nombre_equipo == $nombre_equipo2){
                $link3 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
                $query3 = "SELECT * FROM equipo2";
                $result3 = mysqli_query($link3,$query3) or die('Query failed: ' . mysqli_error($link3));
                
                $nombre_equipo3 = '';
                $numero_partido3 = 0;
                while ($line3 = mysqli_fetch_array($result3)) {
                  $nombre_equipo3=$line3["nombre_equipo"];
                  $numero_partido3=$line3["numero_partido"];

                  if($numero_partido2 == $numero_partido3){
                    $link4 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
                    $query4 = "SELECT * FROM partidos";
                    $result4 = mysqli_query($link4,$query4) or die('Query failed: ' . mysqli_error($link4));

                    $fecha_partido;
                    $hora = 0.0;
                    $numero_partido4 = 0;
                    while ($line4 = mysqli_fetch_array($result4)) {
                      $fecha_partido=$line4["fecha_partido"];
                      $hora=$line4["hora"];
                      $numero_partido4=$line4["numero_partido"];

                      if($numero_partido4 == $numero_partido2){
                        break;
                      }
                    }

                    $link5 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
                    $query5 = "SELECT * FROM relacion_juega";
                    $result5 = mysqli_query($link5,$query5) or die('Query failed: ' . mysqli_error($link5));

                    $numero_partido5 = 0;
                    $nombre_estadio = "";
                    $lugar = "";
                    while ($line5 = mysqli_fetch_array($result5)) {
                      $numero_partido5=$line5["numero_partido"];
                      $nombre_estadio=$line5["nombre_estadio"];

                      if($numero_partido5 == $numero_partido4){
                        $link6 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
                        $query6 = "SELECT * FROM estadios";
                        $result6 = mysqli_query($link6,$query6) or die('Query failed: ' . mysqli_error($link6));
    
             
                        while ($line6 = mysqli_fetch_array($result6)) {
                          $lugar=$line6["lugar"];
                          $nombre_estadio2=$line6["nombre_estadio"];
                          if($nombre_estadio == $nombre_estadio2){

                            echo "\t<tr>\n";
                            echo "\t\t<td>$nombre_equipo</td>\n";
                            echo "\t\t<td>$nombre_equipo3</td>\n";
                            echo "\t\t<td>$fecha_partido</td>\n";
                            echo "\t\t<td>$hora</td>\n";
                            echo "\t\t<td>$lugar</td>\n";
                            echo "\t\t<td>$nombre_estadio</td>\n";
                            echo "\t\t<td>$numero_partido4</td>\n";
                            echo "\t</tr>\n";
                          }
                        }
                        mysqli_close($link6);
                      }
                    }
                   
                    mysqli_close($link4);
                    mysqli_close($link5);
                  }
                }
              mysqli_close($link3);
              }
            }

            mysqli_close($link2);
          }
          

            $veces = $veces + 1;
      }elseif($veces > 0){
          $veces = 1;
          
          $anterior = $grupo;
          echo"<table class='table caption-top'>
            <caption>GRUPO $grupo</caption>
            <thead>
                <tr>
                <th scope='col'>Equipo Local</th>
                <th scope='col'>Equipo Visitante</th>
                <th scope='col'>Fecha</th>
                <th scope='col'>hora</th>
                <th scope='col'>Lugar</th>
                <th scope='col'>Estadio</th>
                <th scope='col'>Numero de Partido</th>
                </tr>
            </thead>";

        if($puesto_clasificatoria == 'grupo'){
          $link2 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
          $query2 = "SELECT * FROM equipo1";
          $result2 = mysqli_query($link2,$query2) or die('Query failed: ' . mysqli_error($link2));

          $nombre_equipo2 = '';
          $numero_partido2 = 0;
          while ($line2 = mysqli_fetch_array($result2)) {
            $nombre_equipo2=$line2["nombre_equipo"];
            $numero_partido2=$line2["numero_partido"];

            if($nombre_equipo == $nombre_equipo2){
              $link3 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
              $query3 = "SELECT * FROM equipo2";
              $result3 = mysqli_query($link3,$query3) or die('Query failed: ' . mysqli_error($link3));
              
              $nombre_equipo3 = '';
              $numero_partido3 = 0;
              while ($line3 = mysqli_fetch_array($result3)) {
                $nombre_equipo3=$line3["nombre_equipo"];
                $numero_partido3=$line3["numero_partido"];

                if($numero_partido2 == $numero_partido3){
                  $link4 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
                  $query4 = "SELECT * FROM partidos";
                  $result4 = mysqli_query($link4,$query4) or die('Query failed: ' . mysqli_error($link4));

                  $fecha_partido;
                  $hora = 0.0;
                  $numero_partido4 = 0;
                  while ($line4 = mysqli_fetch_array($result4)) {
                    $fecha_partido=$line4["fecha_partido"];
                    $hora=$line4["hora"];
                    $numero_partido4=$line4["numero_partido"];

                    if($numero_partido4 == $numero_partido2){
                      break;
                    }
                  }
                  $link5 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
                    $query5 = "SELECT * FROM relacion_juega";
                    $result5 = mysqli_query($link5,$query5) or die('Query failed: ' . mysqli_error($link5));

                    $numero_partido5 = 0;
                    $nombre_estadio = "";
                    $lugar = "";
                    while ($line5 = mysqli_fetch_array($result5)) {
                      $numero_partido5=$line5["numero_partido"];
                      $nombre_estadio=$line5["nombre_estadio"];

                      if($numero_partido5 == $numero_partido4){
                        $link6 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
                        $query6 = "SELECT * FROM estadios";
                        $result6 = mysqli_query($link6,$query6) or die('Query failed: ' . mysqli_error($link6));
    
                        while ($line6 = mysqli_fetch_array($result6)) {
                       
                            $lugar=$line6["lugar"];
                        
                        }
                        mysqli_close($link6);
                      }
                    }
                  echo "\t<tr>\n";
                  echo "\t\t<td>$nombre_equipo</td>\n";
                  echo "\t\t<td>$nombre_equipo3</td>\n";
                  echo "\t\t<td>$fecha_partido</td>\n";
                  echo "\t\t<td>$hora</td>\n";
                  echo "\t\t<td>$lugar</td>\n";
                  echo "\t\t<td>$nombre_estadio</td>\n";
                  echo "\t\t<td>$numero_partido4</td>\n";
                  echo "\t</tr>\n";
                  mysqli_close($link4);
                }
              }
              mysqli_close($link3);
            }
          }

          mysqli_close($link2);
        }
      }
  }elseif($grupo == $anterior){
    if($puesto_clasificatoria == 'grupo'){
      $link2 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
      $query2 = "SELECT * FROM equipo1";
      $result2 = mysqli_query($link2,$query2) or die('Query failed: ' . mysqli_error($link2));

      $nombre_equipo2 = '';
      $numero_partido2 = 0;
      while ($line2 = mysqli_fetch_array($result2)) {
        $nombre_equipo2=$line2["nombre_equipo"];
        $numero_partido2=$line2["numero_partido"];

        if($nombre_equipo == $nombre_equipo2){
          $link3 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
          $query3 = "SELECT * FROM equipo2";
          $result3 = mysqli_query($link3,$query3) or die('Query failed: ' . mysqli_error($link3));
          
          $nombre_equipo3 = '';
          $numero_partido3 = 0;
          while ($line3 = mysqli_fetch_array($result3)) {
            $nombre_equipo3=$line3["nombre_equipo"];
            $numero_partido3=$line3["numero_partido"];

            if($numero_partido2 == $numero_partido3){
              $link4 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
              $query4 = "SELECT * FROM partidos";
              $result4 = mysqli_query($link4,$query4) or die('Query failed: ' . mysqli_error($link4));

              $fecha_partido;
              $hora = 0.0;
              $numero_partido4 = 0;
              while ($line4 = mysqli_fetch_array($result4)) {
                $fecha_partido=$line4["fecha_partido"];
                $hora=$line4["hora"];
                $numero_partido4=$line4["numero_partido"];

                if($numero_partido4 == $numero_partido2){
                  break;
                }
              }
              $link5 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
                    $query5 = "SELECT * FROM relacion_juega";
                    $result5 = mysqli_query($link5,$query5) or die('Query failed: ' . mysqli_error($link5));

                    $numero_partido5 = 0;
                    $nombre_estadio = "";
                    $lugar = "";
                    while ($line5 = mysqli_fetch_array($result5)) {
                      $numero_partido5=$line5["numero_partido"];
                      $nombre_estadio=$line5["nombre_estadio"];

                      if($numero_partido5 == $numero_partido4){
                        $link6 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
                        $query6 = "SELECT * FROM estadios";
                        $result6 = mysqli_query($link6,$query6) or die('Query failed: ' . mysqli_error($link6));
    
                     
                        while ($line6 = mysqli_fetch_array($result6)) {
                      
                            $lugar=$line6["lugar"];
                      
                        }
                        mysqli_close($link6);
                      }
                    }
              echo "\t<tr>\n";
              echo "\t\t<td>$nombre_equipo</td>\n";
              echo "\t\t<td>$nombre_equipo3</td>\n";
              echo "\t\t<td>$fecha_partido</td>\n";
              echo "\t\t<td>$hora</td>\n";
              echo "\t\t<td>$lugar</td>\n";
              echo "\t\t<td>$nombre_estadio</td>\n";
              echo "\t\t<td>$numero_partido4</td>\n";
              echo "\t</tr>\n";
              mysqli_close($link4);
            }
          }
          mysqli_close($link3);
        }
      }

    mysqli_close($link2);

    }
        $anterior = $grupo;
      }
      
    }
    
    echo "</table>\n\n<br><br><br>";
    
    mysqli_close($link);
    
    
?>


   <br>
  </div>
  </main>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>