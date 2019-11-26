<?php
session_start();
include('login.php'); 
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">

      <title>e-Sekolah</title>
      <!-- Bootstrap core CSS -->
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="assets/css/login.css" rel="stylesheet">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
   </head>

   <body>

   <div class="container">
      <div class="mainbox col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <form action="" method="post" class="login-form">
            <div class="form-heading">FORM LOGIN</div>
            <div class="form-group">
               <label for="username">Username</label>
               <div class="input-group">
                  <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                  <input type="text" class="form-control" name="username"  placeholder="Username">
               </div>
            </div>
            <div class="form-group">
               <label for="password">Password</label>
               <div class="input-group">
                  <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                  <input type="password" class="form-control" name="password" placeholder="Password">
               </div>            
            </div>

            <div class="row">
               <div class="col-md-9"><span style="color: red;"><?php echo $error; ?></span></div>
               <div class="col-md-3"><button type="submit" name="submit"  class="btn btn-primary pull-right">LOGIN</button></div>
            </div>
         </form>
      </div>
    </div> <!-- /container -->

</body>
</html>
