<?php $this->load->view('admin_header'); ?>
    
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Roles List</h4>

                            <table id="basic-datatable" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Role Name</th>
                                        <th>Is Active</th>
                                        <th>Added Date</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php if (!empty($rolesdata)) { foreach($rolesdata as $categories) {?>
                                    <tr>

                                        <td><?php echo $categories['role_id'] ?></td>
                                        <td><?php echo $categories['role_name'] ?></td>
                                        <td><?php echo $categories['is_active'] ?></td>
                                        <td><?php echo $categories['date_added'] ?></td>
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