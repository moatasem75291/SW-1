<?php
   // Check if User Coming FromARequest
    if ($_SERVER[ 'REQUEST_METHOD'] == 'POST'){
        // Assign Variables
        $ID   = filter_var ($_POST['ID'], FILTER_SANITIZE_STRING);
        $mail = filter_var ($_POST['email'], FILTER_SANITIZE_EMAIL);
        $msg  = filter_var ($_POST['report'], FILTER_SANITIZE_STRING);
                 
       // Creating Array of Errors
        $formErrors = array();
       if ($ID < 3330){
            $formErrors[] = 'ID Must Be Larger Than <strong>3330</strong>';
        }
        if (strlen($msg)<10){
            $formErrors[] = 'Message Can\'t Be Less Than <strong>10</strong> Characters';
        }
       // If No Errors Send The Email[mail(To, Subject, Message, Headers, Parameters)]
            $headers  = 'About the Employee who has the following ID number:' .$ID ;
            $myEmail  = 'mo5les75291@gmail.com';
            $subject  = 'report';
            if (empty ($formErrors)){
              mail($myEmail, $subject, $msg, $headers);
              $user ='';
              $mail ='';
              $cell ='';
              $msg  ='';

              $success='We Have Recieved Your Report, thanks</div>';
            }
      }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
          .feedback{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 80%;
            margin: auto;
            font-size: 18px;
                    }
          .btn-submit-form{
            padding: 15px 32px;
            border-radius: 10px;
            border: none;
            font-size: 17px;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
                    }
          .btn-submit-form:hover{
            background:#1BDBE0;
            color:white;
          }
          
        </style>
    </head>
<?php include '../head.php'; ?>
  <body>
    <div class="container-scroller">
    <?php include '../navbar.php'; ?>
      <div class="container-fluid page-body-wrapper">
      <?php include '../sidebar.php'; ?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <?php if (! empty ($formErrors)){?>
                      <div class="alert alert-danger alert-dismissible" role="start">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                          <?php
                            foreach ($formErrors as $error){
                                echo $error.'<br/>';
                            }
                          ?>
                      </div>
                      <?php }?>
                        <div class="feedback">
                        <?php 
                          if (isset($success)) {
                              echo $success;
                        }?>
                          <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">ID</label>
                            <input type="text" id="disabledTextInput" class="form-control" name="ID" placeholder="Employee ID" required>
                          </div>
                          <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">E-mail</label>
                            <input type="email" id="disabledTextInput" class="form-control" name="email" placeholder="your E-mail" required>
                          </div>
                          <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Report</label>
                            <textarea  id="exampleFormControlTextarea1" class="form-control" name="report" placeholder="your report about this Employee" rows="8" required></textarea>
                          </div>
                          <button type="submit" class="btn-submit-form">Send</button>
                        </div>
                    </form>
                      <div class="row income-expense-summary-chart mt-3">
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <?php include '../footer.php'; ?>
          </div>
        </div>
      </div>
    </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          <!-- partial -->
        </div>
          <?php //include '../modals.php'; ?>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
      <?php include '../scripts.php'; ?>
  </body>
</html>