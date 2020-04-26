# PHP Homework Assignment 1

Build a front-end webpage that will ask for username and password after the user clicks submit (Hint: Give the button the name submit.)
Add this PHP script to the top of your webpage and try logging in!

# How to submit your assignment:

1. Fork this repository (Click the fork icon next to this repository's name)
2. Step 2 - Clone your forked repository to you computer
3. Step 3 - Add your index.php file to your repository. Make sure you are committing your changes as you work.
4. Step 4 - When you are done, push your local changes back to GitHub.
5. Step 5 - Create an issue in this repository and paste the link to your forked repository as an issue to this original repository.

``` php

<?php
include "db.php";

//This is your process login script!

if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);

        $sql_query = "select * from users where username='$uname' and password='$password'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_assoc($result);

        if($count > 0){
            $_SESSION['uname'] = $row['uname'];
            header('Location: home.php');
        }else {
            echo "Invalid username and password";
        }


}
```

## Hint: SQL Script you will need to create the 'users' database table:
```sql
CREATE TABLE users 
(
user_id INT PRIMARY KEY auto_increment,
username VARCHAR(25) NOT NULL,
first_name VARCHAR(25) NOT NULL,
last_name VARCHAR(25) NOT NULL

);
```

# You are done! Now relax...
![Bilby Stampede](https://media.giphy.com/media/5CGHc2q51s3AI/source.gif)
