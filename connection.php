<?php
function connection(){
    $host="localhost";
$username="root";
$password="";
$database="cc105";

$con=new mysqli($host,$username,$password,$database);

if($con->connect_error){
    die('Connection failed'.$con->connect_error);
}
else{
    return $con;
}
}
?>