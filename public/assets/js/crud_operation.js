$(document).ready(function(){
	listVisitors();
	var table = $('#visitorlistings').dataTable({
		"bPaginate": true,
		"bInfo": true,
		"bFilter": true,
		"bLengthChange": true,
		"pageLength": 10,
		"order": [[ 0, "desc" ]]
	});


	// Save Visitor
	$('#saveEmpForm').submit('click',function(){
		var Vname = $('#visitor_name').val();
		var Vmobileno = $('#visitor_mobileno').val();
		var Vaddress = $('#visitor_address').val();
		$.ajax({
			type: "POST",
			url: "visitor/savevisitors",
			dataType: "JSON",
			data: {visitor_name:Vname, visitor_mobileno:Vmobileno, visitor_address:Vaddress},
			success: function(data){
				$('#visitor_name').val("");
				$('#visitor_mobileno').val("");
				$('#visitor_address').val("");
				$('#addVisitorModal').modal('hide');

				toastr["success"]("Record Added Successfully.");
				listVisitors();

				toastr.options = {
				  "closeButton": true,
				  "debug": false,
				  "newestOnTop": false,
				  "progressBar": true,
				  "positionClass": "toast-top-right",
				  "preventDuplicates": false,
				  "onclick": null,
				  "showDuration": "300",
				  "hideDuration": "1000",
				  "timeOut": "5000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}
			}
		});
		return false;
	});

	

	// List Visitors
	function listVisitors(){
		$.ajax({
			type: "ajax",
			//method: "POST",
			url: "visitor/show",
			dataType: "json",
			async : false,
			success: function(data){
				var html = '';
				var i;
				for(i=0; i<data.length; i++){
					html += '<tr id="'+data[i].id+'">'+
							'<td>'+data[i].id+'</td>'+
							'<td>'+data[i].visitor_name+'</td>'+
							'<td>'+data[i].visitor_mobileno+'</td>'+
							'<td>'+data[i].visitor_address+'</td>'+
							'<td>'+
								'<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id="'+data[i].id+'" data-visitor_name="'+data[i].visitor_name+'" data-visitor_mobileno="'+data[i].visitor_mobileno+'" data-visitor_address="'+data[i].visitor_address+'"><i class="mdi mdi-account-edit"></i></a>'+' '+
								'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id="'+data[i].id+'"><i class="mdi mdi-delete"></i></a>'+
							'</td>'+
							'</tr>';
							//alert('dfsdf');
				}
				$('#vlists').html(html);
			}
		});
	}

	//update visitor
	$('#vlists').on('click','.editRecord',function(){
		$('#editVisitorModal').modal('show');
		$("#visitId").val($(this).data('id'));
		$("#visitorName").val($(this).data('visitor_name'));
		$("#visitorMobileno").val($(this).data('visitor_mobileno'));
		$("#visitorAddress").val($(this).data('visitor_address'));
	});
	// save edit data
	$('#editVisitorForm').on('submit',function(){
		var visitId = $('#visitId').val();
		var visitorName = $('#visitorName').val();
		var visitorMobileno = $('#visitorMobileno').val();
		var visitorAddress = $('#visitorAddress').val();
		$.ajax({
			type : "POST",
			url  : "visitor/update",
			dataType : "JSON",
			data : {id:visitId, visitor_name:visitorName, visitor_mobileno:visitorMobileno, visitor_address:visitorAddress},
			success: function(data){
				$("#visitId").val("");
				$("#visitorName").val("");
				$('#visitorMobileno').val("");
				$("#visitorAddress").val("");
				$('#editVisitorModal').modal('hide');
				listVisitors();
			}
		});
		return false;
	});

	// show delete form
	$('#vlists').on('click','.deleteRecord',function(){
		var empId = $(this).data('id');            
		$('#deleteVisitModal').modal('show');
		$('#deleteEmpId').val(empId);
	});
	// delete emp record
	$('#deleteVisitForm').on('submit',function(){
		var empId = $('#deleteEmpId').val();
		$.ajax({
			type : "POST",
			url  : "visitor/delete",
			dataType : "JSON",  
			data : {id:empId},
			success: function(data){
				$("#"+empId).remove();
				$('#deleteEmpId').val("");
				$('#deleteVisitModal').modal('hide');

				toastr["success"]("Record Deleted.");

				toastr.options = {
				  "closeButton": true,
				  "debug": false,
				  "newestOnTop": false,
				  "progressBar": true,
				  "positionClass": "toast-top-right",
				  "preventDuplicates": false,
				  "onclick": null,
				  "showDuration": "300",
				  "hideDuration": "1000",
				  "timeOut": "5000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}
				listVisitors();
			}
		});
		return false;
	});

});