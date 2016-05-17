<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Company</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<button id='add' type='button' class='btn btn-info btn-sm hint--top' data-hint='Add'><i class='fa fa-plus'></i></button>
			<div class='row'>
				<div class='col-md-12' id='company-table-row'>
					<table id='company-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<th>Options</th>
							<th>Sequence</th>
							<th>Classification</th>
							<th>Company Name</th>
							<th>Individual Name</th>
							<th>Address</th>
							<th>TIN</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='co-class-select' style='display: none;'>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Company</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Branch</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Customer</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Supplier Ordinary Goods</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Supplier Capital Goods</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Supplier Other Goods</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Supplier Services</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Related Party</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Stock Holder/Owner</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Employee</button>
</div>
<div id='add-modal' style="display: none; width: 500px;">
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Company</h4>
			</div>
			<div class='col-md-8'>
				<form action='company/add' method='post' class='body'>
					<div class='modal-body'>
						<input type='text' style='border: none; float: right; width: 80px; margin-right: 50px; text-align: center; font-weight: bold;'>
						<label style='float: right;'>Sequence: </label>
						<table width='100%'>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification : </label></td>
								<td colspan='3' style='padding-top: 10px;'>
									<div class='input-group' style='width: 100%'>
										<input class='form-control' type='text' name='classification' placeholder='Select...' readonly>
										<span type='button' class='input-group-addon classification-btn'><i class='fa fa-caret-right'></i></span>
									</div>
								</td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Company Name : </label></td>
								<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='name'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Individual Name : </label></td>
								<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='indname'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address : </label></td>
								<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='addr'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN : </label></td>
								<td style='padding-top: 10px;'><input class='form-control' type='text' name='tin'></td>
							</tr>
						</table>
						<br>	
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
<div id='view-modal' style='display: none; width: 500px' ;>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 35px'>
				<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Company</h4>
			</div>
			<form>
				<div class='modal-body'>
					<input id='view-sequence' type='text' style='border: none; float: right; width: 40px; margin-right: 50px; background-color: #e8e8e8; text-align: center; font-weight: bold;'>
					<label style='float: right;'>Sequence: </label>
					<table width='90%'>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification: </label></td>
							<td colspan='3' style='padding-top: 10px;'>
								<div class='input-group' style='width: 100%'>
									<input id='view-class' class='form-control' type='text' name='classification' placeholder='Select...' readonly>
									<span type='button' class='input-group-addon' ><i class='fa fa-caret-right'></i></span>
								</div>
							</td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Company Name: </label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='view-company' class='form-control' type='text' name='name'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Individual Name: </label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='view-individual' class='form-control' type='text' name='indname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address: </label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='view-address' class='form-control' type='text' name='addr'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN: </label></td>
							<td style='padding-top: 10px;'><input id='view-tin' class='form-control' type='text' name='tin'></td>
						</tr>
					</table>
					<br>
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
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Company</h4>
			</div>
			<div class='col-md-8'>
			<form action='company/edit' method='post' class='body'>
				<div class='modal-body'>
					<input id='edit-sequence' type='text' style='border: none; float: right; width: 80px; margin-right: 50px; text-align: center; font-weight: bold; background-color: white;'>
					<label style='float: right;'>Sequence: </label>
					<table width='100%'>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification: </label></td>
							<td colspan='3' style='padding-top: 10px;'>
								<div class='input-group' style='width: 100%'>
									<input id='edit-class' class='form-control' type='text' name='editclassification' placeholder='Select...' readonly>
									<span type='button' class='input-group-addon classification-btn'><i class='fa fa-caret-right'></i></span>
								</div>
							</td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Company Name: </label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='edit-company' class='form-control' type='text' name='editname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Individual Name: </label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='edit-individual' class='form-control' type='text' name='editindname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address: </label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='edit-address' class='form-control' type='text' name='editaddr'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN: </label></td>
							<td style='padding-top: 10px;'><input id='edit-tin' class='form-control' type='text' name='edittin'></td>
						</tr>
					</table>
					<br>
				</div>
				<input type='hidden' id='edit-id' name='editid' value=''>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm' type='submit' style='float: right;'>Ok</button>
				</div>
			</form>
			</div>
			<div class='col-md-4' id='add-options'style='background-color: white;'>

			</div>
		</div>
	</div>
</div>
<div id='update-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div  style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Company</h4>
			</div>
			<div class='col-md-8'>
				<form action='company/update' method='post' class='body'>
					<div class='modal-body'>
						<input id='update-sequence' type='text' style='border: none; float: right; width: 80px; margin-right: 50px; text-align: center; font-weight: bold; background-color: white;'>
						<label style='float: right;'>Sequence: </label>
						<table width='100%'>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification :</label></td>
								<td colspan='3' style='padding-top: 10px;'>
									<div class='input-group' style='width: 100%'>
										<input id='update-class' class='form-control' type='text' name='updateclassification' placeholder='Select...' readonly>
										<span type='button' class='input-group-addon classification-btn'><i class='fa fa-caret-right'></i></span>
									</div>
								</td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Company Name :</label></td>
								<td colspan='3' style='padding-top: 10px;'><input id='update-company' class='form-control' type='text' name='updatename'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Individual Name :</label></td>
								<td colspan='3' style='padding-top: 10px;'><input id='update-individual' class='form-control' type='text' name='updateindname'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address :</label></td>
								<td colspan='3' style='padding-top: 10px;'><input id='update-address' class='form-control' type='text' name='updateaddr'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN :</label></td>
								<td style='padding-top: 10px;'><input id='update-tin' class='form-control' type='text' name='updatetin'></td>
							</tr>
						</table>
						<br>
					</div>
					<input type='hidden' id='update-id' name='updateid' value=''>
					<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
						<button class='btn btn-info btn-sm pull-right' type='submit'>OK</button>
					</div>
				</form>
			</div>
			<div class='col-md-4' id='add-options'style='background-color: white;'	>
			</div>
			
		</div>
	</div>
</div>