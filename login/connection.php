<?php

 //connect to database
 $conn = mysqli_connect('localhost','jvu','Saber.01','project_db');

 //check connection
 if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
 }