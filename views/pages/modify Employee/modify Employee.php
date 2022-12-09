<!DOCTYPE html>
<html lang="en">
<?php 
  require_once '../../../Controllers/modifyEmp.php';
  $emp = new Employee;
  $select = $emp->getInf();
  $emp->addEmp();
  $emp->delete();
  $emp->update();
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
                  <a href="add.php"><button type="button" name="addEmp" class="btn btn-primary btn-md" data-toggle="modal" data-target="#add-process_payroll">Add Employee</button></a>
                  </div>
                  <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row income-expense-summary-chart-text">
                      <div class="col-xl-4">
                        <h5>Modify Employees</h5>
                      </div>
                  <form role="form" method="POST" action="../employees/employees_Admin.php">
                    </div>
                    <div class="row income-expense-summary-chart mt-3">
                      <div class="col-md-12">
                          <table id="example3" class="table table-bordered table-striped">
                              <thead style="font-size:10px">
                                  <tr>
                                      <th>ID</th>
                                      <th>Password</th>
                                      <th>Firstname</th>
                                      <th>Lastname</th>
                                      <th>Date of Birth</th>
                                      <th>salary</th>
                                      <th>E-mail</th>
                                      <th>Age</th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php
                                foreach($select as $info){?>
                                    <tr>
                                      <td><?php echo $info['userId']?></td>
                                      <td><?php echo $info['password']?></td>
                                      <td><?php echo $info['firstName']?></td>
                                      <td><?php echo $info['lastName']?></td>
                                      <td><?php echo $info['birthDate']?></td>
                                      <td><?php echo $info['salary']?></td>
                                      <td><?php echo $info['email']?></td>
                                      <td><?php echo $info['age']?></td>
                                      <td><a class="btn btn-primary" href="edit.php?edit=<?php echo $info['userId']; ?>"
                                            >Update</a></td>
                                      <td><a class="btn btn-danger" href="modify Employee.php?delete=<?php echo $info['userId']; ?>"
                                            >Delete</a></td>
                                          <!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-employee">Edit</button> -->
                                          <!-- <a href="edit.php"
                                            class="btn btn-info">Edit</a>
                                          <a class="btn btn-danger ">Delete</a> -->
                                    </tr>
                              <?php }?> 
                              </tbody>
                          </table> 
                        </div>
                     </div>
                    </div>
                  </div>
                </div>
              </form> 
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