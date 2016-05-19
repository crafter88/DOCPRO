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
							<th>Sequence</th>
							<th>Name</th>
							<th>Username</th>
							<th>Password</th>
							<th>Company</th>
							<th>Access Level</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='u-company-select' style='display: none;'>
	<?php foreach($company_branches as $cb){ ?>
	<button class='btn btn-default select-option-company' cb-id='<?php echo $cb->cb_id; ?>' type='button' style='width: 100%'><?php echo $cb->cb_name;?></button>
	<?php }?>
</div>
<div id='u-user-type-select' style='display: none;'>
	<button class='btn btn-default select-option-user-type' type='button' style='width: 100%'>Super Admin</button>
	<button class='btn btn-default select-option-user-type' type='button' style='width: 100%'>Admin</button>
	<button class='btn btn-default select-option-user-type' type='button' style='width: 100%'>User</button>
</div>
<div id='add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>Add User</h3>
	</div>
	<div class='col-md-8'>
		<form action='users/add' method='post'>
			<div class='modal-body'>
				<input type='text' style='border: none; float: right; width: 40px; margin-right: 50px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>First Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-username'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Username</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-username'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Password</label></td>
						<td colspan='3'style='padding-top: 10px;'><input class='form-control' type='text' name='add-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Re-Type Password</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-r-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Company</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input class='form-control' type='text' name='add-company' placeholder='Select...' readonly>
								<input name='add-cb-id' type='hidden' value=''>
								<span type='button' class='input-group-addon add-company-btn'><i class='fa fa-caret-right'></i></span>
							</div>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Access Level</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input class='form-control' type='text' name='add-user-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon add-user-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
					</tr>
				</table>
			</div>
			<div class='modal-footer'>
				<button class='btn btn-primary' type='submit' style='float: left;'>Ok</button>
			</div>
		</form>
	</div>
	<div class='col-md-4' id='add-options'style='background-color: white;'>
	</div>
</div>
<div id='view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>View User</h3>
	</div>
	<div class='col-md-8'>
		<form>
			<div class='modal-body'>
				<input id='view-seq' type='text' style='border: none; float: right; width: 40px; margin-right: 50px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>	
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Username</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-username' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Password</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-password' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Company</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='view-company' class='form-control' type='text' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon'><i class='fa fa-caret-right'></i></span>
							</div>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Access Level</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='view-user-type' class='form-control' type='text' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon'><i class='fa fa-caret-right'></i></span>
							</div>
					</tr>
				</table>
			</div>
			<div class='modal-footer'>
				<button class='btn btn-primary close-popover' type='button' data-dismiss='modal' style='float: left;'>Close</button>
			</div>
		</form>
	</div>
</div>
<div id='edit-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>Edit User</h3>
	</div>
	<div class='col-md-8'>
		<form action='users/edit' method='post'>
			<div class='modal-body'>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Username</label></td>
						<td style='padding-top: 10px; width: 270px;'><input id='edit-uname' class='form-control' type='text' name='edit-uname'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Old Password</label></td>
						<td style='padding-top: 10px;'><input id='edit-opass' class='form-control' type='text' name='edit-opass'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>New Password</label></td>
						<td style='padding-top: 10px;'><input id='edit-npass' class='form-control' type='text' name='edit-npass'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Re-Type Password</label></td>
						<td style='padding-top: 10px;'><input id='edit-rpass' class='form-control' type='text' name='edit-rpass'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Company</label></td>
						<td style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='edit-company' class='form-control' type='text' name='edit-company' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon'><i class='fa fa-caret-right'></i></span>
							</div>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Access Level</label></td>
						<td style='padding-top: 10px;'>
							<select id='edit-utype' class='form-control' name='edit-utype'>
								<option value='Super Admin'>Super Admin</option>
								<option value='Admin'>Admin</option>
								<option value='User'>User</option>
							</select>
						</td>
					</tr>
				</table>
			</div>
			<div class='modal-footer'>
				<button class='btn btn-primary btn-sm' type='submit' data-dismiss='modal' style='float: left;'>Ok</button>
			</div>
		</form>
	</div>
	<div class='col-md-4' id='edit-options'style='background-color: white;'>
	</div>
</div>