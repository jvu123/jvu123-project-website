<?php
session_start();

if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
}

header("Location: project_index.php");
die;