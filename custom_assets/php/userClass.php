<?php

//include '../database/connection.php';

class User{
    
    private $db;

    public function __construct() {
        $this->db= mysqli_connect("localhost", "root", "", "doctorappoinment");
       // $con= mysqli_connect($host, $user, $password, $database, $port, $socket)
        $this->db->query("SET CHARACTER SET utf8");
      
         if(mysqli_connect_errno()){
           echo "Could Not Connect to Database".  mysql_errno();
           exit();      
     }
    }

    public function user_registration($name,$email,$password,$sex,$address,$phone)
          {
       
        echo $query="INSERT INTO user_login VALUES('','$name','$sex','$email','$phone','$password')";
        $result= mysqli_query($this->db, $query);
        return $result;

    }

public function appointment($name,$date,$doctor_id,$user_id,$phone)
          {
       
        echo $query="INSERT INTO appointment VALUES('','$date','$doctor_id','$user_id','$name','$phone')";
        $result= mysqli_query($this->db, $query);
        return $result;

    }
    public function user_login($data){
    echo   $query="SELECT * FROM user_login WHERE email='$data[email]' AND password='$data[password]' ";

    $result= mysqli_query($this->db, $query);
        return $result;

    }
    
    
    public function changePassword($id,$password) {
           $query="UPDATE doctor_info SET password='$password' WHERE doctor_id='$id'";

    $result= mysqli_query($this->db, $query);
        return $result;
    }
    
    
    public function count_appointment($doctor_id,$date){
       $query="SELECT count(*) c FROM `appointment` WHERE doctor_id='$doctor_id' AND date='$date' ";
    $result= mysqli_query($this->db, $query);
        return $result;

    }
    
    public function validationAppointment($user_id,$date,$doctor_id){
       $query="SELECT count(*) c FROM `appointment` WHERE doctor_id='$doctor_id' AND date='$date' AND user_id='$user_id'";
        $result= mysqli_query($this->db, $query);
        return $result;

    }
    
    public function getNextAppointment($id,$date) {
        $query="SELECT appointment.id,appointment.patient_name,doctor_info.name,appointment.date FROM `appointment`,doctor_info WHERE appointment.doctor_id=doctor_info.doctor_id and appointment.user_id='$id' and date>='$date'";
         $result= mysqli_query($this->db, $query);
        return $result;
              
    }


public function getPreviousAppointment($id,$date) {
        $query="SELECT appointment.patient_name,doctor_info.name,appointment.date FROM `appointment`,doctor_info WHERE appointment.doctor_id=doctor_info.doctor_id and appointment.user_id='$id' and date<'$date'";
         $result= mysqli_query($this->db, $query);
        return $result;
              
    }


public function cancelAppointment($id) {
        $query="DELETE from appointment WHERE id='$id'";
         $result= mysqli_query($this->db, $query);
        return $result;
              
    }



    public function doctor_info_by_id($id){
         $query="SELECT * FROM doctor_info WHERE doctor_id='$id'";
         $result= mysqli_query($this->db, $query);
         return $result;

     }
     
      public function getSchedule($id){
         $query="SELECT * FROM schedule WHERE doctor_id='$id'";
         $result= mysqli_query($this->db, $query);
         return $result;

     }
     
    
}


