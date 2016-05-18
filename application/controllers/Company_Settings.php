<?php

class Company_Settings extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
	}
	
	public function get_company_settings(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css'=>'fragments/head_css/company_settings', 'content'=>'fragments/content/company_settings', 'back_button'=>'../home', 'active_nav'=>'companysettings']);
	}
      
	public function get_company(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/company', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/company', 'footer_js'=>'fragments/footer_js/companysettings/company', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
        
	public function get_users(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/users', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/users', 'footer_js'=>'fragments/footer_js/companysettings/users', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
   
	public function get_transactions(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/transactions', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/transactions', 'footer_js'=>'fragments/footer_js/companysettings/transactions', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
        
	public function get_documents(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/documents', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/documents', 'footer_js'=>'fragments/footer_js/companysettings/documents', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
        
	public function get_modes_of_payment(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/modes_of_payment', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/modes_of_payment', 'footer_js'=>'fragments/footer_js/companysettings/modes_of_payment', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
        
	public function get_taxes(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/taxes', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/taxes', 'footer_js'=>'fragments/footer_js/companysettings/taxes', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
        
	public function get_business_partners(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/business_partners', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/business_partners', 'footer_js'=>'fragments/footer_js/companysettings/business_partners', 'back_button'=>'../company_settings', 'active_nav'=>'company_settings']);
	}
        
	public function get_departments(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/departments', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/departments', 'footer_js'=>'fragments/footer_js/companysettings/departments', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
        
	public function get_profit_cost_centers(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/profit_cost_centers', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/profit_cost_centers', 'footer_js'=>'fragments/footer_js/companysettings/profit_cost_centers', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
        
	public function get_products(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/products', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/products', 'footer_js'=>'fragments/footer_js/companysettings/products', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
        
	public function get_services(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/services', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/services', 'footer_js'=>'fragments/footer_js/companysettings/services', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
        
	public function get_trade_discounts(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/trade_discounts', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/trade_discounts', 'footer_js'=>'fragments/footer_js/companysettings/trade_discounts', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
        
	public function get_deductions(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/deductions', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/deductions', 'footer_js'=>'fragments/footer_js/companysettings/deductions', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
        
	public function get_chart_of_accounts(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/chart_of_accounts', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/chart_of_accounts', 'footer_js'=>'fragments/footer_js/companysettings/chart_of_accounts', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
        
	public function get_banks(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/banks', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/banks', 'footer_js'=>'fragments/footer_js/companysettings/banks', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
        
	public function get_others(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/others', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/others', 'footer_js'=>'fragments/footer_js/companysettings/others', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
	}
}