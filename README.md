# PHP Homework Assignment 1
Due May 2nd, 2020

##Build a front-end webpage that will ask for username and password after the user clicks submit (Hint: Give the button the name submit)
## Add this PHP script to the top of your webpage and try logging in!

# Forking this repo

## Step 1 - Fork Repository
## Step 2 - Clone your forked repository to you computer
## Add your index.php file to your repository. Make sure you are committing your changes as you work.
## When you are done, push your local changes back to GitHub.
## Create an issue in this repository and paste the link to your forked repository an issue to this original repository.

```

<?php
include "db.php";

if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);

        $sql_query = "select * from users where username='$uname' and password='$password'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_assoc($result);

        if($count > 0){
            $_SESSION['uname'] = $row['uname'];
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }


}
```

## Hint: SQL Script you will need to create the 'users' database table:
```
CREATE TABLE users 
(
user_id INT PRIMARY KEY auto_increment,
username VARCHAR(25) NOT NULL,
first_name VARCHAR(25) NOT NULL,
last_name VARCHAR(25) NOT NULL

);
```
