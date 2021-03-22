<form method="post" action="" id="addpersonmodal" name="addpersonmodal">
	<div class="modal-body">
	        <div class="form-row">
	            <div class="form-group col-md-12">
	                <label for="person_name" class="col-form-label">Name</label>
	                <input type="text" class="form-control" name="person_name" id="person_name" placeholder="" value="">
	                <p class="person_name_error"></p>
	            </div>
	            <div class="form-group col-md-12">
	                <label for="person_message" class="col-form-label">Mesaage</label>
	                <input type="text" class="form-control" name="person_message" id="person_message" placeholder="" value="">
	                <p class="person_message_error"></p>
	            </div>
	            <div class="form-group col-md-12">
	                <label for="person_age" class="col-form-label">Age</label>
	                <input type="text" class="form-control" name="person_age" id="person_age" placeholder="" value="">
	                <p class="person_age_error"></p>
	            </div>
	        </div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary">Save changes</button>
	</div>
</form>