				<div class="side-body padding-top" id='journal-navs' ng-app='journals' ng-controller='transaction'>
					<div id='animated-container' class='row' style='-webkit-animation-duration: 0.5s; margin-top: 20px;'>
						<div class='col-md-12'>
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a></li>
									<li role="presentation"><a href="#business-partners" aria-controls="business-partners" role="tab" data-toggle="tab">Business Partners</a></li>
									<li role="presentation"><a href="#new-transactions" aria-controls="new-transactions" role="tab" data-toggle="tab">New Transactions</a></li>
									<li role="presentation"><a href="#documents" aria-controls="documents" role="tab" data-toggle="tab">Sales Invoice</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="summary">
										<div class='card'>
											<div class='card-body' style='padding-top: 10px;'>
												<table id='sales-journal-summary-table' class='table table-hover table-bordered' cellspacing="0" style='min-width: 1400px;'>
													<thead>
														<th>Trans ID</th>
														<th>Trans Date</th>
														<th>Journal</th>
														<th>Journal ID</th>
														<th>Document</th>
														<th>Doc No</th>
														<th>Doc Date</th>
														<th>BP Name</th>
														<th>Particulars</th>
														<th>Payment Type</th>
														<th>Gross Amount</th>
														<th>Net Amount</th>
													</thead>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Document Details</div>
												</div>
											</div>
											<div class='card-body'>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Journal Entries</div>
												</div>
											</div>
											<div class='card-body'>
												<table id='sales-journal-entries-table' class='table table-hovered table-bordered' style='min-width: 1400px;'>
													<thead>
														<th>BP Code</th>
														<th>BP Name</th>
														<th>Transaction</th>
														<th>Transaction ID</th>
														<th>Document</th>
														<th>Document Number</th>
														<th>Document Date</th>
														<th>Document Gross Amount</th>
														<th>Document Net Amount</th>
													</thead>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Document</div>
												</div>
											</div>
											<div class='card-body'>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="business-partners">
										<div class='card'>
											<div class='card-body' style='padding-top: 10px;'>
												<table id='sales-bp-table' class='table table-hover table-bordered table-striped table-responsive' cellspacing="0" width="1200px">
													<thead>
														<th>BP Class</th>
														<th>BP Code</th>
														<th>BP Name</th>
														<th>BP Address</th>
														<th>BP TIN</th>
														<th>Tax Code 1</th>
														<th>Tax Code 2</th>
														<th>Tax Code 3</th>
													</thead>
													<tbody>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Transaction Details</div>
												</div>
											</div>
											<div class='card-body'>
												<table id='sales-transaction-details-table' class='table table-bordered table-hovered table-striped' width='1200px'>
													<thead>
														<th>Trans ID</th>
														<th>Trans Date</th>
														<th>Journal</th>
														<th>Journal ID</th>
														<th>Document</th>
														<th>Doc No</th>
														<th>Doc Date</th>
														<th>Particulars</th>
														<th>Payment Type</th>
														<th>Gross Ammount</th>
														<th>Net Ammount</th>
													</thead>
													<tbody>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Document Details</div>
												</div>
											</div>
											<div class='card-body'>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Journal Entries</div>
												</div>
											</div>
											<div class='card-body'>
												<table id='sales-bp-journal-entries-table' class='table table-bordered table-hovered table-striped' width='1200px'>
													<thead>
														<th>BP Code</th>
														<th>BP Name</th>
														<th>Transaction</th>
														<th>Transaction ID</th>
														<th>Document</th>
														<th>Document Number</th>
														<th>Document Date</th>
														<th>Document Gross Ammount</th>
														<th>Document Net Ammount</th>
													</thead>
													<tbody>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<div class='card' style='margin-top: 20px;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Document</div>
												</div>
											</div>
											<div class='card-body'>
											</div>
										</div>
										
									</div>
									<div role="tabpanel" class="tab-pane" id="new-transactions">
										<div class='card'>
											<div class='card-body' style='padding-top: 25px;'>
												<div class='col-md-12' style='margin-left: 12%;'>
													<form class='form-inline' >	
														<div class='col-md-4' style='width: 22%'>
															<div class='form-group'>
																<label for='input-transaction-id'>Transaction ID</label>
																<input ng-model='transaction_id' type='text' id='input-transaction-id' class='form-control' name='input-transaction-id' style='color: #000C98; text-align: center;' readonly />
															</div>
														</div>
														<div class='col-md-4' style='width: 24%'>
															<div class='form-group'>
																<label for='input-transaction-date'>Transaction Date</label>
																<input ng-model='transaction_date' type='text' id='input-transaction-date' class='form-control' name='input-transaction-date' style='color: #000C98; text-align: center;' readonly />
															</div>
														</div>
														<div class='col-md-4' style='width: 27%'>
															<div class='form-group'>
																<label for='input-transaction-date'>Journal Transaction ID</label>
																<input ng-model='journal_transaction_id' type='text' id='input-transaction-date' class='form-control' name='input-transaction-date' style='color: #000C98; text-align: center;' readonly />
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
										<div class='card' style='margin-top: 5px; padding-bottom: 20px;'>
											<div class='card-header'>
												<div class='card-title' style='width: 100%; padding-bottom: 0; padding-top: 0;'>
													<div class='title'>
														<label style='font-weight: normal; padding-top: 8px;'>Document</label>
														<span style='float: right;'>
															<cash-credit-btn></cash-credit-btn>
														</span>
													</div>
												</div>
											</div>
											<div class='card-body' id='card-2-form' style='padding: 0; padding-top: 15px; display: none;'>
												<div class='col-md-12 transaction-input-row-gutter'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label style='font-size: 12px; color: #000;'>Document</label>
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Name</label>
														<input ng-model='document_name' class='form-control' type='text' style='text-align: center; color: #000C98;' readonly />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Number</label>
														<input ng-model='document_number' class='form-control' type='text' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Date</label>
														<input ng-model='document_date' class='form-control' style='color: #000C98; text-align: center;' type='date' />
													</div>
												</div>
												<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 5px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label style='font-size: 12px; color: #000;'>Business Partner</label>
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Name</label>
														<select ng-model='business_partner_name' class='form-control select2'>
															<option>Company 1</option>
															<option>Company 2</option>
															<option>Company 3</option>
														</select>
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Address</label>
														<input ng-model='business_partner_address' class='form-control' type='text' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label style='width: 100%'>TIN</label>
														<input ng-model='business_partner_tin' class='form-control' type='text' style='color: #000C98; text-align: center;' readonly />
													</div>
												</div>
												<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label style='font-size: 12px; color: #000;'>Particulars</label>
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Particulars</label>
														<input ng-model='business_partner_particulars' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Period</label>
														<input ng-model='particulars_period' type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Remarks</label>
														<input ng-model='particulars_remarks' type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
												</div>
												
												
												<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label style='font-size: 12px; color: #000;'>Payment</label>
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Type of Payment</label>
														<input ng-model='payment_type' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Terms</label>
														<input ng-model='payment_terms' type='number' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-3 col-input-custom'>
														<label>Due Date</label>
														<input value='{{ payment_terms | computeDueDate:this }}' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
												</div>
												
												
												<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom'>
														<label></label>
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Mode of Payment</label>
														<select ng-model='payment_mode' class='form-control select2'>
															<option>Bills</option>
															<option>Check</option>
															<option>Petty Cash Fund</option>
														</select>
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Amount Paid</label>
														<input ng-model='payment_amount_paid' type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Check Number</label>
														<input ng-model='payment_check_number' type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Bank</label>
														<input ng-model='payment_bank' type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Bank Account Number</label>
														<input ng-model='payment_bank_account_number' type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
												</div>
												
												
												<div class='col-md-12 transaction-input-row-gutter' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label style='font-size: 12px; color: #000;'>Amounts</label>
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Gross Amount</label>
														<input ng-model='amounts_gross_amount'type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>VAT</label>
														<input ng-model='amounts_vat' type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>TAX Withheld</label>
														<input ng-model='amounts_tax_withheld' type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Deductions</label>
														<input ng-model='amounts_deductions' type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Net Amount</label>
														<input ng-model='amounts_net_amount' type='text' class='form-control' style='color: #000C98; text-align: center;' />
													</div>
												</div>
												
												
												<div class='col-md-12' style='margin-top: 10px;'>
													<div class='col-md-1 col-custom' style='text-align: right;'>
														<label style='font-size: 12px; color: #000;'>Variance</label>
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Gross Amount</label>
														<input ng-model='variance_gross_amount' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>VAT</label>
														<input ng-model='variance_vat' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>TAX Withheld</label>
														<input ng-model='variance_tax_withheld' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Deductions</label>
														<input ng-model='variance_deductions' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
													<div class='col-md-2 col-input-custom'>
														<label>Net Amount</label>
														<input ng-model='variance_net_amount' type='text' class='form-control' style='color: #000C98; text-align: center;' readonly />
													</div>
												</div>
											</div>
										</div>
										
										<div class='card box box-primary' style='margin-top: 20px; background-color: #FFF;'>
											<div class='card-header' style='background-color: #FFF;'>
												<div class='card-title box-title'>
													<div class='title'>Document Details</div>
												</div>
												<div class="box-tools pull-right">
													<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
												</div>
											</div>
											<div class='card-body box-body' style='padding-top: 0; background-color: #FFF; display: none;'>
												<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Products/Services</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-product-services-btn></add-product-services-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Product Service Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Product Description</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Quantity</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Unit</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Unit Price</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Gross Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='product-services-table'>
																<tr>
																	<td>
																		<select class='form-control select2' name='product_services_code[]' style='text-align: center;'>
																			<option>P-123</option>
																			<option>P-111</option>
																			<option>P-001</option>
																		</select>
																	</td>
																	<td><input class='form-control' type='text' name='product_services_description[]' style='text-align: center;' readonly ></td>
																	<td><input class='form-control' type='text' name='product_services_qty[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='product_services_unit[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='product_services_unit_price[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='product_services_gross_amount[]' style='text-align: center;'></td>
																	<td></td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped' style='width: 69.3%; margin-left: 24.75%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.3%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																	<td><input class='form-control' type='text' name='total_qty' style='text-align: center;' readonly></td>
																	<td><input class='form-control' type='text' name='total_unit' style='text-align: center;' readonly></td>
																	<td><input class='form-control' type='text' name='total_unit_price' style='text-align: center;' readonly></td>
																	<td><input class='form-control' type='text' name='total_gross_amount[]' style='text-align: center;' readonly></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>VAT</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-vat-btn></add-vat-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>VAT</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Net VAT Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Gross Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='vat-table'>
																<tr>
																	<td><input class='form-control' type='text' name='tax_code[]' style='text-align: center;' readonly /></td>
																	<td><input class='form-control' type='text' name='nature[]' style='text-align: center;' /></td>
																	<td><input class='form-control' type='text' name='rate[]' style='text-align: center;' readonly /></td>
																	<td><input class='form-control' type='text' name='vat[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='net_vat_amount[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='gross_amount[]' style='text-align: center;'></td>
																	<td></td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped' style='width: 69.25%; margin-left: 24.79%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.3%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																	<td><input class='form-control' type='text' name='total_rate' style='text-align: center;' readonly></td>
																	<td><input class='form-control' type='text' name='total_vat' style='text-align: center;' readonly></td>
																	<td><input class='form-control' type='text' name='total_net_vat' style='text-align: center;' readonly></td>
																	<td><input class='form-control' type='text' name='total_gross_amount' style='text-align: center;' readonly></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Discounts</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-discounts-btn></add-discounts-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Deduction Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Deduction</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>SC ID</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='discounts-table'>
																<tr>
																	<td>
																		<select class='form-control select2' name='deduction_code[]' style='text-align: center;'>
																			<option>D001</option>
																			<option>D342</option>
																			<option>D657</option>
																		</select>
																	</td>
																	<td><input class='form-control' type='text' name='nature[]' style='text-align: center;' ></td>
																	<td><input class='form-control' type='text' name='rate[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='tax_base[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='tax_withheld[]' style='text-align: center;'></td>
																	<td></td>
																</tr>
															</tbody>
															<table class='table table-bordered table-hover table-striped' style='width: 43.7%; margin-left: 29.4%; margin-top: 0; border: none;'>
																<tbody>
																	<tr>
																		<td style='width: 11%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																		<td><input class='form-control' type='text' name='total_rate' style='text-align: center;' readonly></td>
																		<td><input class='form-control' type='text' name='total_deduction' style='text-align: center;' readonly></td>
																	</tr>
																</tbody>
															</table>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Expanded Withholding Tax</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-expanded-tax-btn></add-expanded-tax-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Base</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Withheld</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='expanded-tax-table'>
																<tr>
																	<td><input class='form-control' type='text' name='tax_code[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='nature[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='rate[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='tax_base[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='tax_withheld[]' style='text-align: center;'></td>
																	<td></td>
																</tr>
															</tbody>
															<table class='table table-bordered table-hover table-striped' style='width: 61.4%; margin-left: 31.6%; margin-top: 0; border: none;'>
																<tbody>
																	<tr>
																		<td style='width: 9.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																		<td><input class='form-control' type='text' name='total_rate' style='text-align: center;' readonly></td>
																		<td><input class='form-control' type='text' name='total_tax_base' style='text-align: center;' readonly></td>
																		<td><input class='form-control' type='text' name='total_widthheld' style='text-align: center;' readonly></td>
																	</tr>
																</tbody>
															</table>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Final Withholding Tax</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-final-withholding-tax-btn></add-final-withholding-tax-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Nature</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Rate</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Base</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Tax Withheld</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='final-withholding-tax-table'>
																<tr>
																	<td><input class='form-control' type='text' name='tax_code[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='nature[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='rate[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='tax_base[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='tax_withheld[]' style='text-align: center;'></td>
																	<td></td>
																</tr>
															</tbody>
															<table class='table table-bordered table-hover table-striped' style='width: 61.4%; margin-left: 31.6%; margin-top: 0; border: none;'>
																<tbody>
																	<tr>
																		<td style='width: 9.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																		<td><input class='form-control' type='text' name='total_rate' style='text-align: center;' readonly></td>
																		<td><input class='form-control' type='text' name='total_tax_base' style='text-align: center;' readonly></td>
																		<td><input class='form-control' type='text' name='total_tax_withheld' style='text-align: center;' readonly></td>
																	</tr>
																</tbody>
															</table>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Document Reference</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-document-reference-btn></add-document-reference-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Number</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Date</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Gross Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Document Net Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='document-reference-table'>
																<tr>
																	<td><input class='form-control' type='text' name='code[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='number[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='date[]' style='text-align: center;' readonly ></td>
																	<td><input class='form-control' type='text' name='gross_amount[]' style='text-align: center;' readonly ></td>
																	<td><input class='form-control' type='text' name='net_amount[]' style='text-align: center;' readonly ></td>
																	<td></td>
																</tr>
															</tbody>
															<table class='table table-bordered table-hover table-striped' style='width: 100%;margin-top: 0; border: none;'>
																<tbody id='document-reference-table'>
																	<tr>
																		<td style='width: 18.1%; border: none; background-color: transparent'></td>
																		<td style='width: 18.2%; border: none; background-color: transparent'></td>
																		<td style='width: 18.2%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																		<td style='width: 20.2%'><input class='form-control' type='text' name='gross_amount[]' style='text-align: center;' readonly ></td>
																		<td><input class='form-control' type='text' name='net_amount[]' style='text-align: center;' readonly ></td>
																		<td style='width: 82px; border: none; background-color: transparent;'></td>
																	</tr>
																</tbody>
															</table>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Bank Details</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<add-bank-details-btn></add-bank-details-btn>
														<table class='table table-hover table-bordered table-striped' style='margin-bottom: 0;'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Code</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Name</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Account Number</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Document</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Amount</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Bank Date</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Option</th>
															</thead>
															<tbody id='bank-details-table'>
																<tr>
																	<td><input class='form-control' type='text' name='code[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='name[]' style='text-align: center;' readonly ></td>
																	<td>
																		<select class='form-control select2' name='account_number[]' style='text-align: center;'>
																			<option>Acc-001</option>
																			<option>Acc-111</option>
																			<option>Acc-222</option>
																		</select>
																	</td>
																	<td>
																		<select class='form-control select2' type='text' name='document[]' style='text-align: center;'>
																			<option>Doc-001</option>
																			<option>Doc-111</option>
																			<option>Doc-222</option>
																		</select>
																	</td>
																	<td><input class='form-control' type='text' name='amount[]' style='text-align: center;'></td>
																	<td><input class='form-control' type='text' name='date[]' style='text-align: center;'></td>
																	<td></td>
																</tr>
															</tbody>
														</table>
														<table class='table table-bordered table-hover table-striped' style='width: 20.5%; margin-left: 56.99%; margin-top: 0; border: none;'>
															<tbody>
																<tr>
																	<td style='width: 9.3%; border: none; background-color: transparent; text-align: right; vertical-align: middle;'><label>Total</label></td>
																	<td><input class='form-control' type='text' name='total_bank_amount' style='text-align: center;' readonly></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="box box-primary" style='margin-top: 20px; border-top: none; background-color: #F7F7F7'>
													<div class="box-header with-border">
														<h4 class="box-title" style='font-size: 13px; font-weight: bold;'>Other Details</h4>
														<div class="box-tools pull-right">
															<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-minus"></i></button>
														</div>
													</div>
													<div class="box-body">
														<table class='table table-hover table-bordered table-striped'>
															<thead>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Prepared By</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Verified By</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Approved By</th>
																<th style='text-align: center; background-color: #D4D4D4; color: #000;'>Received By</th>
															</thead>
															<tbody id='other-details-table'>
																<tr>
																	<td><input class='form-control' type='text' name='prepared_by[]' style='text-align: center;' readonly ></td>
																	<td><input class='form-control' type='text' name='verified_by[]' style='text-align: center;' readonly ></td>
																	<td><input class='form-control' type='text' name='approved_by[]' style='text-align: center;' readonly ></td>
																	<td><input class='form-control' type='text' name='received_by[]' style='text-align: center;' readonly ></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												
											</div>
										</div>
							
										<div class='card box box-primary' style='margin: 0;'>
											<div class='card-header'>
												<div class='card-title'>
													<div class='title'>Journal Entries</div>
												</div>
												<div class="box-tools pull-right">
													<button type='button' class="btn btn-box-tool" data-widget="collapse" style='border: none !important; margin: 0;'><i class="fa fa-plus"></i></button>
												</div>
											</div>
											<div class='card-body box-body' style='display: none; padding-top: 0;'>
												<table class='table table-hover table-bordered table-strip'>
													<thead>
														<th>JE Number</th>
														<th>Transaction Code</th>
														<th>JE Sequence Number</th>
														<th>Account Code</th>
														<th>Account Name</th>
														<th>Debit(Credit)</th>
														<th>Debit Amount</th>
														<th>Credit Amount</th>
														<th>Profit Center Code</th>
														<th>Department Code Name</th>
													</thead>
													<tbody>
														<tr>
															<td>&nbsp; </td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
									</div>
									<div role="tabpanel" class="tab-pane" id="documents">
										<div class='row'>
											<div class='col-md-12' style='margin-bottom: 10px;'>
												<div class='card' style='padding-bottom: 10px;'>
													<div class='card-body' style='padding: 25px; padding-top: 20px; padding-bottom: 0;'>
														<div class='col-md-12' style='padding-left: 24% !important; background-color: #404040; color: #FFF;'>
															<table width='100%'>
																<tr>
																	<td style='width: 100px;'><label style='margin: 0;'>Transaction ID:</label></td>
																	<td style='width: 60px;'><input ng-model='transaction_id' type='text' id='input-transaction-id' class='form-control' name='input-transaction-id' style='width: 50px; border: none; background-color: #404040; color: #FFF; text-decoration: underline;' readonly /></td>
																	<td style='width: 120px;'><label style='margin: 0;'>Transaction Date:</label></td>
																	<td style='width: 155px;'><input ng-model='transaction_date' value='January 28, 2018' type='text' id='input-transaction-date' class='form-control' name='input-transaction-date' style='width: 150px; border: none; background-color: #404040; color: #FFF; text-decoration: underline;' readonly /></td>
																	<td style='width: 150px;'><label style='margin: 0;'>Journal Transaction ID</label></td>
																	<td><input ng-model='journal_transaction_id' value='12' type='text' id='input-transaction-date' class='form-control' name='input-transaction-date' style='width: 50px; border: none; background-color: #404040; color: #FFF; text-decoration: underline;' readonly /></td>
																</tr>
															</table>
														</div>
														
														<div class='row' style='padding-left: 1%; padding-right: 1%;'>
															<table width='100%'>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Company</label></td>
																	<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input ng-model='document_name' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right; font-size: 14px !important;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Document</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company Address</label></td>
																	<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input ng-model='document_number' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right; font-size: 14px !important;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Document Number</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Company TIN</label></td>
																	<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input value='{{document_date | formatDate}}' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right; font-size: 14px !important;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Document Date</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Name</label></td>
																	<td style='padding-left: 5px;'><input ng-model='business_partner_name' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input ng-model='payment_type' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right; font-size: 14px !important;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Payment</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Address</label></td>
																	<td style='padding-left: 5px;'><input ng-model='business_partner_address' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input ng-model='payment_terms' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right; font-size: 14px !important;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Terms</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>TIN</label></td>
																	<td style='padding-left: 5px;'><input ng-model='business_partner_tin' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input value='{{ payment_terms | computeDueDate:this }}' class='form-control' type='text' style='border: none; background-color: #FFF; text-align: right; font-size: 14px !important;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Due Date</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Business type</label></td>
																	<td style='padding-left: 5px;'><input ng-model='business_partner_business_type' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'>&nbsp;</td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; padding-bottom: 40px;'><label>Particulars</label></td>
																	<td colspan='3' style='padding-left: 5px; padding-bottom: 40px;'><input ng-model='business_partner_particulars' class='form-control' type='text' style='border: none; background-color: #FFF;' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
																</tr>
															</table>
														</div>
													
														<div class='row' style='padding-left: 1%; padding-right: 1%;'>
															<table class='table table-hover table-bordered table-responsive' style='width: 100%; margin: 0; border-top: none;'>
																<thead style='text-align: center; border-bottom: none;'>
																	<th style='background-color: #BBBBBB; border-bottom: none; color: #000; text-align: right;'>Details</th>
																	<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Product Service Description</th>
																	<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Quantity</th>
																	<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Unit</th>
																	<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Unit Price</th>
																	<th style='background-color: #D4D4D4; color: #000; border-bottom: 3px solid #999;'>Amount</th>
																	<th style='background-color: #BBBBBB; border-bottom: none;'></th>
																</thead>
																<tbody>
																	<tr>
																		<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
																		<td>&nbsp;</td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<th></th>
																		<th style='width: 200px; background-color: #BBBBBB; border: none;'></th>
																	</tr>
																	<tr>
																		<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
																		<td>&nbsp;</td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<th></th>
																		<th style='width: 200px; background-color: #BBBBBB; border: none;'></th>
																	</tr>
																	<tr>
																		<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
																		<td>&nbsp;</td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<th></th>
																		<th style='width: 200px; background-color: #BBBBBB; border: none;'></th>
																	</tr>
																	<tr>
																		<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
																		<td>&nbsp;</td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<th></th>
																		<th style='width: 200px; background-color: #BBBBBB; border: none;'></th>
																	</tr>
																	<tr>
																		<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
																		<td colspan='4'></td>
																		<td></td>
																		<th style='width: 200px; background-color: #BBBBBB; border: none;'><label>Total</label></th>
																	</tr>
																	<tr>
																		<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
																		<td colspan='4'></td>
																		<td></td>
																		<th style='width: 200px; background-color: #BBBBBB; border: none;'><label>Trade Discount</label></th>
																	</tr>
																	<tr>
																		<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
																		<td colspan='4'></td>
																		<td></td>
																		<th style='width: 200px; background-color: #BBBBBB; border: none;'><label>Net of Trade Discount</label></th>
																	</tr>
																</tbody>
															</table>
														</div>
													
														<div class='row' style='padding-left: 1%; padding-right: 1%; margin-top: -1px'>
															<table width='100%'>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>Mode of Payment<label></td>
																	<td style='padding-left: 5px;'><input ng-model='payment_mode' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000; width: 200px;'><label>VAT</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Payment Amount</label></td>
																	<td style='padding-left: 5px;'><input ng-model='payment_amount_paid' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>VAT Sales</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Number</label></td>
																	<td style='padding-left: 5px;'><input ng-model='payment_check_number' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Zero rated sales</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Date</label></td>
																	<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Exempt Sales</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Check Payee</label></td>
																	<td style='padding-left: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Non-VAT Sales</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Bank</label></td>
																	<td style='padding-left: 5px;'><input ng-model='payment_bank' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Total</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'><label>Account Number</label></td>
																	<td style='padding-left: 5px;'><input ng-model='payment_bank_account_number' class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Withholding Tax</label></td>
																</tr>
																<tr>
																	<td style='text-align: right; padding-right: 10px; background-color: #BBBBBB; color: #000;'></td>
																	<td style='padding-left: 5px;'></td>
																	<td>&nbsp;</td>
																	<td style='padding-right: 5px;'><input class='form-control' type='text' style='border: none; background-color: #FFF' readonly /></td>
																	<td style='padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Final Tax Withheld</label></td>
																</tr>
															</table>
														</div>
														
														<div class='row' style='padding-left: 1%; padding-right: 1%; margin-top: -1px'>
															<table width='100%'>
																<tr>
																	<td>
																		<table style='margin-top: -10px;'>
																			<tr>
																				<td style='text-align: right; vertical-align: top; background-color: #BBBBBB; color: #000; width: 200px; padding-top: 10px; padding-right: 10px;'><label>Document Reference</label></td>
																				<td style='padding-left: 10px;'>
																					<table class='table table-hover table-bordered table-striped'>
																						<thead>
																							<th style='background-color: #D4D4D4; color: #000;'>Document Number</th>
																							<th style='background-color: #D4D4D4; color: #000;'>Amount</th>
																						</thead>
																						<tbody>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							<tr>
																								<td>&nbsp;</td>
																								<td></td>
																							</tr>
																							
																						</tbody>
																					</table>	
																				</td>
																			</tr>
																		</table>
																	</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td style='vertical-align: top; width: 31.3%;'>
																		<table width='100%'>
																			<tr>
																				<td style='padding-top: 20px;'><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000; padding-top: 20px;'><label>SC Discount</label></td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>SC ID</label></td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Cash Discount</label></td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Net Amount</label></td>
																			</tr>
																			<tr>
																				<td>&nbsp;</td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'>&nbsp;</td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Prepared by</label></td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date</label></td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Received by</label></td>
																			</tr>
																			<tr>
																				<td><input type='text' class='form-control' style='border: none; background-color: #FFF; text-align: right;' readonly></td>
																				<td style='width: 50%; padding-left: 10px; background-color: #BBBBBB; color: #000;'><label>Date</label></td>
																			</tr>
																		</table>
																	</td>
																</tr>

															</table>
														</div>
														
													</div>
												</div>
														
											</div>
										</div>
											
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>