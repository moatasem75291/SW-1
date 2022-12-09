<!DOCTYPE html>
<html lang="en">
<?php 
  require_once '../../../Controllers/modifyHR.php';
  $emp = new HR;
  $sel = $emp->getInfHr();
  $emp->addHr();

?>
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
                    <div class="row income-expense-summary-chart-text">
                      <div class="col-xl-4">
                        <h5>HR</h5>
                      </div>
                    </div>
                    <div class="row income-expense-summary-chart mt-3">
                      <div class="col-md-12">
                          <table id="example3" class="table table-bordered table-striped">
                              <thead style="font-size:10px">
                                  <tr>
                                      <th>ID</th>
                                      <th>Password</th>
                                      <th>Lastname</th>
                                      <th>Firstname</th>
                                      <th>Date of Birth</th>
                                      <th>salary</th>
                                      <th>Contact No.</th>
                                      <th>Age</th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php
                                foreach($sel as $info){?>
                                    <tr>
                                      <td><?php echo $info['userId']?></td>
                                      <td><?php echo $info['password']?></td>
                                      <td><?php echo $info['firstName']?></td>
                                      <td><?php echo $info['lastName']?></td>
                                      <td><?php echo $info['birthDate']?></td>
                                      <td><?php echo $info['salary']?></td>
                                      <td><?php echo $info['email']?></td>
                                      <td><?php echo $info['age']?></td>
                                     </tr>
                               <?php }?>
                              </tbody>
                              
                          </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php include '../footer.php'; ?>
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