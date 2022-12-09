<?php 
    require_once 'DBController.php';
    class Hr{
        protected $db;
        public $userId;
        public $password;
        public $firstName;
        public $lastName;
        public $birthDate;
        public $salary;
        public $email;

        public function addHr(){
            $this->db = new DBController;

            $this->userId='';
            $this->password='';
            $this->firstName='';
            $this->lastName='';
            $this->birthDate='';
            $this->salary='';
            $this->email='';

            if(isset($_POST['userId'])){
                $this->userId=$_POST['userId'];
            }
            if(isset($_POST['password'])){
                $this->password=$_POST['password'];
            }
            if(isset($_POST['firstName'])){
                $this->firstName=$_POST['firstName'];
            }
            if(isset($_POST['lastName'])){
                $this->lastName=$_POST['lastName'];
            }
            if(isset($_POST['birthDate'])){
                $this->birthDate=$_POST['birthDate'];
            }
            if(isset($_POST['salary'])){
                $this->salary=$_POST['salary'];
            }
            if(isset($_POST['email'])){
                $this->email=$_POST['email'];
            }


            if($this->db->openConnection()){
                if(isset($_POST['submitHr']) && !empty($_POST['userId'] && $_POST['password'])){
                $query = "INSERT INTO users (userId, password, firstName, lastName,birthDate, salary, email,roleId) 
                VALUES ($this->userId, '$this->password', '$this->firstName', '$this->lastName','$this->birthDate', $this->salary, '$this->email',2)";
                $result = $this->db->insert($query);
                header("location: ../employees/employees_HR.php");
                return true;
            }
            else{
                return false;
            }
        }
        }
        // // public function getInfHr(){
            
        //     $this->db = new DBController;
        //     if($this->db->openConnection()){
        //         $query = "select userId,password,firstName,lastName,birthDate,salary,
        //         email,TIMESTAMPDIFF(YEAR,birthDate,CURDATE()) as age from users where roleId=2";
        //         $result=$this->db->select($query);
        //         return $result;
        //     }
        // }

        public function getInfHr(){
            if(isset($_GET['filter'])){
                $search = $_GET['search'];
                if(!empty($_GET['search']))
                {
                $this->db = new DBController;
                if($this->db->openConnection()){
                $query = "select userId,password,firstName,lastName,birthDate,salary,
                email,TIMESTAMPDIFF(YEAR,birthDate,CURDATE()) as age from users where userId like '%$search%'";
                $result=$this->db->select($query);
                return $result;
            }
        }
        else{
            
            header ("location: employees_Admin.php");
        }

            }
            else{

            $this->db = new DBController;
            if($this->db->openConnection()){
                $query = "select userId,password,firstName,lastName,birthDate,salary,
                email,TIMESTAMPDIFF(YEAR,birthDate,CURDATE()) as age from users WHERE roleId = 2";
                $result=$this->db->select($query);
                return $result;
            }
        }

    }


    public function deleteHr(){
        $this->db = new DBController;
        if(isset($_GET['delete']) && $this->db->openConnection()){
            $del = $_GET['delete'];
            $this->db->connection->query("DELETE FROM users WHERE userId = $del");
            session_start();
            $_SESSION['message']="Record has been deleted!";
            $_SESSION['msg type']="danger";
            header("location: ../modify HR/modify Hr.php");
        }
    }
    public function updateHr(){
        $this->db = new DBController;
        $con = $this->db->openConnection();
       // $userUpdate = $_GET['edit'];
        if (isset($_POST['update']) ){
            $userId = $_POST['userId'];
            $password = $_POST['password'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $birthDate = $_POST['birthDate'];
            $salary = $_POST['salary'];
            $email = $_POST['email'];
            $qry = $this->db->connection->query("UPDATE users SET 
                                                    userId='$userId',password='$password',
                                                    firstName='$firstName',lastName='$lastName',
                                                    birthDate='$birthDate',salary='$salary',email='$email'
                                                    WHERE userId=$userId");
            // $result = mysqli_query($con, $qry);
            if($qry){
                header("location: ../modify HR/modify HR.php");
            }
            else{
                header("location: ../modify Employee/add.php");
            }
        }
    }
    public function getOneHr($userId){
        $this->db = new DBController;
    if($this->db->openConnection()){
        $query = "select userId,password,firstName,lastName,birthDate,salary,
        email,TIMESTAMPDIFF(YEAR,birthDate,CURDATE()) as age from users WHERE userId=$userId";
        $result=$this->db->select($query);
        return $result;
    }
}
}
   
?>