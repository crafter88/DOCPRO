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
							<th>Code</th>
							<th>Type Shortname</th>
							<th>Sequence</th>
							<th>Name</th>
							<th>Shortame</th>
							<th>Rate</th>
							<th>Base</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div id='type-short-name-select' style='display: none;'>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>IT</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>VAT</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>PT</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>EXT</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>EWT</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>FWT</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>PR</button>
</div>


<div id='add-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Tax</h4>
			</div>
			<div class='col-md-8'>
				<form action='taxes/add' method='post' class='body'>
					<input id='add-sequence' name='sequence' type='text' style='border: none; float: right; width: 80px; margin-right: 50px; text-align: center; font-weight: bold;'>
					<label style='float: right;'>Sequence: </label>
					<div class='modal-body'>
						<table width='100%' style='padding-left: 100px;'>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Tax Code: </label></td>
								<td style='padding-top: 10px;'><input id='add-code' class='form-control' type='text' name='code'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 200px;'><label>Tax Type Shortname: </label></td>
								<td style='padding-top: 10px;'>
									<div class='input-group'>
										<input id='add-taxtypeshortname' class='form-control' type='text' name='taxtypeshortname' placeholder='Select...' readonly>
										<span type='button' class='input-group-addon tax-type-btn'><i class='fa fa-caret-right'></i></span>
									</div>
								</td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Tax Name: </label></td>
								<td style='padding-top: 10px;'><input id='add-name' class='form-control' type='text' name='name'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Tax Shortname: </label></td>
								<td style='padding-top: 10px;'><input id='add-shortname' class='form-control' type='text' name='shortname'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Tax Rate: </label></td>
								<td style='padding-top: 10px;'><input id='add-rate' class='form-control' type='text' name='rate'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Tax Base: </label></td>
								<td style='padding-top: 10px;'><input id='add-base' class='form-control' type='text' name='base'></td>
							</tr>
						</table>
					</div>
					<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
						<button class='btn btn-info btn-sm' type='submit' style='float: right;'>OK</button>
					</div>
				</form>
			</div>
			<div class='col-md-4' id='add-options'style='background-color: white;'>

			</div>
		</div>
	</div>
</div>

<div id='view-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Tax</h4>
			</div>
			<form action='taxes/get' method='post' class='body'>
				<input id='view-sequence' name='sequence' type='text' style='border: none; float: right; width: 80px; margin-right: 50px; text-align: center; font-weight: bold; background-color: white;'>
				<label style='float: right;'>Sequence: </label>
				<div class='modal-body'>
					<table width='100%'>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Code: </label></td>
							<td style='padding-top: 10px;'><input id='view-code' class='form-control' type='text' name='code'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Tax Type Shortname: </label></td>
							<td style='padding-top: 10px;'><input id='view-taxtypeshortname' class='form-control' type='text' name='code'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Tax Name: </label></td>
							<td style='padding-top: 10px;'><input id='view-name' class='form-control' type='text' name='name'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Tax Shortname</label></td>
							<td style='padding-top: 10px;'><input id='view-shortname' class='form-control' type='text' name='shortname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Rate</label></td>
							<td style='padding-top: 10px;'><input id='view-rate' class='form-control' type='text' name='rate'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Base</label></td>
							<td style='padding-top: 10px;'><input id='view-base' class='form-control' type='text' name='base'></td>
						</tr>
					</table>
				</div>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm' type='button' data-dismiss='modal' style='float: right;'>Close</button>
				</div>
			</form>
		</div>
	</div>
</div>


<div id='edit-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title'  style="font-family: 'Roboto Condensed', sans-serif;">Edit Tax</h4>
			</div>
			<div class='col-md-8'>
				<form action='taxes/edit' method='post' class='body'>
					<input id='edit-sequence' name='sequence' type='text' style='border: none; float: right; width: 80px; margin-right: 50px; text-align: center; font-weight: bold; background-color: white;'>
					<label style='float: right;'>Sequence: </label>
					<div class='modal-body'>
						<table width='100%' style='padding-left: 50px;'>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Code</label></td>
								<td style='padding-top: 10px;'><input id='edit-code' class='form-control' type='text' name='code'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 200px;'><label>Tax Type Short Name</label></td>
								<td style='padding-top: 10px;'>
									<div class='input-group'>
										<input id='edit-taxtypeshortname' class='form-control' type='text' name='taxtypeshortname' placeholder='Select...' readonly>
										<span type='button' class='input-group-addon tax-type-btn'><i class='fa fa-caret-right'></i></span>
									</div>
								</td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Name</label></td>
								<td style='padding-top: 10px;'><input id='edit-name' class='form-control' type='text' name='name'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Short Name</label></td>
								<td style='padding-top: 10px;'><input id='edit-shortname' class='form-control' type='text' name='shortname'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Rate</label></td>
								<td style='padding-top: 10px;'><input id='edit-rate' class='form-control' type='text' name='rate'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Base</label></td>
								<td style='padding-top: 10px;'><input id='edit-base' class='form-control' type='text' name='base'></td>
							</tr>
						</table>
					</div>
					<input type='hidden' id='edit-id' name='editid' value=''>
					<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
						<button class='btn btn-info btn-sm' type='submit' style='float: right;'>OK</button>
					</div>
				</form>
			</div>
			<div class='col-md-4' class='col-md-4' id='add-options'style='background-color: white;'>

			</div>
		</div>
	</div>
</div>

<div id='update-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title'  style="font-family: 'Roboto Condensed', sans-serif;">Edit Tax</h4>
			</div>
			<div class='col-md-8'>
				<form action='taxes/update' method='post' class='body'>
					<input id='update-sequence' name='sequence' type='text' style='border: none; float: right; width: 80px; margin-right: 50px; text-align: center; font-weight: bold; background-color: white;'>
					<label style='float: right;'>Sequence: </label>
					<div class='modal-body'>
						<table width='100%' style='padding-left: 50px;'>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Code</label></td>
								<td style='padding-top: 10px;'><input id='update-code' class='form-control' type='text' name='code'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 200px;'><label>Tax Type Short Name</label></td>
								<td style='padding-top: 10px;'>
									<div class='input-group'>
										<input id='update-taxtypeshortname' class='form-control' type='text' name='taxtypeshortname' placeholder='Select...' readonly>
										<span type='button' class='input-group-addon tax-type-btn'><i class='fa fa-caret-right'></i></span>
									</div>
								</td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Name</label></td>
								<td style='padding-top: 10px;'><input id='update-name' class='form-control' type='text' name='name'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Short Name</label></td>
								<td style='padding-top: 10px;'><input id='update-shortname' class='form-control' type='text' name='shortname'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Rate</label></td>
								<td style='padding-top: 10px;'><input id='update-rate' class='form-control' type='text' name='rate'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Base</label></td>
								<td style='padding-top: 10px;'><input id='update-base' class='form-control' type='text' name='base'></td>
							</tr>
						</table>
					</div>
					<input type='hidden' id='update-id' name='editid' value=''>
					<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
						<button class='btn btn-info btn-sm' type='submit' style='float: right;'>OK</button>
					</div>
				</form>
			</div>
			<div class='col-md-4' class='col-md-4' id='add-options'style='background-color: white;'>

			</div>
		</div>
	</div>
</div>