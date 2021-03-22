<?php $this->load->view('admin_header'); ?>
    
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Form row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <?php if($this->session->flashdata('success') != "") { ?>
                            <div class="alert alert-success alert-dismissible mb-3" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                </button> 
                                <strong><?php echo $this->session->flashdata('success'); ?></strong>
                            </div>
                            <?php  } ?>
                            <h4 class="header-title">Add Admin</h4>

                            <form method="post" action="<?php echo base_url().'admin/addadmin'; ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="admin_name" class="col-form-label">Name</label>
                                        <input type="text" class="form-control" name="admin_name" id="admin_name" placeholder="" value="gdsfbh">
                                        <?php echo form_error('admin_name'); ?>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="admin_email" class="col-form-label">Email</label>
                                        <input type="text" class="form-control" name="admin_email" id="admin_email" placeholder="" value="sudhakar@gnhub.com">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="admin_password" class="col-form-label">Password</label>
                                        <input type="password" class="form-control" name="admin_password" id="admin_password" placeholder="" value="1234567890">
                                    </div>
                                </div>
                                <div class="form-row">
	                                <div class="form-group col-md-4">
	                                    <label for="admin_mobileno" class="col-form-label">Mobile No</label>
	                                    <input type="text" class="form-control" name="admin_mobileno" id="admin_mobileno" placeholder="" value="1234567890">
	                                </div>
                                    <div class="form-group col-md-4">
                                        <label for="admin_address" class="col-form-label">Address</label>
                                        <input type="text" class="form-control" name="admin_address" id="admin_address" placeholder="" value="surat">
                                    </div>
	                                <div class="form-group col-md-4">
	                                    <label class="col-form-label">Role Type</label>
	                                    <select id="rolesdata" name="role_name" class="form-control">
                                            <?php foreach( $rolesdata as $adminroles) {?>
                                                <option value="<?= $adminroles['role_name'] ?>"><?= $adminroles['role_name'] ?></option>
                                            <?php } ?>
                                        </select>
	                                </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="is_active" class="col-form-label">Is Active</label>
                                        <select id="is_active" name="is_active" class="form-control">
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->

    </div> <!-- content -->
<?php $this->load->view('admin_footer'); ?>