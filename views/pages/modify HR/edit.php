
<?php 
  require_once '../../../Controllers/modifyHR.php';
  $id = $_GET['edit'];
  // require_once 'modify Employee.php';
  $emp = new HR;
  $data = $emp->updateHr();
  $select = $emp->getOneHr($id);

 ?>
<!DOCTYPE html>
<html lang="en">
<?php include '../head.php'; ?>
  <body>
    <div class="container-scroller">
      <?php include '../navbar.php'; ?>
      <div class="container-fluid page-body-wrapper">
          
        <?php include '../sidebar.php'; ?>
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="modal-content">
            <div class="modal-body">
                <form role="form" method="POST" action="modify HR.php">
                    <div class="card-body">
                    <?php foreach($select as $info){?>
                        <div class="row">
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">ID</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="ID" name="userId" value="<?php echo $info['userId']?>"  required>
                        </div>
                    
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">Password</label>
                            <input type="password" id="disabledTextInput" class="form-control" placeholder="Password " name="password"  value="<?php echo $info['password']; ?>" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">First Name</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="First Name" name="firstName"  value="<?php echo $info['firstName']; ?>" required>
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">Last Name</label>
                            <input type="text" id="disabledTextInput" class="form-control"  placeholder="Last Name" name="lastName"  value="<?php echo $info['lastName']; ?>" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">Date of Birth</label>
                            <input type="date" id="disabledTextInput" class="form-control"  placeholder="Date of Birth" name="birthDate"  value="<?php echo $info['birthDate']; ?>" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">salary</label>
                            <input type="text" id="disabledTextInput" class="form-control"  placeholder="Salary" name="salary"  value="<?php echo $info['salary']; ?>" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">E-mail</label>
                            <input type="email" id="disabledTextInput" class="form-control"  placeholder="Contact No" name="email"  value="<?php echo $info['email']; ?>" required>
                        </div>
                        
                        
                        <div class="form-group col-md-3">
                            <label for="Date of Birth"></label>
                            <!-- <input type="text" class="form-control" id="Date of Birth" placeholder="absent"> -->
                        </div>
                             <div class="form-group col-md-3">
                                <label for=" Account ID" class="col-md-12"></label>
                                <button type="submit" class="btn btn-primary col-md-5" name="update">Update</button>
                                <button type="button" class="btn btn-default col-md-5" data-dismiss="modal" heref="modify HR.php">Cancel</button>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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