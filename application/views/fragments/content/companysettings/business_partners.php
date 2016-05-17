<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Business Partners</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<button id='add' type='button' class='btn btn-info btn-sm hint--right' data-hint='Add'><i class='fa fa-plus'></i></button>
			<div class='row'>
				<div class='col-md-12' id='company-table-row'>
					<table id='business-partners-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<th>Options</th>
							<th>Code</th>
							<th>Sequence</th>
							<th>Name</th>
							<th>Address</th>
							<th>Classification</th>
							<th>Type</th>
							<th>TIN</th>
							<th>Tax Type</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='class-select' style='display: none;'>
	<button class='btn btn-default class' type='button' style='width: 100%'>Company/Branch</button>
	<button class='btn btn-default class' type='button' style='width: 100%'>Customer</button>
	<button class='btn btn-default class' type='button' style='width: 100%'>Supplier-Ordinary Goods</button>
	<button class='btn btn-default class' type='button' style='width: 100%'>Supplier-Capital Goods</button>
	<button class='btn btn-default sclass' type='button' style='width: 100%'>Supplier-Other Goods</button>
	<button class='btn btn-default class' type='button' style='width: 100%'>Supplier-Services</button>
	<button class='btn btn-default class' type='button' style='width: 100%'>Related Party</button>
	<button class='btn btn-default class' type='button' style='width: 100%'>Stockholder/Owner</button>
	<button class='btn btn-default class' type='button' style='width: 100%'>Employee</button>
	<button class='btn btn-default class' type='button' style='width: 100%'>Others</button>
</div>

<div id='bp-type-select' style='display: none;'>
	<button class='btn btn-default bptype' type='button' style='width: 100%'>Individual</button>
	<button class='btn btn-default bptype' type='button' style='width: 100%'>Non-Individual</button>
	<button class='btn btn-default bptype' type='button' style='width: 100%'>Government</button>
</div>

<div id='tax-type-select' style='display: none;'>
	<button class='btn btn-default taxtype' type='button' style='width: 100%'>Income Tax</button>
	<button class='btn btn-default taxtype' type='button' style='width: 100%'>Value Added Tax</button>
	<button class='btn btn-default taxtype' type='button' style='width: 100%'>Percentage Tax</button>
	<button class='btn btn-default taxtype' type='button' style='width: 100%'>Excise Tax</button>
	<button class='btn btn-default taxtype' type='button' style='width: 100%'>Expanded Withholding Tax</button>
	<button class='btn btn-default taxtype' type='button' style='width: 100%'>Final Withholding Tax</button>
	<button class='btn btn-default taxtype' type='button' style='width: 100%'>Special Tax</button>
</div>

<div id='add-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add</h4>
			</div>
			<div class='col-md-8'>
				<form action='#' method='post' class='body'>
						<input type='text' style='border: none; float: right; width: 40px; margin-right: 150px; padding-top: 10px;'>
						<label style='float: right; padding-top: 10px;'>Sequence: </label>
					<div class='modal-body'>
						<table width='90%'>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 150px'><label>Code</label></td>
								<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Name</label></td>
								<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Address</label></td>
								<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 200px;'><label>Classification</label></td>
								<td style='padding-top: 10px;'>
									<div class='input-group'>
										<input class='form-control' type='text' name='classification' placeholder='Select...' readonly>
										<span type='button' class='input-group-addon classification-btn'><i class='fa fa-caret-right'></i></span>
									</div>
								</td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 200px;'><label>Type</label></td>
								<td style='padding-top: 10px;'>
									<div class='input-group'>
										<input class='form-control' type='text' name='bp_type' placeholder='Select...' readonly>
										<span type='button' class='input-group-addon bp-type-btn'><i class='fa fa-caret-right'></i></span>
									</div>
								</td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>TIN</label></td>
								<td style='padding-top: 10px;'><input class='form-control' type='text' name=''></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 200px;'><label>Tax Type</label></td>
								<td style='padding-top: 10px;'>
									<div class='input-group'>
										<input class='form-control' type='text' name='tax_type' placeholder='Select...' readonly>
										<span type='button' class='input-group-addon tax-type-btn'><i class='fa fa-caret-right'></i></span>
									</div>
								</td>
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