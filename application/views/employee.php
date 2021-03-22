<?php $this->load->view('admin_header'); ?>
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Admins List</h4>
                        <a href="javascript:void(0);" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addEmpModal"><i class="fa fa-plus"></i> Add New</a>

                        <table id="employeeListing" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Emp Name</th>
                                    <th>Age</th>
                                    <th>Designation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="listrecords">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- container-fluid -->

</div> <!-- content -->

<!-- Save Employee -->
<form id="saveEmpForm" method="post">
    <div class="modal fade" id="addEmpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">                       
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="emp_name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="emp_name" id="emp_name" placeholder="" value="">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="emp_age" class="col-form-label">Age</label>
                        <input type="text" class="form-control" name="emp_age" id="emp_age" placeholder="" value="">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="emp_designation" class="col-form-label">Designation</label>
                        <input type="text" class="form-control" name="emp_designation" id="emp_designation" placeholder="" value="">
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
</form>
<!-- End Save Employee -->

<!-- Update Employee -->
<form id="editEmpForm" method="post">
    <div class="modal fade" id="editEmpModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit Employee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Name*</label>
                    <div class="col-md-10">
                      <input type="text" name="emp_name" id="emp_name" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Age*</label>
                    <div class="col-md-10">
                      <input type="text" name="emp_age" id="emp_age" class="form-control" placeholder="Age">
                    </div>
                </div>              
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Designation*</label>
                    <div class="col-md-10">
                      <input type="text" name="emp_designation" id="emp_designation" class="form-control" placeholder="Skils">
                    </div>
                </div>
          </div>
          <div class="modal-footer">
             <input type="hidden" name="id" id="id" class="form-control">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
</form>
<!-- End Update Employee -->
<?php $this->load->view('admin_footer'); ?>