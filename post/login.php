<?php

    session_start();

    require_once('config.php');
    require_once('functions.php');

    if(is_user_authenticated()) {
        redirect('admin.php');
        die();
    }

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password']; // TO DO: validate this

        if(authenticate_user($email, $password)) {
            $_SESSION['email'] = $email;
            redirect('admin.php');
            die();
        }


        if($email == false) {
            $status = 'Please enter a valid email address';
        }
        else {
            $status = $email;
        }
    }
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

    <form action="" method="POST">
        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name="login" value="login">
    </form>
    <div class="row">
        <?php 

            if(isset($status)) {
                echo $status;
            }
           
        ?>
    </div>

</body>
</html>