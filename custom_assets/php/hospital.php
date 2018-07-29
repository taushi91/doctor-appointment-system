<?php

require_once('connection.php');
$sql = "SELECT `hospital_id` ,`name` FROM `hospital`";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
    $hospital_rows[] = $row;
}
 json_encode($hospital_rows)
?>