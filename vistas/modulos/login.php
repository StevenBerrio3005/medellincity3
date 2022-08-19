<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="vistas/img/logo1.png">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/css/adminlte.min.css">
  <link rel="stylesheet" href="vistas/css/producto.css">
    <!-------alertas de javascript sweetalert2 -->
  <link rel="stylesheet" href="vistas/css/sweetalert2.min.css">
  <script src="vistas/js/sweetalert2.all.min.js"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="vistas/img/logo1.png" class="profile-user-img img-fluid img-circle">
    <a href="../../index.php"><b>Medellincity</b>Mc</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Iniciar Sesion</p>

       <!--FORMULARIO INICIO DE SESION -->

      <form id="form-login" method="POST">
        <div class="input-group mb-3">
          <input id="user" name="user" type="text" class="form-control" placeholder="Usuario" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="pass" name="pass" type="password" class="form-control" placeholder="Ingrese Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="social-auth-links text-center mb-3">
          <button type="submit" href="#" class="btn btn-primary">
          Iniciar Sesion
          </button>
      </div>
      </form>
      <?php
        if(isset($_POST["user"])) {
          $user = $_POST["user"];
          $pass = $_POST["pass"];
          $objCon = new ConexionController();
          $objCon->ctrLogin($user, $pass);
        }
        
      ?>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="vistas/modulos/contraseña.php">¿Olvidaste la contraseña?</a>
      </p>
      <p class="mb-0">
        <a href="" class="text-center">Registrarse</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- jQuery -->
<script src="vistas/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="vistas/js/demo.js"></script>
<script src="vistas/js/bootstrap.min.js"></script>
<script src="vistas/js/producto.js"></script>




</body>
</html>
