<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Modes of Payment</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<button id='add' type='button' class='btn btn-info btn-sm hint--right' data-hint='Add'><i class='fa fa-plus'></i></button>
			<div class='row'>
				<div class='col-md-12' id='modes-of-payment-table-row'>
					<table id='modes-of-payment-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<th>Options</th>
							<th>Code</th>
							<th>Sequence</th>
							<th>Name</th>
							<th>Short Name</th>
							<th>Payment Type</th>
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
				<div class='modal-body'>
					<input type='text' style='border: none; float: right; width: 40px; margin-right: 130px;'>
					<label style='float: right;'>Sequence: </label>
					<table width='80%'>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 150px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='float: right; padding-right: 10px; padding-top: 10px;'><label>Code</label></td>
							<td style=' padding-top: 10px; padding-right: 10px; width: 140px;'><input class='form-control' type='text' name=''></td>
							<td style='padding-top: 15px; text-align: right; padding-right: 5px;'><label>Short Name</label></td>
							<td style='padding-top: 10px; width:80px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 150px;'><label>Payment Type</label></td>
							<td colspan='3' style='padding-top: 10px;'>
								<select class='form-control' name=''>
									<option value='cash'>Cash</option>
									<option value='credit'>Credit</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
				<div class='modal-footer'>
					<button class='btn btn-primary' type='submit' style='float: left;'>Ok</button>
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
					<input type='text' style='border: none; float: right; width: 40px; margin-right: 130px;'>
					<label style='float: right;'>Sequence: </label>
					<table width='80%'>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 150px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='float: right; padding-right: 10px; padding-top: 10px;'><label>Code</label></td>
							<td style=' padding-top: 10px; padding-right: 10px; width: 140px;'><input class='form-control' type='text' name=''></td>
							<td style='padding-top: 15px; text-align: right; padding-right: 5px;'><label>Short Name</label></td>
							<td style='padding-top: 10px; width:80px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 150px;'><label>Payment Type</label></td>
							<td colspan='3' style='padding-top: 10px;'>
								<select class='form-control' name=''>
									<option value='cash'>Cash</option>
									<option value='credit'>Credit</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
				<div class='modal-footer'>
					<button class='btn btn-primary' type='submit' style='float: left;'>Ok</button>
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
					<input type='text' style='border: none; float: right; width: 40px; margin-right: 130px;'>
					<label style='float: right;'>Sequence: </label>
					<table width='80%'>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 150px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='float: right; padding-right: 10px; padding-top: 10px;'><label>Code</label></td>
							<td style=' padding-top: 10px; padding-right: 10px; width: 140px;'><input class='form-control' type='text' name=''></td>
							<td style='padding-top: 15px; text-align: right; padding-right: 5px;'><label>Short Name</label></td>
							<td style='padding-top: 10px; width:80px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 150px;'><label>Payment Type</label></td>
							<td colspan='3' style='padding-top: 10px;'>
								<select class='form-control' name=''>
									<option value='cash'>Cash</option>
									<option value='credit'>Credit</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
				<div class='modal-footer'>
					<button class='btn btn-primary' type='submit' style='float: left;'>Ok</button>
				</div>
			</form>
		</div>
	</div>
</div>