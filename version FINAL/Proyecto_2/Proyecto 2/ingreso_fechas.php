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
    <h1>INGRESO FECHAS</h1>
</br>
    <h3>Equipos</h3>
    <p>----------------------------------------------------------------------------------</p>
</br>
<form class="col-12" action="verificarfechas.php" method="get">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Equipo 1</h5>
        <div class="form-group">
            <input type="text" class="form-control" name="equipo1">
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Equipo 2</h5>
        <div class="form-group">
            
            <input type="text" class="form-control" name="equipo2">
        </div>
        
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Fecha</h5>
        <div class="form-group">
           
            <input type="date" class="form-control" name="fecha">
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Hora</h5>
        <div class="form-group">
            <input type="text" class="form-control" name="hora">
        </div>
        
      </div>
    </div>
  </div>
</div>
<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">Numero Partido</h5>
    <div class="form-group">
        <center><input type="text" class="form-control" name="partido"></center>
    </div>
  </div>
</div>

</div>
    </div>
  </div>
</div>
<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">Nombre Estadio</h5>
    <div class="form-group">
        <center><input type="text" class="form-control" name="estadio"></center>
    </div>
  </div>
</div>

</div>
    </div>
  </div>
</div>
<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">lugar</h5>
    <div class="form-group">
        <center><input type="text" class="form-control" name="lugar"></center>
    </div>
  </div>
</div>




<p>----------------------------------------------------------------------------------</p>

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