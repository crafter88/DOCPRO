<!DOCTYPE html>
<html>

	<head>
		<title>DOCPro Business Solutions</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico" />
		
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
		
		<!-- ADMIN LTE -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>libs/admin_lte/dist/css/AdminLTE.min.css">
		<!-- METRO Libs -->
		<link href="<?php echo base_url(); ?>libs/metro/css/metro.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/metro/css/metro-icons.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/metro/css/metro-responsive.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/metro/css/metro-schemes.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>libs/metro/css/docs.css" rel="stylesheet">
		
		<!-- CSS Libs -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/animate.css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/checkbox3/dist/checkbox3.min.css">
		<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/css/jquery.dataTables.min.css">-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/bower_components/select2/dist/css/select2.min.css">
		

		<!-- CSS App -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/flat/css/themes/flat-blue.css">
		
		<link href='<?php echo base_url(); ?>libs/hint.min.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>libs/hover.css' rel='stylesheet' type='text/css'>
		
		<!-- CUSTOM CSS -->
		<link href='<?php echo base_url(); ?>assets/css/blank.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>assets/css/navbar-sidebar.css' rel='stylesheet' type='text/css'>

		<style>
			.popover.sidebar-popover-content{
				margin-left: -5px !important;
				border-radius: 0 !important;
				background-color: #000;
				color: #FFF !important;
				font-size: 13px;
				width: 18vw;
				z-index: 99999;
				overflow-y: auto;
				height: auto;
				max-height: 390px;
			}
			.popover.sidebar-popover-content .popover-content{
				padding-left: 0;
				padding-right: 0;
			}
			.popover.sidebar-popover-content a{
				color: #FFF !important;
			}
			.popover.sidebar-popover-content .sidebar-popover{
				padding: 10px;
				padding-left: 20px;
				cursor: hand;
				cursor: pointer;
			}
			.popover.sidebar-popover-content .sidebar-popover a{
				padding: 10px;
				padding-left: 20px;
			}
			.popover.sidebar-popover-content .sidebar-popover:hover{
				background-color: #696969 !important;
			}
		</style>

		<?php if(isset($head_css)){ $this->load->view($head_css); } ?>
		
		<style>
			@font-face{
				font-family: docpro;
				src: url('<?php echo base_url(); ?>libs/docpro.woff');
			}
		</style>
		<style>
			@media screen and (max-width: 992px){
				#main-content .side-body {
					margin-left: 0 !important;
				}
				nav.navbar-top .navbar-body > a {
					margin-left: 0 !important;
				}
				#logout-btn{
					margin-right: 50px !important;
				}
			}
		</style>
		<style>
			.dataTables_info {
				float: left;
			}
			.dataTables_paginate{
				float: right;
			}
			.dataTable th{
				text-align: center !important;
			}
			.paginate_button a{
				width: 100% !important;
			}
		</style>
		<link href="<?php echo base_url(); ?>assets/css/mobile-style.css" rel="stylesheet">

		<!-- Styles of Puerto Responsive Flat Buttons -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
		<style>
			.button-group-custom a{
				border-radius: 3px !important;
				height: 100px !important;
			}
		</style>
		<style>
			.input-group .popover-content{
				width: 200px;
			}
		</style>
		
		<style>
			.select2.select2-container{
				width: 100% !important;
				border: 1px solid #CCC;
			}
			.select2-selection{
				border: none !important;
				height: 32px !important;
			}
			.select2-selection__rendered{
				color: #000C98 !important; 
				text-align: center; 
			}
		</style>
		
	</head>

	<body class="flat-blue">
		<div id='app-container' class="app-container">
		<div class="row content-container">
				<nav class="navbar navbar-default navbar-fixed-top navbar-top">
					<div class="container-fluid">
						<?php if(isset($top_navbar)){$this->load->view($top_navbar);} ?>
					</div>
				</nav>
				<div class="side-menu sidebar-inverse" id='costum-sidebar-close'>
					<nav class="navbar navbar-default" role="navigation">
						<div class="side-menu-container">
							<ul class="nav navbar-nav" id='sidebar-container'>
								<li class="<?php if($active_nav === 'home'){echo 'active';}?>">
									<a href='<?php echo base_url(); ?>home'>
										<span class="icon fa fa-home"></span><span class="title">Home</span>
									</a>
								</li>
								<li class="<?php if($active_nav === 'transaction'){echo 'active';}?>">
									<a href="<?php echo base_url(); ?>transactions">
									   <span class="icon fa fa-money"></span><span class="title">Transactions</span>
									</a>
								</li>
								<li class="panel panel-default dropdown <?php if($active_nav === 'journals'){echo 'active';}?>">
									<a id='journals-nav' href='#dropdown-journals'>
										<span class="icon fa fa-file-text-o"></span><span class="title">Journals</span>
									</a>
									<!-- Dropdown level 1 -->
									<div id="dropdown-journals" class="panel-collapse collapse">
										<div class="panel-body" style='padding: 0;'>
											<ul class="nav navbar-nav">
												<li>
													<a href="<?php echo base_url(); ?>journals/sales" id='popover-sales-invisible'>Sales</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>journals/receipts" id='popover-receipts-invisible'>Receipts</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>journals/collections" id='popover-collections-invisible'>Collections</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>journals/purchases" id='popover-purchases-invisible'>Purchases</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>journals/disbursements" id='popover-disbursements-invisible'>Disbursements</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>journals/adjustments" id='popover-adjustments-invisible'>Adjustments</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>journals/specials" id='popover-specials-invisible'>Specials</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class='<?php if($active_nav === 'financialreports'){echo 'active';}?>'>
									<a id='financial-reports-nav' href="<?php echo base_url(); ?>financial_reports">
										<span class="icon fa fa-folder-open"></span><span class="title">Financial Reports</span>
									</a>
								</li>
								<!-- Dropdown-->
								<li class='<?php if($active_nav === 'companyreports'){echo 'active';}?>'>
									<a id='company-reports-nav' href="<?php echo base_url(); ?>company_reports">
										<span class="icon fa fa-building"></span><span class="title">Company Reports</span>
									</a>
								</li>
								<!-- Dropdown-->
								<li class='<?php if($active_nav === 'bookofaccounts'){echo 'active';}?>'>
									<a id='book-of-accounts-nav' href="<?php echo base_url(); ?>book_of_accounts">
										<span class="icon fa fa-book"></span><span class="title">Book of Accounts</span>
									</a>
								</li>
								<!-- Dropdown-->
								<li class='<?php if($active_nav === 'docprosettings'){echo 'active';}?>'>
									<a id='docpro-settings-nav' href="<?php echo base_url(); ?>docpro_settings">
										<span class="icon fa fa-gears"></span><span class="title">DOCPro Settings</span>
									</a>
								</li>
								<!-- Dropdown-->
								<li class='<?php if($active_nav === 'companysettings'){echo 'active';}?>'>
									<a id='company-settings-nav' href="<?php echo base_url(); ?>company_settings">
										<span class="icon fa fa-gear"></span><span class="title">Company Settings</span>
									</a>
								</li>
								<!-- Dropdown-->
								<li class='<?php if($active_nav === 'tables'){echo 'active';}?>'>
									<a id='tables-nav' href="<?php echo base_url(); ?>tables">
										<span class="icon fa fa-table"></span><span class="title">Tables</span>
									</a>
								</li>
							</ul>
						</div>
						<!-- /.navbar-collapse -->
				</nav>
			</div>
				<!-- Main Content -->
				<div id='main-content' class="container-fluid">
					<?php if(isset($content)){ $this->load->view($content); } ?>
				</div>
		   </div>
		</div>
		
		<!-- SIDEBAR POPOVER -->
		<div id='journals-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/sales" style='padding-right: 114px;'><i class='fa fa-file'></i>&nbsp; Sales</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/receipts" style='padding-right: 96px;'><i class='fa fa-file'></i>&nbsp; Receipts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/collections" style='padding-right: 83px;'><i class='fa fa-file'></i>&nbsp; Collections</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/purchases" style='padding-right: 85px;'><i class='fa fa-file'></i>&nbsp; Purchases</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/disbursements" style='padding-right: 60px;'><i class='fa fa-file'></i>&nbsp; Disbursements</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/adjustments" style='padding-right: 74px;'><i class='fa fa-file'></i>&nbsp; Adjustments</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/specials" style='padding-right: 95px;'><i class='fa fa-file'></i>&nbsp; Specials</a>
				</div>
			</div>
		</div>
		
		<div id='financial-reports-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>financial_reports/trial_balance' style='padding-right: 72px;'><i class='fa fa-file'></i>&nbsp; Trial Balance</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>financial_reports/balance_sheet' style='padding-right: 62px;'><i class='fa fa-file'></i>&nbsp; Balance Sheet</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>financial_reports/income_statement' style='padding-right: 41px;'><i class='fa fa-file'></i>&nbsp; Income Statement</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>financial_reports/equity_statement' style='padding-right: 46px;'><i class='fa fa-file'></i>&nbsp; Equity Statement</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>financial_reports/cash_flow_statement' style='padding-right: 31px;'><i class='fa fa-file'></i>&nbsp; Cashflow Statement</a>
				</div>
			</div>
		</div>
		
		<div id='company-reports-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_reports/statement_of_accounts" style='padding-right: 14px;'><i class='fa fa-file'></i>&nbsp; Statement of Accounts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_reports/company_documents" style='padding-right: 22px;'><i class='fa fa-file'></i>&nbsp; Company Documents</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_reports/bank_statements" style='padding-right: 46px;'><i class='fa fa-file'></i>&nbsp; Bank Statements</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_reports/fixed_assets" style='padding-right: 70px;'><i class='fa fa-file'></i>&nbsp; Fixed Assets</a>
				</div>
			</div>
		</div>
		
		<div id='book-of-accounts-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/general_ledger' style='padding-right: 42px;'><i class='fa fa-file'></i>&nbsp; General Ledger</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/subsidiary_ledger' style='padding-right: 26px;'><i class='fa fa-file'></i>&nbsp; Subsidiary Ledger</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/sales' style='padding-right: 97px;'><i class='fa fa-file'></i>&nbsp; Sales</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/receipts' style='padding-right: 79px;'><i class='fa fa-file'></i>&nbsp; Receipts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/collections' style='padding-right: 66px;'><i class='fa fa-file'></i>&nbsp; Collections</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/purchases' style='padding-right: 68px;'><i class='fa fa-file'></i>&nbsp; Purchases</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/disbursements' style='padding-right: 43px;'><i class='fa fa-file'></i>&nbsp; Disbursements</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/adjustments' style='padding-right: 74px;'><i class='fa fa-file'></i>&nbsp; Adjustments</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>book_of_accounts/others' style='padding-right: 91px;'><i class='fa fa-file'></i>&nbsp; Others</a>
				</div>
			</div>
		</div>
		
		<div id='docpro-settings-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href='<?php echo base_url(); ?>docpro_settings/company' style='padding-right: 75px;'><i class='fa fa-file'></i>&nbsp; Company</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/users" style='padding-right: 96px;'><i class='fa fa-file'></i>&nbsp; Users</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/transactions" style='padding-right: 56px;'><i class='fa fa-file'></i>&nbsp; Transactions</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/documents" style='padding-right: 64px;'><i class='fa fa-file'></i>&nbsp; Documents</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/modes_of_payment" style='padding-right: 21px;'><i class='fa fa-file'></i>&nbsp; Modes of Payment</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/taxes" style='padding-right: 96px;'><i class='fa fa-file'></i>&nbsp; Taxes</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/discounts" style='padding-right: 72px;'><i class='fa fa-file'></i>&nbsp; Discounts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/chart_of_accounts" style='padding-right: 43px;'><i class='fa fa-file'></i>&nbsp; Chart of Accounts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>docpro_settings/banks" style='padding-right: 110px;'><i class='fa fa-file'></i>&nbsp; Banks</a>
				</div>
			</div>
		</div>
		
		<div id='company-settings-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/company" style='padding-right: 75px;'><i class='fa fa-file'></i>&nbsp; Company</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/users" style='padding-right: 96px;'><i class='fa fa-file'></i>&nbsp; Users</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/transactions" style='padding-right: 56px;'><i class='fa fa-file'></i>&nbsp; Transactions</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/documents" style='padding-right: 64px;'><i class='fa fa-file'></i>&nbsp; Documents</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/modes_of_payment" style='padding-right: 21px;'><i class='fa fa-file'></i>&nbsp; Modes of Payment</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/taxes" style='padding-right: 96px;'><i class='fa fa-file'></i>&nbsp; Taxes</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/business_partners" style='padding-right: 23px;'><i class='fa fa-file'></i>&nbsp; Business Partners</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/departments" style='padding-right: 56px;'><i class='fa fa-file'></i>&nbsp; Departments</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/profit_cost_centers" style='padding-right: 20px;'><i class='fa fa-file'></i>&nbsp; Profit Cost Centers</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/products" style='padding-right: 78px;'><i class='fa fa-file'></i>&nbsp; Products</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/services" style='padding-right: 81px;'><i class='fa fa-file'></i>&nbsp; Services</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/trade_discounts" style='padding-right: 36px;'><i class='fa fa-file'></i>&nbsp; Trade Discounts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/deductions" style='padding-right: 65px;'><i class='fa fa-file'></i>&nbsp; Deductions</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/chart_of_accounts" style='padding-right: 26px;'><i class='fa fa-file'></i>&nbsp; Chart of Accounts</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/banks" style='padding-right: 93px;'><i class='fa fa-file'></i>&nbsp; Banks</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>company_settings/others" style='padding-right: 91px;'><i class='fa fa-file'></i>&nbsp; Others</a>
				</div>
			</div>
		</div>
		
		<div id='tables-popover' style='display: none;'>
			<div class='sidebar-popover-content'>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/sales" style='padding-right: 50px;'><i class='fa fa-file'></i>&nbsp; Value Added Tax</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/receipts" style='padding-right: 55px;'><i class='fa fa-file'></i>&nbsp; Withholding Tax</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/collections" style='padding-right: 74px;'><i class='fa fa-file'></i>&nbsp; Accumulator</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/purchases" style='padding-right: 24px;'><i class='fa fa-file'></i>&nbsp; Financial Statements</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/purchases" style='padding-right: 72px;'><i class='fa fa-file'></i>&nbsp; Trial Balance</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/purchases" style='padding-right: 59px;'><i class='fa fa-file'></i>&nbsp; General Ledger</a>
				</div>
				<div class='col-md-12 sidebar-popover'>
					<a href="<?php echo base_url(); ?>journals/purchases" style='padding-right: 43px;'><i class='fa fa-file'></i>&nbsp; Subsidiary Ledger</a>
				</div>
			</div>
		</div>
		
		
		<!-- METRO Libs -->
		<script src='<?php echo base_url(); ?>libs/js/jquery.min.js'></script>
		<script src="<?php echo base_url(); ?>libs/metro/js/metro.js"></script>
		<script src="<?php echo base_url(); ?>libs/metro/js/docs.js"></script>
		<!--<script src="<?php echo base_url(); ?>docpro/libs/metro/js/prettify/run_prettify.js"></script>-->
		<script src="<?php echo base_url(); ?>libs/metro/js/ga.js"></script>
		
		<!-- Javascript Libs -->
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/Chart.js/Chart.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/matchHeight/jquery.matchHeight-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/datatables/media/js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/bower_components/select2/dist/js/select2.full.min.js"></script>
		<!-- Javascript -->
		<script type="text/javascript" src="<?php echo base_url(); ?>libs/flat/js/app.js"></script>
		
		<!-- Slimscroll -->
		<script src="<?php echo base_url(); ?>libs/admin_lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<!-- FastClick -->
		<script src="<?php echo base_url(); ?>libs/admin_lte/plugins/fastclick/fastclick.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo base_url(); ?>libs/admin_lte/dist/js/app.min.js"></script>

		<script>
			$(document).ready(function(){
				$('button.fa-rotate-90').on('click', function(){
					$('li.panel.dropdown > a').attr('data-toggle', 'collapse');
				});
				$(function() {
				  return $('.select2').select2();
				});
			});
		</script>
		<script>
			$('#financial-reports-nav').popover({
				animation: false,
				html: true,
				placement: function(context, src) {
				    $(context).addClass('sidebar-popover-content');
   					return 'right';
				},
				trigger: 'manual',
				content: function(){
					return $('#financial-reports-popover').html();
				},
				container: 'body',
			}).on("mouseenter", function () {
				$('.sidebar-popover-content').popover('hide');
				var _this = this;
				$(this).popover("show");
				$(this).siblings(".popover").on("mouseleave", function () {
					$(_this).popover('hide');
				});
				
				$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
				$(this).attr('style', 'background-color: #696969 !important');
				$('#financial-reports-nav span').attr('style', 'background-color: #696969 !important;');

			});
			
			$('#journals-nav').popover({
				animation: false,
				html: true,
				placement: function(context, src) {
				    $(context).addClass('sidebar-popover-content');
   					return 'right';
				},
				trigger: 'manual',
				content: function(){
					return $('#journals-popover').html();
				},
				container: 'body',
			}).on("mouseenter", function () {
				$('.sidebar-popover-content').popover('hide');
				var _this = this;
				$(this).popover("show");
				$(this).siblings(".popover").on("mouseleave", function () {
					$(_this).popover('hide');
				});
				
				$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
				$(this).attr('style', 'background-color: #696969 !important');
				$('#journals-nav span').attr('style', 'background-color: #696969 !important;');
			});
			
			$('#company-reports-nav').popover({
				animation: false,
				html: true,
				placement: function(context, src) {
				    $(context).addClass('sidebar-popover-content');
   					return 'right';
				},
				trigger: 'manual',
				content: function(){
					return $('#company-reports-popover').html();
				},
				container: 'body',
			}).on("mouseenter", function () {
				$('.sidebar-popover-content').popover('hide');
				var _this = this;
				$(this).popover("show");
				$(this).siblings(".popover").on("mouseleave", function () {
					$(_this).popover('hide');
				});
				
				$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
				$(this).attr('style', 'background-color: #696969 !important');
				$('#company-reports-nav span').attr('style', 'background-color: #696969 !important;');
			});
			
			$('#book-of-accounts-nav').popover({
				animation: false,
				html: true,
				placement: function(context, src) {
				    $(context).addClass('sidebar-popover-content');
   					return 'right';
				},
				trigger: 'manual',
				content: function(){
					return $('#book-of-accounts-popover').html();
				},
				container: 'body',
			}).on("mouseenter", function () {
				$('.sidebar-popover-content').popover('hide');
				var _this = this;
				$(this).popover("show");
				$(this).siblings(".popover").on("mouseleave", function () {
					$(_this).popover('hide');
				});
				
				$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
				$(this).attr('style', 'background-color: #696969 !important');
				$('#book-of-accounts-nav span').attr('style', 'background-color: #696969 !important;');
			});
			
			$('#docpro-settings-nav').popover({
				animation: false,
				html: true,
				placement: function(context, src) {
				    $(context).addClass('sidebar-popover-content');
   					return 'right';
				},
				trigger: 'manual',
				content: function(){
					return $('#docpro-settings-popover').html();
				},
				container: 'body',
			}).on("mouseenter", function () {
				$('.sidebar-popover-content').popover('hide');
				var _this = this;
				$(this).popover("show");
				$(this).siblings(".popover").on("mouseleave", function () {
					$(_this).popover('hide');
				});
				
				$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
				$(this).attr('style', 'background-color: #696969 !important');
				$('#docpro-settings-nav span').attr('style', 'background-color: #696969 !important;');
			});
			
			$('#company-settings-nav').popover({
				animation: false,
				html: true,
				placement: function(context, src) {
				    $(context).addClass('sidebar-popover-content');
   					return 'right';
				},
				trigger: 'manual',
				content: function(){
					return $('#company-settings-popover').html();
				},
				container: 'body',
			}).on("mouseenter", function () {
				$('.sidebar-popover-content').popover('hide');
				var _this = this;
				$(this).popover("show");
				$(this).siblings(".popover").on("mouseleave", function () {
					$(_this).popover('hide');
				});
				
				$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
				$(this).attr('style', 'background-color: #696969 !important');
				$('#company-settings-nav span').attr('style', 'background-color: #696969 !important;');
			});
			
			$('#tables-nav').popover({
				animation: false,
				html: true,
				placement: function(context, src) {
				    $(context).addClass('sidebar-popover-content');
   					return 'right';
				},
				trigger: 'manual',
				content: function(){
					return $('#tables-popover').html();
				},
				container: 'body',
			}).on("mouseenter", function () {
				$('.sidebar-popover-content').popover('hide');
				var _this = this;
				$(this).popover("show");
				$(this).siblings(".popover").on("mouseleave", function () {
					$(_this).popover('hide');
				});
				
				$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
				$('#tables-nav').attr('style', 'background-color: #696969 !important;');
				$('#tables-nav span').attr('style', 'background-color: #696969 !important;');
			});
		</script>
		<script>
			$('.side-body').hover(function(){
				$('.sidebar-popover-content').popover('hide');
			});
			$('.navbar-header').hover(function(){
				$('.sidebar-popover-content').popover('hide');
			});
		</script>
		
		<script src="<?php echo base_url(); ?>libs/angular/angular.min.js"></script>
		
		<?php if(isset($footer_js)){ $this->load->view($footer_js); } ?>
	</body>

</html>
