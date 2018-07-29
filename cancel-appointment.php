<?php

include './custom_assets/php/userClass.php';

$user=new User();

$delete=$user->cancelAppointment($_GET['id']);

if($delete){
    header("Location:next-appointment.php");
}