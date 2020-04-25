# php-homework-assignment-1
Due May 2nd, 2020

##Build a front-end webpage that will ask for username and password after the user clicks submit (Hint: Give the button the name submit)
## Add this PHP script to the top of your webpage and try logging in!

```

<?php
include "config.php";

if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);

        $sql_query = "select count(*) as cntUser from users where username='$uname' and password='$password'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_assoc($result);

        if($count > 0){
            $_SESSION['uname'] = $row['uname'];
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }


}``
