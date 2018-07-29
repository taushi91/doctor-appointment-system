<?php
include './database/doctor.php';
$doctor=new DoctorView();
 $type_id=$_POST['dept'];

if($type_id==1){
    $department=$doctor->doctor_department();
    while($row= mysqli_fetch_array($department)){
        ?>
            
    <option value="<?PHP echo $row['department_id'] ?>"><?PHP echo $row['name'] ?></option>
  
        
        <?PHP 
    }
}

