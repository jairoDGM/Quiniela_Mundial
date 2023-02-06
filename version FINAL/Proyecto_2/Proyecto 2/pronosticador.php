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

<?php
$usuario="";
$nombre="";
$equipo1=$_GET["nombre_equipo1"];
$equipo2=$_GET["nombre_equipo2"];
$numero_partido=$_GET["numero_partido"];
$link = mysqli_connect('localhost', 'root', '', 'proyecto2' ) or die('Could not connect: ' . mysql_error());
$query = "select * from usuarios order by nombre";

?>
  <header class="header">
        <div class="container logo-navegacion">
            
            <a href="#" class="logo">QATAR 2022</a>
            <nav class="navigation">
                <ul>
                    <li><a href="quiniela.php">Pronosticar Fase de Grupos</a></li>
                    <li><a href="octavosprono.php">Pronosticar Octavos</a></li>
                    <li><a href="cuartosprono.php">Pronosticar Cuartos</a></li>
                    <li><a href="semifinalprono.php">Pronosticar Semifinal</a></li>
                    <li><a href="finalprono.php">Pronsoticar Final</a></li>
                    <li><a href="Menu.php">Menu </a></li>
                    
                </ul>
            </nav>
        </div>
    </header>   
    <main class="main">
    <form class='col-12' action='insertar.php' method='get'>
    Seleccionar Usuario:<select class="form-select" aria-label="Default select example" name=usuaritos>
 

<?php

$result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));
while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $usuario=$line["usuario"];
    $nombre=$line["nombre"];
    $Contrasena=$line["Contrasena"];
    echo "<option value=$usuario>$usuario</option>\n";
}

echo "--------------------------------------------------------------------------------";
echo"<br><table class='table caption-top'>
<caption>Ingreso datos</caption>
<thead>
<tr>
<th scope='col'>Equipo Local</th>
<th scope='col'>Equipo Visitante</th>
<th scope='col'>Goles Local</th>
<th scope='col'>Goles Visitante</th>
</tr>
</thead>";

echo "\t<tr>\n";
echo "\t\t<td>$equipo1</td>\n";
echo "\t\t<td>$equipo2</td>\n";
echo "\t\t<td><input type='number' class='form-control' placeholder='cantidad goles' name='gol_local'/></td>\n";
echo "\t\t<td><input type='number' class='form-control' placeholder='cantidad goles' name='gol_visitante'/></td>\n";
echo "\t\t<input type='hidden' class='form-control' name='equipo1' value=$equipo1>\n";
echo "\t\t<input type='hidden' class='form-control' name='equipo2' value=$equipo2>\n";
echo "\t\t<input type='hidden' class='form-control' name='numero_partido' value=$numero_partido>\n";
echo"<button type='submit' class='btn btn-primary'> ";
echo"<i class='fas fa-sign-in-alt'></i>  Ingresar";
echo"</form>";
echo "\t</tr>\n";
echo "</table>\n";
?>
</select>
<br>
</main>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>