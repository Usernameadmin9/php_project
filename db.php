<?php 
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="test";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$conn){
    echo "Connection Failed". mysqli_connect_error();
}

?>