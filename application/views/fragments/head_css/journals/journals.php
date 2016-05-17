<link href='<?php echo base_url(); ?>/assets/css/purchase_journal.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>/assets/css/business_partner.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>/assets/css/new_transaction.css' rel='stylesheet' type='text/css'>
<style>
	.tab-content > div {
		padding: 0 !important;
	}
</style>
<style>
	@media screen and (max-width: 992px){
		#journal-navs{
			margin-top: 60px !important;
		}
		
	}
	@media screen and (min-width: 992px){
		.col-custom{
			 width: 10% !important;
		}
		.col-input-custom{
			 padding: 0 2px;
		}
		.col-md-3 {
			width: 29%;
		}
		.col-md-2 {
			width: 17.4%;
		}
	}
	@media screen and (max-width: 768px){
		#journal-navs a{
			width: 100% !important;
		}
	}
	
	@media screen and (min-width: 992px){
		/**#card-2 .col-md-12 div:first-child label, #card-4 .col-md-12 div:first-child label{
			float: right;
		}**/
		#documents > .row:first-child > .col-md-12:first-child .card-body > .row .col-md-12 > div:first-child label{
			float: right;
		}
		#card-4 .col-md-12 div.sc-discount-col label{
			float: left ;
		}
		#custom-col .col-md-8{
			width: 61%;
		}
	}
</style>
<style>
	.side-body li.active a, .side-body li.active a:after{
		background-color: #ECECEC !important;
		color: #000 !important;
		font-weight: bold;
	}
	
	.flat-blue .step.tabs-left .nav-tabs > li:hover:after, .flat-blue .step.tabs-left .nav-tabs > li.active:after{
		border-left: 15px solid #000 !important;
	}
</style>
<style>
	input, select{
		font-size: 11.5px !important;
		padding: 6px 5px !important;
	}
	.select2-selection__rendered{
		font-size: 11px !important;
	}
</style>
<style>
/** specials **/	
	select[name=specials-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#specials-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#specials-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#specials-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#specials-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#specials-journal-summary-table_wrapper #summary-table_filter{
		margin: 0 !important;
	}
	#specials-journal-summary-table{
		margin-top: 0 !important;
	}
	#specials-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=specials-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#specials-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#specials-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#specials-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** BP	**/

	select[name=specials-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#specials-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#specials-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#specials-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#specials-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#specials-bp-table_wrapper{
		margin: 0 !important;
	}
	#specials-bp-table{
		margin-top: 0 !important;
	}
	#specials-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=specials-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#specials-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#specials-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#specials-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#specials-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#specials-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#specials-transaction-details-table{
		margin-top: 0 !important;
	}
	#specials-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=specials-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#specials-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#specials-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#specials-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#specials-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#specials-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#specials-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#specials-bp-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** sales **/	
	select[name=sales-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#sales-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#sales-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#sales-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#sales-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#sales-journal-summary-table_wrapper{
		margin: 0 !important;
	}
	#sales-journal-summary-table{
		margin-top: 0 !important;
	}
	#sales-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=sales-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#sales-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#sales-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#sales-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** BP	**/
	select[name=sales-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#sales-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#sales-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#sales-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#sales-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#sales-bp-table_wrapper{
		margin: 0 !important;
	}
	#sales-bp-table{
		margin-top: 0 !important;
	}
	#sales-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=sales-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#sales-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#sales-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#sales-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#sales-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#sales-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#sales-transaction-details-table{
		margin-top: 0 !important;
	}
	#sales-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=sales-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#sales-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#sales-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#sales-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#sales-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#sales-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#sales-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#sales-bp-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** receipts **/	
	select[name=receipts-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#receipts-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#receipts-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#receipts-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#receipts-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#receipts-journal-summary-table_wrapper #summary-table_filter{
		margin: 0 !important;
	}
	#receipts-journal-summary-table{
		margin-top: 0 !important;
	}
	#receipts-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=receipts-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#receipts-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#receipts-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#receipts-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}

/** BP	**/
	select[name=receipts-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#receipts-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#receipts-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#receipts-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#receipts-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#receipts-bp-table_wrapper{
		margin: 0 !important;
	}
	#receipts-bp-table{
		margin-top: 0 !important;
	}
	#receipts-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=receipts-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#receipts-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#receipts-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#receipts-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#receipts-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#receipts-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#receipts-transaction-details-table{
		margin-top: 0 !important;
	}
	#receipts-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=receipts-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#receipts-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#receipts-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#receipts-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#receipts-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#receipts-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#receipts-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#receipts-bp-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** collections **/	
	select[name=collections-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#collections-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#collections-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#collections-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#collections-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#collections-journal-summary-table_wrapper #summary-table_filter{
		margin: 0 !important;
	}
	#collections-journal-summary-table{
		margin-top: 0 !important;
	}
	#collections-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=collections-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#collections-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#collections-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#collections-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** BP	**/	
	select[name=collections-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#collections-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#collections-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#collections-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#collections-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#collections-bp-table_wrapper{
		margin: 0 !important;
	}
	#collections-bp-table{
		margin-top: 0 !important;
	}
	#collections-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=collections-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#collections-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#collections-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#collections-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#collections-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#collections-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#collections-transaction-details-table{
		margin-top: 0 !important;
	}
	#collections-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=collections-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#collections-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#collections-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#collections-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#collections-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#collections-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#collections-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#collections-bp-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}	

/** purchases **/	
	select[name=purchases-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#purchases-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#purchases-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#purchases-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#purchases-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#purchases-journal-summary-table_wrapper #summary-table_filter{
		margin: 0 !important;
	}
	#purchases-journal-summary-table{
		margin-top: 0 !important;
	}
	#purchases-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=purchases-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#purchases-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#purchases-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#purchases-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** BP	**/	
	select[name=purchases-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#purchases-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#purchases-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#purchases-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#purchases-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#purchases-bp-table_wrapper{
		margin: 0 !important;
	}
	#purchases-bp-table{
		margin-top: 0 !important;
	}
	#purchases-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=purchases-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#purchases-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#purchases-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#purchases-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#purchases-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#purchases-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#purchases-transaction-details-table{
		margin-top: 0 !important;
	}
	#purchases-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=purchases-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#purchases-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#purchases-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#purchases-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#purchases-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#purchases-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#purchases-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#purchases-bp-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}		
	
/** disbursements **/	
	select[name=disbursements-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#disbursements-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#disbursements-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#disbursements-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#disbursements-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#disbursements-journal-summary-table_wrapper #summary-table_filter{
		margin: 0 !important;
	}
	#disbursements-journal-summary-table{
		margin-top: 0 !important;
	}
	#disbursements-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=disbursements-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#disbursements-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#disbursements-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#disbursements-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** BP	**/	
	select[name=disbursements-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#disbursements-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#disbursements-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#disbursements-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#disbursements-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#disbursements-bp-table_wrapper{
		margin: 0 !important;
	}
	#disbursements-bp-table{
		margin-top: 0 !important;
	}
	#disbursements-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=disbursements-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#disbursements-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#disbursements-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#disbursements-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#disbursements-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#disbursements-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#disbursements-transaction-details-table{
		margin-top: 0 !important;
	}
	#disbursements-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=disbursements-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#disbursements-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#disbursements-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#disbursements-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#disbursements-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#disbursements-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#disbursements-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#disbursements-bp-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}			
	
/** adjustments **/	
	select[name=adjustments-journal-summary-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#adjustments-journal-summary-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#adjustments-journal-summary-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#adjustments-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#adjustments-journal-summary-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#adjustments-journal-summary-table_wrapper #summary-table_filter{
		margin: 0 !important;
	}
	#adjustments-journal-summary-table{
		margin-top: 0 !important;
	}
	#adjustments-journal-summary-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=adjustments-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	
	#adjustments-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
	}
	#adjustments-journal-entries-table_wrapper > .row .col-sm-6 div:first-child{
		margin: 0 !important;
	}
	#adjustments-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
/** BP	**/	
	select[name=adjustments-bp-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#adjustments-bp-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#adjustments-bp-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#adjustments-bp-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#adjustments-bp-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#adjustments-bp-table_wrapper{
		margin: 0 !important;
	}
	#adjustments-bp-table{
		margin-top: 0 !important;
	}
	#adjustments-bp-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	
	select[name=adjustments-transaction-details-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#adjustments-transaction-details-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#adjustments-transaction-details-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#adjustments-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#adjustments-transaction-details-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#adjustments-transaction-details-table_wrapper{
		margin: 0 !important;
	}
	#adjustments-transaction-details-table{
		margin-top: 0 !important;
	}
	#adjustments-transaction-details-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}
	
	select[name=adjustments-bp-journal-entries-table_length]{
		padding: 0 !important;
		padding-left: 30px !important;
	}
	#adjustments-bp-journal-entries-table_wrapper > .row{
		margin-bottom: 0px !important;
	}
	#adjustments-bp-journal-entries-table_wrapper > .row .col-sm-6{
		background-color: transparent !important;
		margin: 0 !important;
		margin-top: 20px !important;
	}
	#adjustments-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length{
		margin: 0 !important;
	}
	#adjustments-bp-journal-entries-table_wrapper > .row .col-sm-6 .dataTables_length label{
		margin-bottom: 0 !important;
		margin-top: 7px;
	}
	#adjustments-bp-journal-entries-table_wrapper{
		margin: 0 !important;
	}
	#adjustments-bp-journal-entries-table{
		margin-top: 0 !important;
	}
	#adjustments-bp-journal-entries-table_paginate li{
		border: 1px solid #D5D5D5 !important;
	}			
	
</style>