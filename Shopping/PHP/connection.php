<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "newdb";

//connection to DataBase
$conn = mysqli_connect("$serverName", "$userName", "$password", "$dbName");

if($conn){
    echo "DATABASE connection was successful";
}else{
    echo"connection Error ".mysqli_connect_error($conn);
}




 
?>