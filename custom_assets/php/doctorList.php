<?php

require_once('connection.php');
$sql = "SELECT * FROM `doctor_info`";
$result = $conn->query($sql);
$count=0;
while($row = $result->fetch_assoc())
{
    $count+=1;
    $doctorList[] = $row;
}
json_encode($count);
 json_encode($doctorList)
?>
