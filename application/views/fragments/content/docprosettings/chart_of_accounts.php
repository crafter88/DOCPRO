<div class='side-body padding-top'>
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Chart of Accounts</div>
			</div>
		</div>
		<div class='card-body' style='padding-top: 10px;'>
			<button id='add' type='button' class='btn btn-info btn-sm hint--right' data-hint='Add'><i class='fa fa-plus'></i></button>
			<div class='row'>
				<div class='col-md-12' id='company-table-row'>
					<table id='chart-of-accounts-table' class='table table-hovered table-bordered' width='100%'>
						<thead>
							<!-- <th>Options</th> -->
							<th>Code</th>
							<th>Name</th>
							<th>Code 1</th>
							<th>Category 1</th>
							<th>Code 2</th>
							<th>Category 2</th>
							<th>Code 3</th>
							<th>Category 3</th>
							<th>BIR Code</th>
							<th>BIR Name</th>
							<th>Date</th>
							<th>Debit</th>
							<th>Credit</th>
							<!-- <th>Cashflow Category Code</th>
							<th>Cashflow Category</th>
							<th>Cashflow Activity Code</th>
							<th>Cashflow Activity</th> -->
						</thead>
					</table>
				</div>
			</div>
		</div>
		
		<div id="output"></div>
	</div>
</div>

<div class="modal fade" id="add-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Add Chart of Accounts</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="acc_id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3" style="color:gray;">Account Name</label>
              <div class="col-md-9">
              <select class="dept_List" name="account_name_id" style="width:70%;">
                <?php
                  foreach ($acc as $acc) {
                    echo '<option value="'.$acc->account_name_id.'"> '.$acc->account_code.' '.$acc->account_name.'</option>';
                  }
                ?>  
              </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3" style="color:gray;">Category 1</label>
              <div class="col-md-9">
              <select class="dept_List" name="level1_code_id" style="width:70%;">
                <?php
                  foreach ($one as $one) {
                    echo '<option value="'.$one->level1_code_id.'"> '.$one->level1_code.' '.$one->level1_name.'</option>';
                  }
                ?>  
              </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3" style="color:gray;">Category 2</label>
              <div class="col-md-9">
              <select class="dept_List" name="level2_code_id" style="width:70%;">
                <?php
                  foreach ($two as $two) {
                    echo '<option value="'.$two->level2_code_id.'"> '.$two->level2_code.' '.$two->level2_name.'</option>';
                  }
                ?>  
              </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3" style="color:gray;">Category 3</label>
              <div class="col-md-9">
              <select class="dept_List" name="level3_code_id" style="width:70%;">
                <?php
                  foreach ($three as $three) {
                    echo '<option value="'.$three->level3_code_id.'"> '.$three->level3_code.' '.$three->level3_name.'</option>';
                  }
                ?>  
              </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3" style="color:gray;">BIR</label>
              <div class="col-md-9">
              <select class="dept_List" name="bir_id" style="width:70%;">
                <?php
                  foreach ($bir as $bir) {
                    echo '<option value="'.$bir->bir_id.'"> '.$bir->bir_code.' '.$bir->bir_acc_name.'</option>';
                  }
                ?>  
              </select>
              </div>
            </div>
          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-sm btn-success">Save</button>
            <button type="button" class="btn btn-sm btn-danger pull-left" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>