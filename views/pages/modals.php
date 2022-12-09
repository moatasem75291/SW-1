<!-- <div class="modal fade" id="add-employee">
    <div class="modal-dialog modal-lg"> -->

  

        <div class="modal-content">
            <div class="modal-body">
                <form role="form" method="POST" action="../employees/employees_Admin.php">
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">ID</label>
                            <input type="text" id="disabledTextInputId" class="form-control" placeholder="ID" name="userId" required>
                        </div>
                    
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">Password</label>
                            <input type="password" id="disabledTextInputPassword" class="form-control" placeholder="Password " name="password" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">First Name</label>
                            <input type="text" id="disabledTextInputFirstName" class="form-control" placeholder="First Name" name="firstName" required>
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">Last Name</label>
                            <input type="text" id="disabledTextInputLastName" class="form-control" placeholder="Last Name" name="lastName" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">Date of Birth</label>
                            <input type="date" id="disabledTextInput" class="form-control" placeholder="Date of Birth" name="birthDate" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">salary</label>
                            <input type="text" id="disabledTextInputSalary" class="form-control" placeholder="Salary" name="salary" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">E-mail</label>
                            <input type="email" id="disabledTextInputEmail" class="form-control" placeholder="Email" name="email" required>
                        </div>
                        
                        
                        <div class="form-group col-md-3">
                            <label for="Date of Birth"></label>
                            <!-- <input type="text" class="form-control" id="Date of Birth" placeholder="absent"> -->
                        </div>
                             <div class="form-group col-md-3">
                                <label for=" Account ID" class="col-md-12"></label>
                                <button type="submit" id="add" class="btn btn-primary col-md-5" name="submit" >Submit</button>
                                <button type="button" class="btn btn-default col-md-5" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
            <script src="../js/rejex.js"></script>
    </div>
    <!-- /.modal-dialog -->
</div>