<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Discounts</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<button id='add' type='button' class='btn btn-info btn-sm hint--right' data-hint='Add'><i class='fa fa-plus'></i></button>
			<div class='row'>
				<div class='col-md-12' id='discounts-table-row'>
					<table id='discounts-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<th>Options</th>
							<th>Code</th>
							<th>Name</th>
							<th>Shortname</th>	
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>Add Discount</h3>
	</div>
	<div class='col-md-8'>
		<form action='discounts/add' method='post'>
			<div class='modal-body'>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-code'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-shortname'></td>
					</tr>
				</table>
			</div>
			<div class='modal-footer'>
				<button class='btn btn-primary btn-sm' type='submit' style='float: left;'>Ok</button>
			</div>
		</form>
	</div>
</div>
<div id='view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>View Discount</h3>
	</div>
	<div class='col-md-8'>
		<form>
			<div class='modal-body'>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-code' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-name' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-shortname' class='form-control' type='text' readonly></td>
					</tr>
				</table>
			</div>
			<div class='modal-footer'>
				<button class='btn btn-primary btn-sm close-popover' type='button' data-dismiss='modal' style='float: left;'>Close</button>
			</div>
		</form>
	</div>
</div>
<div id='edit-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>Edit Discount</h3>
	</div>
	<div class='col-md-8'>
		<form action='discounts/edit' method='post'>
			<div class='modal-body'>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-code' class='form-control' type='text' name='edit-code'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-name' class='form-control' type='text' name='edit-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-shortname' class='form-control' type='text' name='edit-shortname'></td>
					</tr>
				</table>
			</div>
			<input type='hidden' id='edit-id' name='edit-id' value=''>
			<div class='modal-footer'>
				<button class='btn btn-primary btn-sm' type='submit' style='float: left;'>Ok</button>
			</div>
		</form>
	</div>
</div>
<div id='update-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>Update Discount</h3>
	</div>
	<div class='col-md-8'>
		<form action='discounts/update' method='post'>
			<div class='modal-body'>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-code' class='form-control' type='text' name='update-code'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-name' class='form-control' type='text' name='update-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-shortname' class='form-control' type='text' name='update-shortname'></td>
					</tr>
				</table>
			</div>
			<div class='modal-footer'>
				<button class='btn btn-primary btn-sm' type='submit' data-dismiss='modal' style='float: left;'>Ok</button>
			</div>
		</form>
	</div>
</div>