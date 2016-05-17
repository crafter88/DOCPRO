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
<div id='user-comp-select' style='display: none;'>
	<?php foreach($company as $comp){ ?>
	<button class='btn btn-default select-option' co-id='<?php echo $comp->co_id; ?>' type='button' style='width: 100%'><?php echo $comp->co_name;?></button>
	
	<?php }?>
</div>
<div id='add-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add User</h4>
			</div>
			<form action='users/add' method='post'>
				<div class='modal-body'>
					<table width='80%'>
						<tr>
							<td style='text-align: right; padding-right: 10px;'><label>First Name :</label></td>
							<td><input class='form-control' type='text' name='fname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Middle Name :</label></td>
							<td style='padding-top: 10px; width: 270px;'><input class='form-control' type='text' name='mname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Last Name :</label></td>
							<td style='padding-top: 10px; width: 270px;'><input class='form-control' type='text' name='lname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Address :</label></td>
							<td style='padding-top: 10px; width: 270px;'><input class='form-control' type='text' name='addr'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Contact Number :</label></td>
							<td style='padding-top: 10px; width: 270px;'><input class='form-control' type='text' name='cnum'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Email :</label></td>
							<td style='padding-top: 10px; width: 270px;'><input class='form-control' type='text' name='email'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Username :</label></td>
							<td style='padding-top: 10px; width: 270px;'><input class='form-control' type='text' name='username'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Password :</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name='pass'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Re-Type Password :</label></td>
							<td style='padding-top: 10px;'><input class='form-control' type='text' name='rpass'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Company :</label></td>
							<td style='padding-top: 10px;'>
								<div class='input-group' style='width: 100%'>
									<input class='form-control' type='text' name='company' placeholder='Select...' readonly>
									<span type='button' class='input-group-addon company-btn'><i class='fa fa-caret-right'></i></span>
								</div>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Access Level :</label></td>
							<td style='padding-top: 10px;'>
								<select class='form-control' name='alvl'>
									<option value='Super Admin'>Super Admin</option>
									<option value='Admin'>Admin</option>
									<option value='User'>User</option>
								</select>
							</td>
						</tr>
						<input type='hidden' id='co-id' name='coid'>
					</table>
				</div>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info' type='submit' style='float: right;'>Ok</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id='view-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View User</h4>
			</div>
			<form action='users/get' method='post'>
				<div class='modal-body'>
					<table width='80%'>
						<tr>
							<td style='text-align: right; padding-right: 10px;'><label>First Name :</label></td>
							<td><input id='view-fname' class='form-control' type='text' name='fname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Middle Name :</label></td>
							<td style='padding-top: 10px; width: 270px;'><input id ='view-mname' class='form-control' type='text' name='mname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Last Name :</label></td>
							<td style='padding-top: 10px; width: 270px;'><input id='view-lname' class='form-control' type='text' name='lname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Address :</label></td>
							<td style='padding-top: 10px; width: 270px;'><input id='view-addr' class='form-control' type='text' name='addr'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Contact Number :</label></td>
							<td style='padding-top: 10px; width: 270px;'><input id='view-cnum' class='form-control' type='text' name='cnum'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Email :</label></td>
							<td style='padding-top: 10px; width: 270px;'><input id='view-email' class='form-control' type='text' name='email'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Username :</label></td>
							<td style='padding-top: 10px; width: 270px;'><input id='view-username' class='form-control' type='text' name='username'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Password :</label></td>
							<td style='padding-top: 10px;'><input id='view-pass' class='form-control' type='text' name='pass'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Company :</label></td>
							<td style='padding-top: 10px;'>
								<div class='input-group' style='width: 100%'>
									<input id='view-company' class='form-control' type='text' name='company' placeholder='Select...' readonly>
									<span type='button' class='input-group-addon'><i class='fa fa-caret-right'></i></span>
								</div>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Access Level :</label></td>
							<td style='padding-top: 10px;'>
								<select id='view-alvl' class='form-control' name='alvl'>
									<option value='Super Admin'>Super Admin</option>
									<option value='Admin'>Admin</option>
									<option value='User'>User</option>
								</select>
							</td>
						</tr>
						<input type='hidden' id='co-id' name='coid'>
					</table>
				</div>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info' type='button' data-dismiss='modal' style='float: right;'>Close</button>
				</div>
			</form>
		</div>
	</div>
</div>