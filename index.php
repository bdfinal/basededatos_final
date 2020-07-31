<!DOCTYPE html>
<html lang="en">
<head>
   <?php include_once('includes/header.php')?>
    <title>Pandémicos!!!</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center" style="height:100vh">
    <div class="col-4">
      <div class="card">
        <div class="card-body">
        <form action="validacion_usuarios.php" method="POST" name="login">
            <div class="form-group">
            <label for="pwd">Usuario:</label>
            <input type="text" class="form-control" name="usuario" id="usuario">
            </div>
        <div class="form-group">
        <label for="pwd">Contraseña:</label>
          <input type="password" class="form-control" name="password" id="password">
          </div>
            <button type="submit" id="btn" class="btn btn-primary" value="login">Ingresar</button>
              </form>
            </div>
            </div>
            </div>
        </div>
    </div>


<?php include_once('includes/script.php');?>
</body>
</html>