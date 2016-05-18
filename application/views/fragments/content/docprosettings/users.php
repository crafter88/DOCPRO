<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Users</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<button id='add' type='button' class='btn btn-info btn-sm hint--right' data-hint='Add'><i class='fa fa-plus'></i></button>
			<div class='row'>
				<div class='col-md-12' id='users-table-row'>
					<table id='users-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<th>Options</th>
							<th>Name</th>
							<th>Username</th>
							<th>User Password</th>
							<th>Company</th>
							<th>Access Level</th>
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
					<table width='80%'>
						<tr>
							<td style='text-align: right; padding-right: 10px;'><label>Name</label></td>
							<td><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Username</label></td>
							<td style='padding-top: 10px; width: 270px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Password</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Company</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Access Level</label></td>
							<td style='padding-top: 10px;'>
								<select class='form-control' name=''>
									<option value='Super Admin'>Super Admin</option>
									<option value='Super Admin'>Admin</option>
									<option value='Super Admin'>User</option>
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
					<table width='80%'>
						<tr>
							<td style='text-align: right; padding-right: 10px;'><label>Name</label></td>
							<td><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Username</label></td>
							<td style='padding-top: 10px; width: 270px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Password</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Company</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Access Level</label></td>
							<td style='padding-top: 10px;'>
								<select class='form-control' name=''>
									<option value='Super Admin'>Super Admin</option>
									<option value='Super Admin'>Admin</option>
									<option value='Super Admin'>User</option>
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
					<table width='80%'>
						<tr>
							<td style='text-align: right; padding-right: 10px;'><label>Name</label></td>
							<td><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Username</label></td>
							<td style='padding-top: 10px; width: 270px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Password</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Company</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Access Level</label></td>
							<td style='padding-top: 10px;'>
								<select class='form-control' name=''>
									<option value='Super Admin'>Super Admin</option>
									<option value='Super Admin'>Admin</option>
									<option value='Super Admin'>User</option>
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