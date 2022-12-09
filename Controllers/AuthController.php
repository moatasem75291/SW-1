<?php 

require_once ('../../../Models/user.php');
require_once ('../../../Controllers/DBController.php');

class AuthController
{
    protected $db;

    //1. Open connection.
    //2. Run query & logic.
    //3. Close connection
    public function login(User $user)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $query="select * from users where userId='$user->userId' and password ='$user->password'";
            $result=$this->db->select($query);
            if($result===false)
            {
                echo "Error in Query";
                return false;
            }
            else
            {
                if(count($result)==0)
                {
                    session_start();
                    $_SESSION["errMsg"]="your ID or Password is wrong";
                    $this->db->closeConnection();
                    return false;
                }
                else
                {
                    session_start();
                    $_SESSION["userId"]=$result[0]["id"];
                    $_SESSION["name"]=$result[0]["name"];
                    if($result[0]["roleId"]==1)
                    {
                        $_SESSION["userRole"]="Admin";
                    }
                    else
                    {
                        $_SESSION["userRole"]="HR";
                    }
                    $this->db->closeConnection();
                    return true;
                }
            }
        }
        else
        {
            echo "Error in Database Connection";
            return false;
        }
    }
}

?>