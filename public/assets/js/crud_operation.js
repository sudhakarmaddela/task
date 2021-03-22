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
								'<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id="'+data[i].id+'" data-name="'+data[i].name+'" data-age="'+data[i].age+'" data-skills="'+data[i].skills+'" data-designation="'+data[i].designation+'" data-address="'+data[i].address+'"><i class="mdi mdi-account-edit"></i></a>'+' '+
								'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id="'+data[i].id+'"><i class="mdi mdi-delete"></i></a>'+
							'</td>'+
							'</tr>';
							//alert('dfsdf');
				}
				$('#vlists').html(html);
			}
		});
	}

});

