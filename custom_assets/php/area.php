<?php

require_once('connection.php');
$sql = "SELECT `id` ,`district_id` AS districtId,`name` FROM `area`";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
    $rows[] = $row;
}
 json_encode($rows)
?>

