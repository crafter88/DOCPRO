<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['404_override'] = 'page_not_found';
$route['translate_uri_dashes'] = FALSE;

$route['login']['get'] 													= 'login';
$route['login']['post'] 												= 'login/postLogin';
$route['logout']['get']													= 'Logout/logout';

$route['home']		 													= 'Home/get_home';
$route['home/memo_slider']		 										= 'Home/get_memo_slider';
$route['home/geocompanies_slider']		 								= 'Home/get_geocompanies_slider';
$route['home/linechart_slider']		 									= 'Home/get_linechart_slider';
$route['home/barchart_slider']		 									= 'Home/get_barchart_slider';
$route['home/piechart_slider']		 									= 'Home/get_piechart_slider';

$route['transactions']		 											= 'Transactions/get_transactions';
$route['transactions/business_partners']								= 'Transactions_DIR/Business_Partners/get_business_partners';	

$route['financial_reports']												= 'Financial_Reports/get_financial_reports';
$route['financial_reports/trial_balance']								= 'Financial_Reports/get_trial_balance';
$route['financial_reports/balance_sheet']								= 'Financial_Reports/get_balance_sheet';
$route['financial_reports/cash_flow_statement']							= 'Financial_Reports/get_cash_flow_statement';
$route['financial_reports/equity_statement']							= 'Financial_Reports/get_equity_statement';
$route['financial_reports/income_statement']							= 'Financial_Reports/get_income_statement';

$route['company_reports']												= 'Company_Reports/get_company_reports';
$route['company_reports/statement_of_accounts']							= 'Company_Reports/get_statement_of_accounts';
$route['company_reports/company_documents']								= 'Company_Reports/get_company_documents';
$route['company_reports/bank_statements']								= 'Company_Reports/get_bank_statements';
$route['company_reports/fixed_assets']									= 'Company_Reports/get_fixed_assets';

$route['book_of_accounts']												= 'Book_Of_Accounts/get_book_of_accounts';
$route['book_of_accounts/general_ledger']								= 'Book_Of_Accounts_DIR/General_Ledger/get_general_ledger';
$route['book_of_accounts/subsidiary_ledger']							= 'Book_Of_Accounts_DIR/Subsidiary_Ledger/get_subsidiary_ledger';
$route['book_of_accounts/sales']										= 'Book_Of_Accounts_DIR/Sales/get_sales';
$route['book_of_accounts/receipts']										= 'Book_Of_Accounts_DIR/Receipts/get_receipts';
$route['book_of_accounts/collections']									= 'Book_Of_Accounts_DIR/Collections/get_collections';
$route['book_of_accounts/purchases']									= 'Book_Of_Accounts_DIR/Purchases/get_purchases';
$route['book_of_accounts/disbursements']								= 'Book_Of_Accounts_DIR/Disbursements/get_disbursements';
$route['book_of_accounts/adjustments']									= 'Book_Of_Accounts_DIR/Adjustments/get_adjustments';
$route['book_of_accounts/others']										= 'Book_Of_Accounts_DIR/Others/get_others';

$route['docpro_settings']												= 'Docpro_Settings/get_docpro_settings';

$route['docpro_settings/users']											= 'Docpro_Settings/get_users';
$route['docpro_settings/users/get']										= 'Docpro_Settings_DIR/Users/get';

$route['docpro_settings/company']										= 'Docpro_Settings/get_company';
$route['docpro_settings/company/get']									= 'Docpro_Settings_DIR/Company/get';
$route['docpro_settings/company/add']									= 'Docpro_Settings_DIR/Company/add';

$route['docpro_settings/transactions']									= 'Docpro_Settings/get_transactions';
$route['docpro_settings/documents']										= 'Docpro_Settings/get_documents';

$route['docpro_settings/modes_of_payment']								= 'Docpro_Settings/get_modes_of_payment';
$route['docpro_settings/modes_of_payments/get']							= 'Docpro_Settings_DIR/Modes_Of_Payment/get';
$route['docpro_settings/modes_of_payments/add']							= 'Docpro_Settings_DIR/Modes_Of_Payment/add';
$route['docpro_settings/modes_of_payments/edit']						= 'Docpro_Settings_DIR/Modes_Of_Payment/edit';
$route['docpro_settings/modes_of_payments/update']						= 'Docpro_Settings_DIR/Modes_Of_Payment/update';

$route['docpro_settings/taxes']											= 'Docpro_Settings/get_taxes';
$route['docpro_settings/discounts']										= 'Docpro_Settings/get_discounts';
$route['docpro_settings/chart_of_accounts']								= 'Docpro_Settings/get_chart_of_accounts';
$route['docpro_settings/banks']											= 'Docpro_Settings/get_banks';

$route['company_settings']												= 'Company_Settings/get_company_settings';
$route['company_settings/company']										= 'Company_Settings/get_company';
$route['company_settings/users']										= 'Company_Settings/get_users';
$route['company_settings/transactions']									= 'Company_Settings/get_transactions';
$route['company_settings/documents']									= 'Company_Settings/get_documents';
$route['company_settings/modes_of_payment']								= 'Company_Settings/get_modes_of_payment';
$route['company_settings/taxes']										= 'Company_Settings/get_taxes';
$route['company_settings/business_partners']							= 'Company_Settings/get_business_partners';
$route['company_settings/departments']									= 'Company_Settings/get_departments';
$route['company_settings/profit_cost_centers']							= 'Company_Settings/get_profit_cost_centers';
$route['company_settings/products']										= 'Company_Settings/get_products';
$route['company_settings/services']										= 'Company_Settings/get_services';
$route['company_settings/trade_discounts']								= 'Company_Settings/get_trade_discounts';
$route['company_settings/deductions']									= 'Company_Settings/get_deductions';
$route['company_settings/chart_of_accounts']							= 'Company_Settings/get_chart_of_accounts';
$route['company_settings/banks']										= 'Company_Settings/get_banks';
$route['company_settings/others']										= 'Company_Settings/get_others';

$route['tables']														= 'Tables/get_tables';
$route['tables/value_added_tax']										= 'Tables/get_value_added_tax';
$route['tables/withholding_tax']										= 'Tables/get_withholding_tax';
$route['tables/accumulator']											= 'Tables/get_accumulator';
$route['tables/financial_statements']									= 'Tables/get_financial_statements';
$route['tables/trial_balance']											= 'Tables/get_trial_balance';
$route['tables/general_ledger']											= 'Tables/get_general_ledger';
$route['tables/subsidiary_ledger']										= 'Tables/get_subsidiary_ledger';


/****************************************************************************************************************************/
$route['journals/sales'] 												= 'Journals_DIR/Sales/get_sales_journal';
$route['journals/receipts'] 											= 'Journals_DIR/Receipts/get_receipts_journal';
$route['journals/collections'] 											= 'Journals_DIR/Collections/get_collections_journal';
$route['journals/purchases'] 											= 'Journals_DIR/Purchases/get_purchases_journal';
$route['journals/disbursements'] 										= 'Journals_DIR/Disbursements/get_disbursements_journal';
$route['journals/adjustments'] 											= 'Journals_DIR/Adjustments/get_adjustments_journal';
$route['journals/specials']												= 'Journals_DIR/Specials/get_specials_journal';

