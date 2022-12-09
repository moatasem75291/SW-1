<?php 
    require_once 'DBController.php';
    class Employee{
        protected $db;
        public $userId;
        public $password;
        public $firstName;
        public $lastName;
        public $birthDate;
        public $salary;
        public $email;

        public function addEmp(){
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
                if(isset($_POST['submitEmp']) && !empty($_POST['userId'] && $_POST['password'])){
                $query = "INSERT INTO `employee` (`userId`, `password`, `firstName`, `lastName`, `birthDate`, `salary`, `email`) 
                VALUES ($this->userId, '$this->password', '$this->firstName', '$this->lastName', '$this->birthDate', $this->salary, '$this->email')";
                $result = $this->db->insert($query);
                session_start();
                $_SESSION['message']="Record has been addded!";
                $_SESSION['msg type']="success";

                header("location: ../modify Employee/modify Employee.php");
                return true;
            }
            else{
                return false;
            }
        }
        }


        public function getInf(){
            if(isset($_GET['filter'])){
                $search = $_GET['search'];
                if(!empty($_GET['search']))
                {
                $this->db = new DBController;
                if($this->db->openConnection()){
                $query = "select userId,password,firstName,lastName,birthDate,salary,
                email,TIMESTAMPDIFF(YEAR,birthDate,CURDATE()) as age from employee where userId like '%$search%'";
                $result=$this->db->select($query);
                return $result;
            }
        }
        // else{
            
        //     header ("location: employees_Admin.php");
        // }

            }
            else{

            $this->db = new DBController;
            if($this->db->openConnection()){
                $query = "select userId,password,firstName,lastName,birthDate,salary,
                email,TIMESTAMPDIFF(YEAR,birthDate,CURDATE()) as age from employee";
                $result=$this->db->select($query);
                return $result;
            }
        }

    }


 
        public function delete(){
            $this->db = new DBController;
            if(isset($_GET['delete']) && $this->db->openConnection()){
                $del = $_GET['delete'];
                $this->db->connection->query("DELETE FROM employee WHERE userId = $del");
                session_start();
                $_SESSION['message']="Record has been deleted!";
                $_SESSION['msg type']="danger";

                header("location: ../modify Employee/modify Employee.php");
            }
        }


        public function update(){
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
                $qry = $this->db->connection->query("UPDATE `employee` SET 
                                                        `userId`='$userId',`password`='$password',
                                                        `firstName`='$firstName',`lastName`='$lastName',
                                                        `birthDate`='$birthDate',`salary`='$salary',`email`='$email'
                                                        WHERE userId=$userId");
                // $result = mysqli_query($con, $qry);
                if($qry){
                    header("location: ../modify Employee/modify Employee.php");
                }
                else{
                    header("location: ../modify Employee/add.php");
                }

                }
            } 
            public function getOne($userId){
                $this->db = new DBController;
            if($this->db->openConnection()){
                $query = "select userId,password,firstName,lastName,birthDate,salary,
                email,TIMESTAMPDIFF(YEAR,birthDate,CURDATE()) as age from employee WHERE userId=$userId";
                $result=$this->db->select($query);
                return $result;
            }
        }
    }    
?> 
