<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Documents</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
		<button id='add' type='button' class='btn btn-info btn-sm hint--right' data-hint='Add'><i class='fa fa-plus'></i></button>
			<div class='row'>
				<div class='col-md-12' id='documents-table-row'>
					<table id='documents-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<th>Options</th>
							<th>Code</th>
							<th>Sequence</th>
							<th>Classification</th>
							<th>Name</th>
							<th>Short Name</th>
							<th>Journal Name</th>
							<th>Journal Short Name</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='journ-select' style='display: none;'>
	<?php foreach($journals as $journ){ ?>
	<button class='btn btn-default select-option' short-name="<?php echo $journ->journ_shortname; ?>" journ-id='<?php echo $journ->journ_id; ?>' type='button' style='width: 100%'><?php echo $journ->journ_name;?></button>
	
	<?php }?>
</div>


<div id='add-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Documents</h4>
			</div>
			<div class='col-md-8'>
			<form action='documents/add' method='post' class='body'>
				<div class='modal-body' >
					<input type='text' style='border: none; float: right; width: 80px; margin-right: 50px; text-align: center; font-weight: bold;'>
					<label style='float: right;'></label>
					<table width='100%' style='padding-left: 100px;'>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='code'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='classification'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='name'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='shortname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Journal Name :</label></td>
							<td colspan='3' style='padding-top: 10px;'>
								<div class='input-group' style='width: 100%'>
									<input class='form-control' type='text' name='journals' placeholder='Select...' readonly>
									<span type='button' class='input-group-addon journals-btn'><i class='fa fa-caret-right'></i></span>
								</div>
							</td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 160px; text-align: right; padding-right: 20px;'><label>Journal Shortname :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='journshortname'></td>
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
			<div style='border-bottom: 1px groove; height: 35px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Documents</h4>
			</div>
			<form class='body'>
				<div class='modal-body'>
					<input id='view-sequence' type='text' style='border: none; float: right; width: 20px; margin-right: 50px; text-align: center; font-weight: bold; background-color: white;'>
					<label style='float: right;'>Sequence: </label>
					<table width='100%'>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='view-code' class='form-control' type='text' name='code'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='view-classification' class='form-control' type='text' name='classification'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Document Name :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='view-documentname' class='form-control' type='text' name='documentname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='view-documentshortname' class='form-control' type='text' name='documentshortname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Journal Name :</label></td>
							<td style='padding-top: 10px;'><input id='view-journalname' class='form-control' type='text' name='journalname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 160px; text-align: right; padding-right: 20px;'><label>Journal Shortname :</label></td>
							<td style='padding-top: 10px;'><input id='view-journalshortname' class='form-control' type='text' name='joournalshortname'></td>
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
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Documents</h4>
			</div>
			<div class='col-md-8'>
			<form action='documents/edit' method='post' class='body'>
				<div class='modal-body' height>
					<input id='edit-sequence' type='text' style='border: none; float: right; width: 20px; margin-right: 50px; background-color: white; text-align: center; font-weight: bold;'>
					<label style='float: right;'>Sequence: </label>
					<table width='100%' style='padding-left: 100px;'>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='edit-code' class='form-control' type='text' name='code'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='edit-classification' class='form-control' type='text' name='classification'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Document Name :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='edit-documentname' class='form-control' type='text' name='documentname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='edit-documentshortname' class='form-control' type='text' name='documentshortname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Journal Name :</label></td>
							<td colspan='3' style='padding-top: 10px;'>
								<div class='input-group' style='width: 100%'>
									<input id='edit-journalname' class='form-control' type='text' name='editjournals' placeholder='Select...' readonly>
									<span type='button' class='input-group-addon journals-btn'><i class='fa fa-caret-right'></i></span>
								</div>
							</td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 160px; text-align: right; padding-right: 20px;'><label>Journal Shortname :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='edit-journalshortname' class='form-control' type='text' name='editjournshortname'></td>
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
<div id='update-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Documents</h4>
			</div>
			<div class='col-md-8'>
			<form action='documents/update' method='post' class='body'>
				<div class='modal-body' height>
					<input id='update-sequence' type='text' style='border: none; float: right; width: 20px; margin-right: 50px; background-color: white; text-align: center; font-weight: bold;'>
					<label style='float: right;'>Sequence: </label>
					<table width='100%' style='padding-left: 100px;'>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='update-code' class='form-control' type='text' name='code'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='update-classification' class='form-control' type='text' name='classification'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Document Name :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='update-documentname' class='form-control' type='text' name='documentname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='update-documentshortname' class='form-control' type='text' name='documentshortname'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Journal Name :</label></td>
							<td colspan='3' style='padding-top: 10px;'>
								<div class='input-group' style='width: 100%'>
									<input id='update-journalname' class='form-control' type='text' name='updatejournals' placeholder='Select...' readonly>
									<span type='button' class='input-group-addon journals-btn'><i class='fa fa-caret-right'></i></span>
								</div>
							</td>
						</tr>
						<tr>
							<td style='padding-top: 10px; width: 160px; text-align: right; padding-right: 20px;'><label> Journal Shortname :</label></td>
							<td colspan='3' style='padding-top: 10px;'><input id='update-journalshortname' class='form-control' type='text' name='updatejournshortname'></td>
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