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
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add User</h4>
	</div>
	<div class='col-md-7'>
		<form action='users/add' method='post' class='body'>
			<div class='modal-body'>
				<input type='text' style='border: none; float: right; width: 50px; text-align: center; font-weight: bold; background-color: white; height: 19px;' disabled>
				<label style='float: right;'>Sequence: </label>

				<br>

				<div style='height: 30px; width: 450px; background-color: #e8e8e8; border-top: 1px solid #d5d5d5; border-bottom: 1px solid#d5d5d5; border-right: 1px solid #d5d5d5;'>
				<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; margin-top: 4px;">Personal Informations</h4>
				</div>

				<table width='100%'>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>First Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-username'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Last Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-username'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 129px; text-align: right; padding-right: 20px;'><label>Middle Name</label></td>
						<td colspan='3'style='padding-top: 10px;'><input class='form-control' type='text' name='add-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Address</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-r-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Birthdate</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-r-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Gender</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-r-password'></td>
					</tr>
				</table>
				</table>

				<br>

				<div style='height: 30px; width: 450px; background-color: #e8e8e8; border-top: 1px solid #d5d5d5; border-bottom: 1px solid#d5d5d5; border-right: 1px solid #d5d5d5;'>
				<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; margin-top: 4px;">User Credentials</h4>
				</div>

				<table width='100%'>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Username</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-username'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Password</label></td>
						<td colspan='3'style='padding-top: 10px;'><input class='form-control' type='text' name='add-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 130px; text-align: right; padding-right: 20px;'><label>Re-Type Password</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-r-password'></td>
					</tr>
				</table>
			</div>
			<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
				<button class='btn btn-info' type='submit' style='float: right;'>OK</button>
			</div>
		</form>
	</div>

	<div class='col-md-6' id='add-options'style='background-color: white;'>
		<div style='height: 30px; width: 299px; background-color: #e8e8e8; border-top: 1px solid #d5d5d5; border-bottom: 1px solid#d5d5d5; border-right: 1px solid #d5d5d5;'>
		<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; margin-top: 4px;">User Company</h4>
		</div>
		<table width='100%'>
			<div id='p-scents'>
				<div>
					<tr width='100%'>
						<td class='adding-field' colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='companies' class='form-control' type='text' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td>
						<button id='addfield' class='btn btn-info' type='submit' style='float: right;'><i class='fa fa-plus'></i></button>
						</td>
					</tr>
				</div>
			</div>
		</table>
	</div>
	<div class='col-md-1' id='edit-options'style='background-color: white;'>

	</div>
</div>


<div id='view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add User</h4>
	</div>
	<div class='col-md-7'>
		<form action='users/add' method='post' class='body'>
			<div class='modal-body'>
				<input type='text' style='border: none; float: right; width: 50px; text-align: center; font-weight: bold; background-color: white; height: 19px;' disabled>
				<label style='float: right;'>Sequence: </label>

				<br>

				<div style='height: 30px; width: 450px; background-color: #e8e8e8; border-top: 1px solid #d5d5d5; border-bottom: 1px solid#d5d5d5; border-right: 1px solid #d5d5d5;'>
				<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; margin-top: 4px;">Personal Informations</h4>
				</div>

				<table width='100%'>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>First Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-username'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Last Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-username'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 129px; text-align: right; padding-right: 20px;'><label>Middle Name</label></td>
						<td colspan='3'style='padding-top: 10px;'><input class='form-control' type='text' name='add-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Address</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-r-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Birthdate</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-r-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Gender</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-r-password'></td>
					</tr>
				</table>
				</table>

				<br>

				<div style='height: 30px; width: 450px; background-color: #e8e8e8; border-top: 1px solid #d5d5d5; border-bottom: 1px solid#d5d5d5; border-right: 1px solid #d5d5d5;'>
				<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; margin-top: 4px;">User Credentials</h4>
				</div>

				<table width='100%'>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Username</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-username'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Password</label></td>
						<td colspan='3'style='padding-top: 10px;'><input class='form-control' type='text' name='add-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 130px; text-align: right; padding-right: 20px;'><label>Re-Type Password</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-r-password'></td>
					</tr>
				</table>
			</div>
			<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
				<button class='btn btn-info' type='submit' style='float: right;'>OK</button>
			</div>
		</form>
	</div>

	<div class='col-md-6' id='add-options'style='background-color: white;'>
		<div style='height: 30px; width: 299px; background-color: #e8e8e8; border-top: 1px solid #d5d5d5; border-bottom: 1px solid#d5d5d5; border-right: 1px solid #d5d5d5;'>
		<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; margin-top: 4px;">User Company</h4>
		</div>
		<table width='100%'>
			<tr>
				<td class='adding-field' colspan='3' style='padding-top: 10px;'>
					<div class='input-group' style='width: 100%'>
						<input id='companies' class='form-control' type='text' placeholder='Select...' readonly>
						<span type='button' class='input-group-addon'><i class='fa fa-caret-right'></i></span>
					</div>
				</td>
			</tr>
			<tr>
				<td>
				<button class='btn btn-info' type='submit' style='float: right;'><i class='fa fa-plus'></i></button>
				</td>
			</tr>
		</table>
	</div>
	<div class='col-md-1' id='edit-options'style='background-color: white;'>

	</div>
</div>

<div id='edit-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
		<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
		<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add User</h4>
	</div>
	<div class='col-md-7'>
		<form action='users/add' method='post' class='body'>
			<div class='modal-body'>
				<input type='text' style='border: none; float: right; width: 50px; text-align: center; font-weight: bold; background-color: white; height: 19px;' disabled>
				<label style='float: right;'>Sequence: </label>

				<br>

				<div style='height: 30px; width: 450px; background-color: #e8e8e8; border-top: 1px solid #d5d5d5; border-bottom: 1px solid#d5d5d5; border-right: 1px solid #d5d5d5;'>
				<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; margin-top: 4px;">Personal Informations</h4>
				</div>

				<table width='100%'>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>First Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='edit-username'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Last Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='edit-username'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 129px; text-align: right; padding-right: 20px;'><label>Middle Name</label></td>
						<td colspan='3'style='padding-top: 10px;'><input class='form-control' type='text' name='edit-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Address</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='edit-r-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Birthdate</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='edit-r-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Gender</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='edit-r-password'></td>
					</tr>
				</table>
				</table>

				<br>

				<div style='height: 30px; width: 450px; background-color: #e8e8e8; border-top: 1px solid #d5d5d5; border-bottom: 1px solid#d5d5d5; border-right: 1px solid #d5d5d5;'>
				<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; margin-top: 4px;">User Credentials</h4>
				</div>

				<table width='100%'>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Username</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='edit-username'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; text-align: right; padding-right: 20px;'><label>Password</label></td>
						<td colspan='3'style='padding-top: 10px;'><input class='form-control' type='text' name='edit-password'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 130px; text-align: right; padding-right: 20px;'><label>Re-Type Password</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='edit-r-password'></td>
					</tr>
				</table>
			</div>
			<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
				<button class='btn btn-info' type='submit' style='float: right;'>OK</button>
			</div>
		</form>
	</div>

	<div class='col-md-6' id='add-options'style='background-color: white;'>
		<div style='height: 30px; width: 299px; background-color: #e8e8e8; border-top: 1px solid #d5d5d5; border-bottom: 1px solid#d5d5d5; border-right: 1px solid #d5d5d5;'>
		<h4 style="font-family: 'Roboto Condensed', sans-serif; padding-left: 10px; margin-top: 4px;">User Company</h4>
		</div>
		<table width='100%'>
			<tr>
				<td class='adding-field' colspan='3' style='padding-top: 10px;'>
					<div class='input-group' style='width: 100%'>
						<input id='companies' class='form-control' type='text' placeholder='Select...' readonly>
						<span type='button' class='input-group-addon'><i class='fa fa-caret-right'></i></span>
					</div>
				</td>
			</tr>
			<tr>
				<td>
				<button class='btn btn-info' type='submit' style='float: right;'><i class='fa fa-plus'></i></button>
				</td>
			</tr>
		</table>
	</div>
	<div class='col-md-1' id='edit-options'style='background-color: white;'>

	</div>
</div>