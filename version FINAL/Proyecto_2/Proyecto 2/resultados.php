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
                    <li><a href="resultados.php">Resultados Fase de Grupos</a></li>
                    <li><a href="octavosadmin.php">Pronosticar Octavos</a></li>
                    <li><a href="cuartosadmin.php">Pronosticar Cuartos</a></li>
                    <li><a href="semifinaladmin.php">Pronosticar Semifinal</a></li>
                    <li><a href="finaladmin.php">Pronsoticar Final</a></li>
                    <li><a href="Menu_admin.php">Menu</a></li>
              
                </ul>
            </nav>
        </div>
    </header>   
</form>
    <main class="main">
      
<?php

echo"<br><table class='table caption-top'>
<caption>FASE DE GRUPOS</caption>

<thead>
    <tr>
    <th scope='col'>Equipo Local</th>
    <th scope='col'>Equipo Visitante</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>hora</th>
    <th scope='col'>Lugar</th>
    <th scope='col'>Estadio</th>
    <th scope='col'>Numero de Partido</th>
    <th scope='col'>Pronosticar</th>
    </tr>
</thead>";

  $link = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
  $query = "SELECT * FROM equipos ORDER BY grupo";
  $result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));
  
  $nombre_equipo="";
  $puesto_clasificatoria="";
  while ($line = mysqli_fetch_array($result)) {
    $puesto_clasificatoria=$line["puesto_clasificatoria"];
    $nombre_equipo=$line["nombre_equipo"];

    if($puesto_clasificatoria == 'grupo'){/**PARA IDENTIFICAR INGRESAR "OCTAVOS" */
      $link2 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
      $query2 = "SELECT * FROM equipo1";
      $result2 = mysqli_query($link2,$query2) or die('Query failed: ' . mysqli_error($link2));

      $nombre_equipo2 = '';
      $numero_partido2 = 0;
      while ($line2 = mysqli_fetch_array($result2)){
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
              $hora = "";
              $numero_partido4 = 0;
              while ($line4 = mysqli_fetch_array($result4)) {
                $fecha_partido=$line4["fecha_partido"];
                $hora=$line4["hora"];
                $numero_partido4=$line4["numero_partido"];
        
                if($numero_partido4 == $numero_partido2){
                
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
                            echo "\t\t<td>
                            <form class='col-12' action='pronosticadoradmin.php' method='get'>
                                <input type='hidden' class='form-control' name='nombre_equipo1' value=$nombre_equipo>
                                <input type='hidden' class='form-control' name='nombre_equipo2' value=$nombre_equipo3>
                                <input type='hidden' class='form-control' name='numero_partido' value=$numero_partido4>
                                <button type='submit' class='btn btn-primary'>
                                <i class='fas fa-sign-in-alt'></i>  Ingresar
                            </form>
                            </td>\n";
                            echo "\t</tr>\n";
                          }
                      }
                    
                      mysqli_close($link6);
                    }
                  }
                  mysqli_close($link5);
                }
              }
              mysqli_close($link4);
            }
          }
          
          mysqli_close($link3);
        }
      }





      mysqli_close($link2);
   
     
    
    }
  }
  mysqli_close($link);
?>


   <br>
   </main>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>