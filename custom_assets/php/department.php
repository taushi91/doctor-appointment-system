<?php

require_once('connection.php');
$sql = "SELECT `department_id` ,`name` FROM `department`";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
    $department_rows[] = $row;
}
 json_encode($department_rows)
?>
