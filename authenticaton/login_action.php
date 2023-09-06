<?php

if(!isset($_SESSION)){
    session_start();
}

include_once("../connection.php");
$con = connection();
   
   
   
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $user = $con->query($sql) or die ($con->error);
        $row = $user->fetch_assoc();
        $total = $user->num_rows;
        
        
        if ($total > 0) {
            $_SESSION['UserLogin'] = $row['username'];
            $_SESSION['Access'] = $row['access'];
            echo header("Location: index.php");
        }  else{    
            echo "No User Found!";
        }
    }

?>