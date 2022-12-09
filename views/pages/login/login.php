<?php 
require_once '../../../Models/user.php';
require_once '../../../Controllers/AuthController.php';
$errMsg="";

if(isset($_GET["logout"]))
{
  session_start();
  session_destroy();
}
if(isset($_POST['userId']) && isset($_POST['password']))
{
    if(!empty($_POST['userId']) && !empty($_POST['password']) )
    {   
        $user=new User;
        $auth=new AuthController;
        $user->userId=$_POST['userId'];
        $user->password=$_POST['password'];
        if(!$auth->login($user))
        {
            if(!isset($_SESSION["userId"]))
            {
                session_start();
            }
            $errMsg=$_SESSION["errMsg"];
        }
        else
        {
            if(!isset($_SESSION["userId"]))
            {
                session_start();
            }
            if($_SESSION["userRole"]=="Admin")
            {
                header("location: ../employees/employees_Admin.php");
            }
            if ($_SESSION["userRole"]=="HR")
            {
                header("location: ../employees/employees_HR.php");
            }

        }

        
    }
    else
    {
        $errMsg="Please fill all fields";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Payroll System</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../css/style.css"/> <!-- End layout styles -->
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h3>Payroll System</h3>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <?php 
              
                if($errMsg!="")
                {
                    ?>
                        <div style="width: 330px; background:#F2DEDE; color:#A94442; border: 1px solid #A94442; border-radius: 5px;"><?php echo $errMsg ?></div>
                    <?php
                }
              
                ?>
                <form class="pt-3" action="login.php" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="UserID" name="userId">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>