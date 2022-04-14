<?php

function check_login($conn) {

    if(isset($_SESSION['username'])){

     $uname=$_SESSION['username'];

     $sql="SELECT * 
        from user_account 
        where username='".$uname."'
        limit 1";

        $result=mysqli_query($conn, $sql);
        if($result && mysqli_num_rows($result) > 0){

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: project_login.php");
    die;
}