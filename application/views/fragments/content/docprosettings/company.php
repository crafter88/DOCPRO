<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Company</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<button id='add' type='button' class='btn btn-info btn-sm hint--right' data-hint='Add'><i class='fa fa-plus'></i></button>
			<div class='row'>
				<div class='col-md-12' id='company-table-row'>
					<table id='company-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<th>Opts.</th>
							<th>Seq.</th>
							<th>Code</th>
							<th>Class</th>
							<th>Type</th>
							<th>Name</th>
							<th>Individual Name</th>
							<th>Address</th>
							<th>TIN</th>
							<th>Tax Type</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='cb-class-select' style='display: none;'>
	<?php foreach($bpc_class as $bpc){if($bpc->bpc_code != 61){?>
	<button class='btn btn-default select-option-class' class-id='<?php echo $bpc->bpc_code;?>' type='button' style='width: 100%'><?php echo $bpc->bpc_class;?></button>
	<?php }if($bpc->bpc_code == 61){?>
	<button class='btn btn-default select-option-class-others' class-id='<?php echo $bpc->bpc_code;?>' type='button' style='width: 100%'><?php echo $bpc->bpc_class;?></button>
	<?php }}?>
</div>
<div id='cb-type-select' style='display: none;'>
	<?php foreach($bpt_type as $bpt){?>
	<button class='btn btn-default select-option-type' type-id='<?php echo $bpt->bpt_code;?>' type='button' style='width: 100%'><?php echo $bpt->bpt_type;?></button>
	<?php }?>
</div>
<div id='cb-tax-type-select' style='display: none;'>
	<?php foreach($tt_name as $tt){if($tt->tt_code == 2 || $tt->tt_code >=8){?>
	<button class='btn btn-default select-option-tax-type' tax-type-id='<?php echo $tt->tt_code;?>' type='button' style='width: 100%'><?php echo $tt->tt_shortname;?></button>
	<?php }}?>
</div>
<div id='add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>Add Company</h3>
	</div>
	<div class='col-md-8'>
		<form action='company/add' method='post'>
			<div class='modal-body'>
				<input type='text' style='border: none; float: right; width: 40px; margin-right: 50px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>
				<table width='90%'>
					<tr>
						<input type='hidden' name='add-class-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input class='form-control' type='text' name='add-class' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon add-class-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<input type='hidden' name='add-type-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input class='form-control' type='text' name='add-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon add-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Individual Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-ind-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-address'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-tin'></td>
					</tr>
					<tr>
						<input type='hidden' name='add-tax-type-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Tax Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input class='form-control' type='text' name='add-tax-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon add-tax-type-btn'><i class='fa fa-caret-right'></i></span>
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
	<div class='col-md-4' id='add-options'style='background-color: white;'>
	</div>
</div>
<div id='view-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>View Company</h3>
	</div>
	<div class='col-md-8'>
		<form>
			<div class='modal-body'>
				<input id='view-seq' type='text' style='border: none; float: right; width: 40px; margin-right: 50px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-code' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='view-class' class='form-control' type='text' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='view-type' class='form-control' type='text' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-name' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Individual Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-ind-name' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-address' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='view-tin' class='form-control' type='text' readonly></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Tax Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='view-tax-type' class='form-control' type='text' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class='modal-footer'>
				<button class='btn btn-primary btn-sm close-popover' type='button' data-dismiss='modal' style='float: left;'>Close</button>
			</div>
		</form>
	</div>
</div>
<div id='edit-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>Edit Company</h3>
	</div>
	<div class='col-md-8'>
		<form action='company/edit' method='post'>
			<div class='modal-body'>
				<input id='edit-seq' type='text' style='border: none; float: right; width: 40px; margin-right: 50px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>
				<table width='90%'>
					<tr>
						<input id='edit-class-id' type='hidden' name='edit-class-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='edit-class' class='form-control' type='text' name='edit-class' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon edit-class-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<input id='edit-type-id' type='hidden' name='edit-type-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='edit-type' class='form-control' type='text' name='edit-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon edit-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-name' class='form-control' type='text' name='edit-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Individual Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-ind-name' class='form-control' type='text' name='edit-ind-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-address' class='form-control' type='text' name='edit-address'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='edit-tin' class='form-control' type='text' name='edit-tin'></td>
					</tr>
					<tr>
						<input id='edit-tax-type-id' type='hidden' name='edit-tax-type-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Tax Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='edit-tax-type' class='form-control' type='text' name='edit-tax-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon edit-tax-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<input type='hidden' id='edit-id' name='edit-id'>
			<div class='modal-footer'>
				<button class='btn btn-primary btn-sm' type='submit' style='float: left;'>Ok</button>
			</div>
		</form>
	</div>
	<div class='col-md-4' id='edit-options'style='background-color: white;'>
	</div>
</div>
<div id='update-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>Update Company</h3>
	</div>
	<div class='col-md-8'>
		<form action='company/update' method='post'>
			<div class='modal-body'>
				<input id='update-seq' type='hidden'>
				<input type='text' style='border: none; float: right; width: 40px; margin-right: 50px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>
				<table width='90%'>
					<tr>
						<input id='update-class-id' type='hidden' name='update-class-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='update-class' class='form-control' type='text' name='update-class' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon update-class-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<input id='update-type-id' type='hidden' name='update-type-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='update-type' class='form-control' type='text' name='update-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon update-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-name' class='form-control' type='text' name='update-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Individual Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-ind-name' class='form-control' type='text' name='update-ind-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Address</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-address' class='form-control' type='text' name='update-address'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>TIN</label></td>
						<td colspan='3' style='padding-top: 10px;'><input id='update-tin' class='form-control' type='text' name='update-tin'></td>
					</tr>
					<tr>
						<input id='update-tax-type-id' type='hidden' name='update-tax-type-id'>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Tax Type</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input id='update-tax-type' class='form-control' type='text' name='update-tax-type' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon update-tax-type-btn'><i class='fa fa-caret-right'></i></span>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<input type='hidden' id='update-id' name='update-id'>
			<div class='modal-footer'>
				<button class='btn btn-primary btn-sm' type='submit' data-dismiss='modal' style='float: left;'>Ok</button>
			</div>
		</form>
	</div>
	<div class='col-md-4' id='update-options'style='background-color: white;'>
	</div>
</div>