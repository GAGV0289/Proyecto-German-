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
      <div class="grid">
      <div class="content8">
            <h1>Ya Soy Cliente</h1>

              <form class="formulario" action="../ingreso/ingreso9.php" method="POST" onsubmit="return validarcita2();">

                 <div class="contenedor">

                     <div class="input-contenedor">
                       <i class="fas fa-user icon"></i>
                       <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
                     </div>
                     
                     <div class="input-contenedor">
                       <i class="fas fa-key icon"></i>
                       <input type="password" name="password" id="password" placeholder="Password" required>
                     </div>

                     <input type="submit" value="Inicia Sesión" class="button">

                 </div>

            </form>

   </div>
         
          <div class="content8">
            <h1>No tienes una Cuenta</h1>
            <p class="tienes-unacuenta">Registrate en tan solo 2 pasos para que puedas modificar 
              el crud que escogiste para agregar, 
              editar y borrar algun dato que se encuentra en la base de datos.</p><br><br>
            <a href="../login/Login10.php" class="diseño2">¡Vamos!</a>
          </div> </div>
   
    </div>
  </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="../js/mainlogin.js"></script>
</body>
</html>