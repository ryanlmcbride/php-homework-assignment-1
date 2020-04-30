<?php
include "db.php";
session_start();
if(isset($_GET['submit'])){

    $uname = mysqli_real_escape_string($conn,$_GET['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_GET['txt_pwd']);

        $sql_query = "select * from users where username='$uname' and password='$password'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_assoc($result);

        $count = mysqli_num_rows($result);

        if($count > 0){
            $_SESSION['uname'] = $row['username'];
            header('Location:home.php');
        }else {
            echo "Invalid username and password";
        }
}
?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <form method="get" class="form-horizontal">
        <center><h1 class="jumbotron">Login</h1></center>
        <div class="form-group">
          <label for="txt_uname" class="control-label col-sm-4"> Username: </label>
          <div class="col-sm-6">
            <input type="text" size=20 name="txt_uname" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="txt_pwd" class="control-label col-sm-4">Password: </label>
          <div class="col-sm-6">
            <input type="password" size=12 name="txt_pwd" class="form-control">
          </div>
        </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
               <button type="button" name="submit" class="btn btn-primary">Login</button>
            </div>
          </div>
      </form>
  </div>
  </body>
</html>
