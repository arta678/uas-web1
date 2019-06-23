<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <meta charset="utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <div class="page login-page ">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>LOGIN</span><strong class="text-primary">SIBASAH</strong></div>

            <form method="post" class="text-left form-validate">
              <div class="form-group-material">
                <label for="login-username" class="label-material">Username</label>
                <input id="login-username" type="text" name="inp_user_nm" required  class="input-material wr-text-input">
                
              </div>
              <div class="form-group-material">
                <label for="login-password" class="label-material">Password</label>
                <input id="login-password" type="password" name="inp_password" required data-msg="Please enter your password" class="input-material wr-text-input">
              </div>
              <div class="form-group text-center">
                <button type="submit" name="submit-login" class="btn btn-primary btn-login" onclick="btnLogin()">LOGIN</button>
         
              </div>
            </form>
            <!-- <small>Do not have an account? </small><a href="register.html" class="signup">Signup</a> -->
          </div>

        </div>
      </div>
    </div>

<script type="text/javascript" src="js/js-hide.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- <script type="text/javascript" src="fontawesome/js/all.js"></script> -->
<script type="text/javascript" src="lainnya/chart.js/Chart.min.js"></script>
<script type="text/javascript" src="js/JQuery-3.3.1.min.js"></script>
</body>
</html>
<?php
  $users = "admin";
  $pass = "admin";
  if(isset($_POST["submit-login"])){
    if($_POST["inp_user_nm"] == $users && $_POST["inp_password"] == $pass) {
      echo "<script>
        Swal.fire ({
          type: 'success',
          showConfirmButton: false,
          timer: 2000,
          title: 'Welcome Admin'
        }).then(function(){
          window.location.href = 'home.php'
        });
      </script>";
    } else {
      echo "<script>
        Swal.fire ({
          type: 'error',
          title: 'Wrong username / Password',
          showConfirmButton: false,
          timer: 2000
        })
        </script>";
    }
  }
  ?>