<?php
function connection(){
    $host="localhost";
$username="root";
$password="";
$database="cc105";

$connect=new mysqli($host,$username,$password,$database);

if($connect->connect_error){
    die('Connection failed'.$connect->connect_error);
}
else{
    return $connect;
}
}
?>