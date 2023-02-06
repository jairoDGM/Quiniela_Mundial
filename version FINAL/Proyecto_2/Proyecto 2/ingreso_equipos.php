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
                    <li><a href="ingreso_equipos.php">Ingreso Equipos</a></li>
                    <li><a href="ingreso_fechas.php">Ingreso Fechas</a></li>
                    <li><a href="Menu_admin.php">Menu</a></li>
                    <li><a href="index.html">Cerrar Sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>

<main class="main">
    <div class="container">
    <h1>INGRESO DATOS A BASE</h1>
</br>
    <h3>Equipos</h3>
    <p>----------------------------------------------------------------------------------</p>
</br>



<form class="col-12" action="verificaradmin.php" method="get">

    <div class="form-group">
        <label for="text">Nombre Equipo:</label>
        <input type="text" class="form-control" name="nombre_equipo">
    </div>
    <div class="form-group">
        <label for="text">Grupo:</label>
        <input type="text" class="form-control" name="grupo">
    </div>
    <div class="form-group">
        <label for="text">Puesto Clasificatoria:</label>
        <input type="text" class="form-control" name="puesto">
    </div>
    <div class="form-group">
        <label for="text">Bandera:</label>
        <input type="text" class="form-control" name="foto">
    </div>
    <div class="form-group">
        <label for="number">Partidos Jugados:</label>
        <input type="number" class="form-control" name="jugados">
    </div>
    <div class="form-group">
        <label for="number">Goles a Favor:</label>
        <input type="number" class="form-control" name="afavor">
    </div>
    <div class="form-group">
        <label for="number">Goles en Contra:</label>
        <input type="number" class="form-control" name="contra">
    </div>
    <div class="form-group">
        <label for="number">Diferencia Goles:</label>
        <input type="number" class="form-control" name="diferencia">
    </div>
    <div class="form-group">
        <label for="number">Puntos:</label>
        <input type="number" class="form-control" name="puntos">
    </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="guardar">Enviar</button>
    </div>
</form>

<p>----------------------------------------------------------------------------------</p>
    
</div>
</main>
    


    <footer class="footer">
        <div class="container">
            <p>Proyecto 2, Hecho por Abel Alvarez y Jairo Garcia</p>
        </div>
    </footer>


</body>
</html>