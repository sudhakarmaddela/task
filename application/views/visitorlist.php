<?php $this->load->view('admin_header');?>
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

    	<div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right">
                            <a href="#"  type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#addVisitorModal"><i class="mdi mdi-plus-thick"></i> Add</a>
                        </div>

                        <h4 class="header-title mb-4">Sales Overview</h4>

                        <table class="table dataTable table-bordered table-sm mb-0" id="visitorlistings">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Mobile No</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="vlists">
                            </tbody>
                        </table>

                    </div>
                </div>
        	</div>
    	</div>

    </div> <!-- container-fluid -->

</div> <!-- content -->


<!-- Save Visitor -->
<form id="saveEmpForm" method="post">
	<div id="addVisitorModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title">Add Visitor</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	            </div>
	            <div class="modal-body p-4">
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label for="visitor_name" class="control-label">Name</label>
	                            <input type="text" class="form-control" id="visitor_name" name="visitor_name" placeholder="">
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label for="visitor_mobilenod-2" class="control-label">Mobile No</label>
	                            <input type="text" class="form-control" id="visitor_mobileno" name="visitor_mobileno" placeholder="">
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="form-group">
	                            <label for="visitor_address" class="control-label">Address</label>
	                            <input type="text" class="form-control" id="visitor_address" name="visitor_address" placeholder="">
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
	                <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
	            </div>
	        </div>
	    </div>
	</div><!-- /.modal -->
</form>
<?php $this->load->view('admin_footer');?>