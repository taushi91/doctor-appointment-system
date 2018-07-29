<?php

require_once('connection.php');
$sql = "SELECT `division_id` ,`name` FROM `districts`";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
    $rowDistrict[] = $row;
}
 json_encode($rowDistrict)
?>

