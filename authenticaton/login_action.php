<?php
    include 'login_func.php';
    session_start();
    $GLOBALS['type']='';
   
    if (isset($_POST['login'])) {
        $name = $_POST['username'];
        $password = md5 ($_POST['password']);
    
        if (login($name, $password)) {
            if ($_SESSION['user_type'] === 'user') {
                $type = 'user';
                header('Location: admin_index.php');
                exit();
            } elseif ($_SESSION['user_type'] === 'admin') {
                $type = 'admin'; 
                header('Location: index.php');
                exit();
            }
            
            
        } else {
            echo "Invalid username or password";
        }
    }
    
    
    
    ?>