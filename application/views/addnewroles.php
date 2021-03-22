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
                            <h4 class="header-title">Add Role</h4>

                            <form method="post" action="<?php echo base_url().'admin/addrole'; ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="role_name" class="col-form-label">Role Name</label>
                                        <input type="text" class="form-control" name="role_name" id="role_name" placeholder="">
                                        <?php echo form_error('role_name'); ?>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="is_active" class="col-form-label">Is Active</label>
                                        <select id="is_active" name="is_active" class="form-control">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
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