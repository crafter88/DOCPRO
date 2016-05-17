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

<div id='payment-type-select' style='display: none;'>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>CREDIT</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>CASH</button>
</div>

<div id='add-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Mode of Payment</h4>
			</div>
			<div class='col-md-8'>
				<form action='documents/add' method='post' class='body'>
					<div class='modal-body'>
						<table width='90%'>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name :</label></td>
								<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='name'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code :</label></td>
								<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='code'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname :</label></td>
								<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='shortname'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Payment Type :</label></td>
								<td colspan='3' style='padding-top: 10px;'>
									<div class='input-group' style='width: 100%'>
										<input class='form-control' type='text' name='paymenttype' placeholder='Select...' readonly>
										<span type='button' class='input-group-addon paymenttype-btn'><i class='fa fa-caret-right'></i></span>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
						<button class='btn btn-info' type='submit' style='float: right;'>OK</button>
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
			<div>
				<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' >View Mode of Payment</h4>
			</div>
			<form>
				<div class='modal-body'>
					<input id='view-sequence' type='text' style='border: none; float: right; width: 40px; margin-right: 50px;'>
					<label style='float: right;'>Sequence: </label>
					<table width='80%'>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 150px;'><label>Name</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='view-name' class='form-control' type='text' name='name'></td>
						</tr>
						<tr>
							<td style='float: right; padding-right: 10px; padding-top: 10px;'><label>Code</label></td>
							<td style=' padding-top: 10px; padding-right: 10px; width: 140px;'><input id='view-code' class='form-control' type='text' name='code'></td>
							<td style='padding-top: 15px; text-align: right; padding-right: 5px;'><label>Short Name</label></td>
							<td style='padding-top: 10px; width:80px;'><input id='view-shortname' class='form-control' type='text' name='shortname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px; width: 150px;'><label>Payment Type</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='view-paymenttype' class='form-control' type='text' name='paymenttype'></td>
						</tr>
					</table>
				</div>
				<div class='modal-footer'>
					<button class='btn btn-primary btn-sm' type='button' data-dismiss='modal' style='float: left;'>Close</button>
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
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Mode of Payment</h4>
			</div>
			<div class='col-md-8'>
				<form action='modes_of_payment/edit' method='post' class='body'>
					<div class='modal-body'>
						<input id='edit-sequence' type='text' style='border: none; float: right; width: 20px; margin-right: 50px; background-color: white; text-align: center; font-weight: bold;'>
						<label style='float: right;'>Sequence: </label>
						<table width='90%'>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name :</label></td>
								<td colspan='3' style='padding-top: 10px;'><input id='edit-name' class='form-control' type='text' name='name'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code :</label></td>
								<td colspan='3' style='padding-top: 10px;'><input id='edit-code' class='form-control' type='text' name='code'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname :</label></td>
								<td colspan='3' style='padding-top: 10px;'><input id='edit-shortname' class='form-control' type='text' name='shortname'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Payment Type :</label></td>
								<td colspan='3' style='padding-top: 10px;'>
									<div class='input-group' style='width: 100%'>
										<input id='edit-paymenttype' class='form-control' type='text' name='editpaymenttype' placeholder='Select...' readonly>
										<span type='button' class='input-group-addon paymenttype-btn'><i class='fa fa-caret-right'></i></span>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<input type='hidden' id='edit-id' name='editid' value=''>
					<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
						<button class='btn btn-info' type='submit' style='float: right;'>OK</button>
					</div>
				</form>
			</div>
			<div class='col-md-4'  id='add-options'style='background-color: white;'>

			</div>
		</div>
	</div>
</div>

<div id='update-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Mode of Payment</h4>
			</div>
			<div class='col-md-8'>
				<form action='modes_of_payment/update' method='post' class='body'>
					<div class='modal-body'>
						<input id='update-sequence' type='text' style='border: none; float: right; width: 20px; margin-right: 50px; background-color: white; text-align: center; font-weight: bold;'>
						<label style='float: right;'>Sequence: </label>
						<table width='90%'>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name :</label></td>
								<td colspan='3' style='padding-top: 10px;'><input id='update-name' class='form-control' type='text' name='name'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code :</label></td>
								<td colspan='3' style='padding-top: 10px;'><input id='update-code' class='form-control' type='text' name='code'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname :</label></td>
								<td colspan='3' style='padding-top: 10px;'><input id='update-shortname' class='form-control' type='text' name='shortname'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Payment Type :</label></td>
								<td colspan='3' style='padding-top: 10px;'>
									<div class='input-group' style='width: 100%'>
										<input id='update-paymenttype' class='form-control' type='text' name='updatepaymenttype' placeholder='Select...' readonly>
										<span type='button' class='input-group-addon paymenttype-btn'><i class='fa fa-caret-right'></i></span>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<input type='hidden' id='update-id' name='updateid' value=''>
					<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
						<button class='btn btn-info' type='submit' style='float: right;'>OK</button>
					</div>
				</form>
			</div>
			<div class='col-md-4'  id='add-options'style='background-color: white;'>

			</div>
		</div>
	</div>
</div>