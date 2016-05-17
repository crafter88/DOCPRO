<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Banks</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<button id='add' type='button' class='btn btn-info btn-sm hint--right' data-hint='Add'><i class='fa fa-plus'></i></button>
			<div class='row'>
				<div class='col-md-12' id='banks-table-row'>
					<table id='banks-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<th>Options</th>
							<th>Code</th>
							<th>Name</th>
							<th>Short Name</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div id='add-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Add Bank</h4>
			</div>
			<div>
				<form action='banks/add' method='post' class='body'>
					<div class='modal-body'>
						<table width='90%'>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label> Bank Code</label></td>
								<td style='padding-top: 10px;'><input id='add-code' class='form-control' type='text' name='code'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label> Bank Name</label></td>
								<td style='padding-top: 10px;'><input id='add-name' class='form-control' type='text' name='name'></td>
							</tr>
							<tr>
								<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Bank Shortname</label></td>
								<td style='padding-top: 10px;'><input id='add-shortname' class='form-control' type='text' name='shortname'></td>
							</tr>
						</table>
					</div>
					<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
						<button class='btn btn-info' type='submit' style='float: right;'>OK</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>

<div id='view-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover'  type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">View Banks</h4>
			</div>
			<form class='body'>
				<div class='modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Bank Code</label></td>
							<td style='padding-top: 10px;'><input id='view-code' class='form-control' type='text' name='code'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Bank Name</label></td>
							<td style='padding-top: 10px;'><input id='view-name' class='form-control' type='text' name='name'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Bank Shortname</label></td>
							<td style='padding-top: 10px;'><input id='view-shortname' class='form-control' type='text' name='shortname'></td>
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
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Edit Company</h4>
			</div>
			<form action='banks/edit' method='post' class='body'>
				<div class='modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Bank Code</label></td>
							<td style='padding-top: 10px;'><input id='edit-code' class='form-control' type='text' name='code'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Bank Name</label></td>
							<td style='padding-top: 10px;'><input id='edit-name' class='form-control' type='text' name='name'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Bank Shortname</label></td>
							<td style='padding-top: 10px;'><input id='edit-shortname' class='form-control' type='text' name='shortname'></td>
						</tr>
					</table>
				</div>
				<input type='hidden' id='edit-id' name='editid' value=''>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm' type='submit' style='float: right;'>OK</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div id='update-modal' class='modal fade' role='dialog' tabindex='-1'>
	<div>
		<div>
			<div style='border-bottom: 1px groove; height: 30px; padding-bottom: 10px;'>
				<button class='close close-popover' type='button' data-dismiss='modal' style='padding-right: 10px;'><span aria-hidden='true'>&times;</span></button>
				<h4 class='modal-title' style="font-family: 'Roboto Condensed', sans-serif;">Update Bank</h4>
			</div>
			<form action='banks/update' method='post' class='body'>
				<div class='modal-body'>
					<table width='90%'>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Bank Code</label></td>
							<td style='padding-top: 10px;'><input id='update-code' class='form-control' type='text' name='code'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Bank Name</label></td>
							<td style='padding-top: 10px;'><input id='update-name' class='form-control' type='text' name='name'></td>
						</tr>
						<tr>
							<td style='padding-top: 10px; text-align: right; padding-right: 10px;'><label>Bank Shortname</label></td>
							<td style='padding-top: 10px;'><input id='update-shortname' class='form-control' type='text' name='shortname'></td>
						</tr>
					</table>
				</div>
				<input type='hidden' id='edit-id' name='editid' value=''>
				<div class='modal-footer' style='border-top: 1px inset; padding-top: 5px; padding-bottom: 0px;'>
					<button class='btn btn-info btn-sm' type='submit' style='float: right;'>OK</button>
				</div>
			</form>
		</div>
	</div>
</div>