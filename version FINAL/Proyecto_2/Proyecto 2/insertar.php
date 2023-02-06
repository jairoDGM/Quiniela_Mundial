<?php
$usuario=$_GET["usuaritos"];
$gol1=$_GET["gol_local"];
$gol2=$_GET["gol_visitante"];
$numero_partido=$_GET["numero_partido"];

$link = mysqli_connect('localhost', 'root', '', 'proyecto2') or die('Could not connect: ' . mysqli_error());
$query = "INSERT INTO relacion_quiniela VALUES ($gol1,$gol2,null,'$usuario',$numero_partido)";
$result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));
echo"$result";

echo"<a class=btn btn-primary href=Menu.php role=button>REGRESAR</a>";

mysqli_close($link);

?>