<?php $this->load->view('admin_header'); ?>
<div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        	<a href="javascript:void(0);" onclick="showModal();" class="btn btn-secondary mb-4">Add</a>
                            <div class="table-responsive">
                                <table class="table table-bordered dt-responsive nowrap w-100" id="persondetailslist">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>name</th>
                                        <th>message</th>
                                        <th>age</th>
                                    </tr>
                                    </thead>
                                    <tbody>
	                                    <?php if(!empty($rows)) { ?>
						                    <?php foreach($rows as $row){
						                        $data['row'] = $row;
						                        $this->load->view('personrow',$data);
						                    } 
						                    ?>
						                <?php } else { ?>
						                    <tr>
						                        <td>Records not found</td>
						                    </tr>
						                <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->

        </div> <!-- container-fluid -->

    </div> <!-- content -->

<!-- Modal -->
<div class="modal fade" id="createPerson" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      	<div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Add Person</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	</div>
      	<div id="response">
        	
    	</div>
    </div>
  </div>
</div>

<div class="modal fade" id="ajaxResponseModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Alert</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>      
           	<div id="ajaxResponse">   
	            <div class="modal-body">
	       
	            </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin_footer'); ?>

<script type="text/javascript">
	function showModal() {
		$("#createPerson").modal("show");

		$.ajax({
			url: '<?php echo base_url().'MyPerson/createform' ?>',
			type: 'POST',
			data: {},
			dataType: 'json',
			success: function(response) {
				$("#response").html(response["html"]);
			}
		})
	}

	$("body").on("submit","#addpersonmodal",function(e){
		e.preventDefault();

		$.ajax({
			url: '<?php echo base_url().'MyPerson/saveperson' ?>',
			type: 'POST',
			data: $(this).serializeArray(),
			dataType: 'json',
			success: function(response){

				if (response['status'] == 0) {
					
					if (response['person_name'] != '') {
						$('.person_name_error').html(response['person_name']).addClass('invalid-feedback d-block');
						$("#person_name").addClass('is-invalid');
					} else {
						$('.person_name_error').html("").removeClass('invalid-feedback d-block'); 
                       	$("#person_name").removeClass('is-invalid');;
					}

					if (response['person_message'] != '') {
						$('.person_message_error').html(response['person_message']).addClass('invalid-feedback d-block');
						$("#person_message").addClass('is-invalid');
					} else {
						$('.person_message_error').html("").removeClass('invalid-feedback d-block'); 
                       	$("#person_message").removeClass('is-invalid');;
					}

					if (response['person_age'] != '') {
						$('.person_age_error').html(response['person_age']).addClass('invalid-feedback d-block');
						$("#person_age").addClass('is-invalid');
					} else {
						$('.person_age_error').html("").removeClass('invalid-feedback d-block'); 
                       	$("#person_age").removeClass('is-invalid');;
					}

				} else {

					$("#createPerson").modal("hide");
				 	$("#ajaxResponseModal .modal-body").html(response["message"]);
                    $("#ajaxResponseModal").modal("show");

                    $(".person_message_error").html("").removeClass('invalid-feedback d-block'); 
                    $("#person_name").removeClass('is-invalid');

                    $(".person_name_error").html("").removeClass('invalid-feedback d-block'); 
                    $("#person_message").removeClass('is-invalid');

                    $(".person_age_error").html("").removeClass('invalid-feedback d-block'); 
                    $("#person_age").removeClass('is-invalid');

					$('#persondetailslist').append(response['row']);

					
				}
			}
		});
	});
</script>