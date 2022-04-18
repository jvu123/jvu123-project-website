<?php
session_start();

include("login/connection.php");
include("login/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $user_name=$_POST['username'];
    $password=$_POST['password'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];

    if(!empty($user_name) && !empty($password) && !empty($first_name) && !empty($last_name) && !empty($email)){

        $query = "insert into user_account (username, password, first_name, last_name, email) values ('$user_name', '$password', '$first_name', '$last_name', '$email')";

        mysqli_query($conn, $query);

        header("Location: project_login.php");
        die;
    }else{
        echo "Please enter valid information";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="project_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/d791d40d5f.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>

<body>
    <section class="header">
        <?php include('templates/navbar.php'); ?>

        <div class="signup-intro">
            <h1>Signup</h1>
            <div class="login-container">
                <form method="POST" action="#">
                    <input class="sign-input" type="text" name="username" placeholder="Enter your username"/><br><br>
                    <input class="sign-input" type="password" name="password" placeholder="Enter your password"/><br><br>
                    <input class="sign-input" type="text" name="first_name" placeholder="Enter your first name"/><br><br>
                    <input class="sign-input" type="text" name="last_name" placeholder="Enter your last name"/><br><br>
                    <input class="sign-input" type="email" name="email" placeholder="Enter your email"/><br><br>
                    <input  class="btn-signup" type="submit" name="submit" value="Signup"/><br><br>
                    <a href="project_login.php">Click to Login</a>
                </form>
            </div>
        </div>

    </section>

    <!-- Footer -->

    <?php include('templates/footer.php'); ?>

    <!-- Javascript -->

    <?php include('scripts/nav_sticky.php'); ?>

    <?php include('scripts/toggle_menu.php'); ?>


</body>
</html>