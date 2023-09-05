<?php
    
    
    function login($name, $password){

        include('..\connection.php');
        $emp_query = "SELECT * FROM employee WHERE employee_Name = '$name' AND password = '$password'";
        $emp_prompt = $con->query($emp_query) or die ($con->error);
        $emp_result = $emp_prompt->fetch_assoc();

        if ($emp_result > 0) {
            
            $_SESSION['name'] = $name;
            $_SESSION['user_type'] = 'user';
            header('Location: index.php');
        }

        // Check if the user exists in the 'admins' table
        $ad_query = "SELECT * FROM admin WHERE admin_Name = '$name' AND adPassword = '$password'";
        $ad_prompt = $con->query($ad_query) or die ($con->error);
        $ad_result = $ad_prompt->fetch_assoc();

        if ($ad_result > 0) {
            // Admin found in 'admins' table, perform necessary login actions
            // For example, set session variables or redirect to admin dashboard
            $_SESSION['name'] = $name;
            $_SESSION['user_type'] = 'admin';
            header('Location: admin_index.php');
        }

        return false;
        
    }

?>