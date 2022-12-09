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
              <div class="row">
                  
                  <div class="col-md-12 grid-margin">
                  <a href="view location.php"><button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#add-department">View Location</button></a>
                  <a href="view image.php"><button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#add-department" >View Image</button></a>
                  </div>
                  
                  <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="row income-expense-summary-chart mt-3">
                      
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