<!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center" style="background-color:white;">
          <a class="navbar-brand brand-logo" href="../employees/employees_Admin.php">
              <span class="brand-text logo-lg"><b>Payroll System</b></span></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <?if session?>            
          <a class="dropdown-item" href="../login/login.php"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->