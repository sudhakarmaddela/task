<?php $this->load->view('admin_header'); ?>
    
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Admins List</h4>

                            <table id="basic-datatable" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Admin Name</th>
                                        <th>Email</th>
                                        <th>Mobile No</th>
                                        <th>Role</th>
                                        <th>Is Active</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php if (!empty($adminsdata)) { foreach($adminsdata as $adminslists) {?>
                                    <tr>

                                        <td><?php echo $adminslists['admin_id'] ?></td>
                                        <td><?php echo $adminslists['admin_name'] ?></td>
                                        <td><?php echo $adminslists['admin_email'] ?></td>
                                        <td><?php echo $adminslists['admin_mobileno'] ?></td>
                                        <td><?php echo $adminslists['role_name'] ?></td>
                                        <td><?php echo $adminslists['is_active'] ?></td>
                                    </tr>
                                    <?php } } else { ?>
                                    <tr>
                                        <td>Norecords Found</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->

        </div> <!-- container-fluid -->

    </div> <!-- content -->
<?php $this->load->view('admin_footer'); ?>