<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Products</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<button id='add' type='button' class='btn btn-info btn-sm hint--right' data-hint='Add'><i class='fa fa-plus'></i></button>
			<div class='row'>
				<div class='col-md-12' id='company-table-row'>
					<table id='products-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<th>Options</th>
							<th>Code</th>
							<th>Sequence</th>
							<th>Name</th>
							<th>Short Name</th>
							<th>Profit Cost Center</th>
							<th>Department</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div id='add-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button class='close' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title'>Add</h4>
			</div>
			<form action='#' method='post'>
				<input type='text' style='border: none; float: right; width: 40px; margin-right: 150px; padding-top: 10px;'>
				<label style='float: right; padding-top: 10px;'>Sequence: </label>
				<div class='modal-body'>
					<table width='80%'>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Code</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Name</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Shortname</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 200px;'><label>Profit Cost Center</label></td>
							<td style='padding-top: 10px;'>
								<div class='input-group'>
									<input class='form-control' type='text' name='profit_cost_center' placeholder='Select...' readonly>
									<span type='button' class='input-group-addon tax-type-btn'><i class='fa fa-caret-right'></i></span>
								</div>
							</td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 200px;'><label>Department</label></td>
							<td style='padding-top: 10px;'>
								<div class='input-group'>
									<input class='form-control' type='text' name='department' placeholder='Select...' readonly>
									<span type='button' class='input-group-addon tax-type-btn'><i class='fa fa-caret-right'></i></span>
								</div>
							</td>
						</tr>
					</table>
				</div>
				<div class='modal-footer'>
					<button class='btn btn-primary btn-sm' type='submit' style='float: left;'>Ok</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div id='edit-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button class='close' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title'>Edit</h4>
			</div>
			<form action='#' method='post'>
				<div class='modal-body'>
				
				</div>
			</form>
		</div>
	</div>
</div>

<div id='update-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button class='close' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title'>Update</h4>
			</div>
			<form action='#' method='post'>
				<div class='modal-body'>
				
				</div>
			</form>
		</div>
	</div>
</div>