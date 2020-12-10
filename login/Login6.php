<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nwind</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
     <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
  <main class="content">
    <div class="content_inner">
      <h1>Cruds BD Nwind</h1>
      <br><br>
      <div class="grid-login">
      <div class="content9">
            <h1>Soy Nuevo</h1>

              <form class="formulario" action="../ingreso/ingreso6.php" method="POST" onsubmit="return validarcita();">

                 <div class="contenedor">

                     <div class="input-contenedor">
                       <i class="fas fa-user icon"></i>
                       <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
                     </div>
                     
                     <div class="input-contenedor">
                       <i class="fas fa-key icon"></i>
                       <input type="password" name="password" id="password" placeholder="Password" required>
                     </div>

                     <input type="submit" value="Registrate" class="button">
                     <a href="../login/Login5.php" class="diseño3">Regresar</a>
                 </div>

            </form>


          </div>
      </div>
    </div>
  </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="js/main.js"></script>
<script src="../js/validarlogin.js"></script>  
</body>
</html>