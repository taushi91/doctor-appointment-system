<?php 

include('connection.php');
class DoctorView


{
private $db;

    public function __construct() {
        $this->db=new MySQLi(db_host, db_user, "", "doctorappoinment");
        $this->db->query("SET CHARACTER SET utf8");
      

         if(mysqli_connect_errno()){
           echo "Could Not Connect to Database".  mysql_errno();
           exit();
       
     }
    }
     public function doctor_info(){
         $query="SELECT * FROM doctor_info";
         $result= mysqli_query($this->db, $query);
         return $result;

     }

     
      public function doctor_info_by_id($id){
          $query="SELECT * FROM doctor_info WHERE department_id='$id'";
         $result= mysqli_query($this->db, $query);
         return $result;

     }
     
     
     public function doctor_info_by_id_gender($id,$gender){
          $query="SELECT * FROM doctor_info WHERE department_id='$id' AND sex IN('$gender')";
         $result= mysqli_query($this->db, $query);
         return $result;

     }
     
     public function doctor_info_by_id_area($id,$area){
          $query="SELECT * FROM doctor_info WHERE department_id='$id' AND location_id IN ('$area')";
         $result= mysqli_query($this->db, $query);
         return $result;

     }
     
     
     public function advenceSearch($id,$area,$gender){
           $query="SELECT * FROM doctor_info WHERE department_id='$id' AND sex IN('$gender') AND location_id IN ('$area')  ";
         $result= mysqli_query($this->db, $query);
         return $result;

     }
     

     public function doctor_department(){
         $query="SELECT * FROM department";
         $result= mysqli_query($this->db, $query);
         return $result;

     }

 

 public function auto_search_department($name) {
         $query="SELECT * FROM department WHERE name LIKE='%".$name."%'";
         $result= mysqli_query($this->db, $query);
         return $result;

     }


     public function doctorSearchById($id){
         $query="SELECT * FROM doctor_info WHERE doctor_id='$id'";
         $result= mysqli_query($this->db, $query);
         return $result;

     }
     
     
     public function saveDoctorSchedule($doctorId,$sun,$mon,$tue,$wed,$thu,$fri,$sat) {
        // print_r($post);
        
         
        echo $query="INSERT INTO schedule VALUES('','$doctorId','$sun','$mon','$tue','$wed','$thu','$fri','$sat')";
         $result= mysqli_query($this->db, $query);
         return $result;
       
        }
        
        public function getScheduleById($id) {
           $query="SELECT * FROM schedule WHERE doctor_id='$id'";
         $result= mysqli_query($this->db, $query);
         return $result; 
            
        }
        
        
        
        
        public function updateDoctorInfo($id,$email,$phone,$fee) {
            $query="UPDATE doctor_info SET email='$email',phone='$phone',Fees='$fee'  WHERE doctor_id='$id' ";
         $result= mysqli_query($this->db, $query);
         return $result; 
        }
        
        
        
         public function getAppointmentList($id,$date) {
            $query="SELECT * FROM appointment WHERE doctor_id='$id' AND date='$date' ";
         $result= mysqli_query($this->db, $query);
         return $result; 
            
        }
        
        
     }

 
