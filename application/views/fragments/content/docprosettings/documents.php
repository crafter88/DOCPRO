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
							<th>Sequence</th>
							<th>Code</th>
							<th>Classification</th>
							<th>Name</th>
							<th>Short Name</th>
							<th>Journal Name</th>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='d-journal-name-select' style='display: none;'>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Sales Journal</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Receipts Journal</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Purchases Journal</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Collections Journal</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Disbursements Journal</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>General Journal</button>
	<button class='btn btn-default select-option' type='button' style='width: 100%'>Other Journal</button>
</div>
<div id='add-popover' class='modal fade' role='dialog' tabindex='-1'>
	<div class='modal-header'>
		<button class='close close-popover' type='button' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
		<h3 class='modal-title'>Add Document</h4>
	</div>
	<div class='col-md-8'>
		<form action='documents/add' method='post'>
			<div class='modal-body'>
				<input type='text' style='border: none; float: right; width: 40px; margin-right: 50px; padding-left: 3px;' disabled>
				<label style='float: right;'>Sequence: </label>
				<table width='90%'>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Code</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-code'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Classification</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-class'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Name</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-name'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Shortname</label></td>
						<td colspan='3' style='padding-top: 10px;'><input class='form-control' type='text' name='add-shortname'></td>
					</tr>
					<tr>
						<td style='padding-top: 10px; width: 150px; text-align: right; padding-right: 20px;'><label>Journal Name</label></td>
						<td colspan='3' style='padding-top: 10px;'>
							<div class='input-group' style='width: 100%'>
								<input class='form-control' type='text' name='add-journal-name' placeholder='Select...' readonly>
								<span type='button' class='input-group-addon add-journal-name-btn'><i class='fa fa-caret-right'></i></span>
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