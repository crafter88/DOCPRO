<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Taxes</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<button id='add' type='button' class='btn btn-info btn-sm hint--right' data-hint='Add'><i class='fa fa-plus'></i></button>
			<div class='row'>
				<div class='col-md-12' id='taxes-table-row'>
					<table id='taxes-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<th>Options</th>
							<th>Sequence</th>
							<th>Code</th>
							<th>Type</th>
							<th>Name</th>
							<th>Shortname</th>
							<th>Rate</th>
							<th>Base</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='t-type-select' style='display: none;'>
	<?php foreach($tt_type as $tt){if($tt->tt_code != 8){?>
	<button class='btn btn-default select-option' type-id='<?php echo $tt->tt_code;?>' type='button' style='width: 100%'><?php echo $tt->tt_name;?></button>
	<?php }}?>
</div>
<div id='add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>Add Tax</h3>
	</div>
	<div class='col-md-8'>
		<form action='taxes/add' method='post'>
			<div class='modal-body'>
				<input type='text' style='border: none; float: right; width: 40px; margin-right: 50px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>
				<table width='90%'>
					<tr>
						<input type='hidden' name='add-type-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input class='form-control' type='text' name='add-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon add-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-shortname'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-rate'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Base</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-base'></td>
					</tr>
				</table>
			</div>
			<div class='modal-footer'>
				<button class='btn btn-primary btn-sm' type='submit' style='float: left;'>Ok</button>
			</div>
		</form>
	</div>
	<div class='col-md-4' id='add-options'style='background-color: white;'>
	</div>
</div>
<div id='view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>View Tax</h3>
	</div>
	<div class='col-md-8'>
		<form>
			<div class='modal-body'>
				<input id='view-seq' type='text' style='border: none; float: right; width: 40px; margin-right: 50px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-code' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='view-type' class='form-control' type='text' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-name' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-shortname' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-rate' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Base</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-base' class='form-control' type='text' readonly></td>
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
		<h3 class='modal-title'>Edit Tax</h3>
	</div>
	<div class='col-md-8'>
		<form action='taxes/edit' method='post'>
			<div class='modal-body'>
				<input id='edit-seq' type='text' style='border: none; float: right; width: 40px; margin-right: 50px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>
				<table width='90%'>
					<tr>
						<input id='edit-type-id' type='hidden' name='edit-type-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='edit-type' class='form-control' type='text' name='edit-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon edit-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-name' class='form-control' type='text' name='edit-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-shortname' class='form-control' type='text' name='edit-shortname'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-rate' class='form-control' type='text' name='edit-rate'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Base</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-base' class='form-control' type='text' name='edit-base'></td>
					</tr>
				</table>
			</div>
			<input type='hidden' id='edit-id' name='edit-id' value=''>
			<div class='modal-footer'>
				<button class='btn btn-primary btn-sm' type='submit' style='float: left;'>Ok</button>
			</div>
		</form>
	</div>
	<div class='col-md-4' id='edit-options'style='background-color: white;'>
	</div>
</div>
<div id='update-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>Update Tax</h3>
	</div>
	<div class='col-md-8'>
		<form action='taxes/update' method='post'>
			<div class='modal-body'>
				<input id='update-seq' type='hidden'>
				<input type='text' style='border: none; float: right; width: 40px; margin-right: 50px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>
				<table width='90%'>
					<tr>
						<input id='update-type-id' type='hidden' name='update-type-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='update-type' class='form-control' type='text' name='update-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon update-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-name' class='form-control' type='text' name='update-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-shortname' class='form-control' type='text' name='update-shortname'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Rate</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-rate' class='form-control' type='text' name='update-rate'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Base</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-base' class='form-control' type='text' name='update-base'></td>
					</tr>
				</table>
			</div>
			<div class='modal-footer'>
				<button class='btn btn-primary btn-sm' type='submit' data-dismiss='modal' style='float: left;'>Ok</button>
			</div>
		</form>
	</div>
	<div class='col-md-4' id='update-options'style='background-color: white;'>
	</div>
</div>