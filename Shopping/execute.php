<?php
require_once('./PHP/connection.php');
echo " <br>THIS IS EXECUTION FILE";
$stmt = $conn->prepare("SELECT * FROM productdb");
$stmt->execute();
$result = $stmt->get_result();
while($rows = $result->fetch_assoc()){
    return $rows;
}

//Insert into database

$sql = " INSERT INTO productdb () VALUE ();"
?>