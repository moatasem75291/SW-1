<!-- partial:../../partials/_sidebar.html -->
<?php require_once '../../../Controllers/AuthController.php';
      session_start();
?>
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
          <?php if($_SESSION["userRole"]=="Admin") {?>
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                  <p class="designation">Administrator</p>
                </div>
              </a>
            </li>
            <?php }else{?>
              <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="text-wrapper">
                  <p class="profile-name">HR</p>
                  <p class="designation">Administrator</p>
                </div>
              </a>
            </li>
            <?php }?>
            <li class="nav-item">
                  <a class="nav-link" href="../employees/employees_Admin.php">
                      <span class="menu-title">Employees</span>
                      <i class="icon-screen-desktop menu-icon"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../view loc&img/view loc&img.php">
                      <span class="menu-title">View Location & Image</span>
                      <i class="icon-screen-desktop menu-icon"></i>
                  </a>
              </li>
              <?php if($_SESSION["userRole"]=="Admin") {?>
              <li class="nav-item">
                  <a class="nav-link" href="../modify Employee/modify Employee.php">
                      <span class="menu-title">Modify Employee</span>
                      <i class="icon-screen-desktop menu-icon"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../modify HR/modify HR.php">
                      <span class="menu-title">Modify HR</span>
                      <i class="icon-screen-desktop menu-icon"></i>
                  </a>
              </li>
              <?php }else{?>
                <li class="nav-item">
                  <a class="nav-link" href="../modify HR/feedback.php">
                      <span class="menu-title">feedback</span>
                      <i class="icon-screen-desktop menu-icon"></i>
                  </a>
              </li>
              <?php }?>
                
          </ul>
        </nav>
        <!-- partial -->