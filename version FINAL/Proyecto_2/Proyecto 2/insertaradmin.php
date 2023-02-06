<?php

$gol1=$_GET["gol_local"];
$gol2=$_GET["gol_visitante"];
$equipo1=$_GET["equipo1"];
$equipo2=$_GET["equipo2"];
$numero_partido=$_GET["numero_partido"];

$link = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
$link2 = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
$query = "UPDATE equipo1 SET goles = $gol1 WHERE nombre_equipo = '$equipo1';";
$query2 = "UPDATE equipo2 SET goles = $gol2 WHERE nombre_equipo = '$equipo2';";
$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));
$result2 = mysqli_query($link2,$query2) or die('Query failed: ' . mysqli_error($link2));
echo"$result";
echo"$result2";

echo"<a class=btn btn-primary href=Menu_admin.php role=button>REGRESAR</a>";

mysqli_close($link);
mysqli_close($link2);


?>