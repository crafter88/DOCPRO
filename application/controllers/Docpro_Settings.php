<?php

class Docpro_Settings extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
	}
	
	public function get_docpro_settings(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css'=>'fragments/head_css/docpro_settings', 'content'=>'fragments/content/docpro_settings', 'back_button'=>'../home', 'active_nav'=>'docprosettings']);
	}
	
	public function get_users(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/users', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/users', 'footer_js'=>'fragments/footer_js/docprosettings/users', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings']);
	}
	
	public function get_company(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/company', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/company', 'footer_js'=>'fragments/footer_js/docprosettings/company', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings']);
	}
	
	public function get_transactions(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/transactions', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/transactions', 'footer_js'=>'fragments/footer_js/docprosettings/transactions', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings']);
	}
	
	public function get_documents(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/documents', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/documents', 'footer_js'=>'fragments/footer_js/docprosettings/documents', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings']);
	}
	
	public function get_modes_of_payment(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/modes_of_payment', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/modes_of_payment', 'footer_js'=>'fragments/footer_js/docprosettings/modes_of_payment', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings']);
	}
	
	public function get_taxes(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/taxes', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/taxes', 'footer_js'=>'fragments/footer_js/docprosettings/taxes', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings']);
	}
	
	public function get_discounts(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/discounts', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/discounts', 'footer_js'=>'fragments/footer_js/docprosettings/discounts', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings']);
	}
	
	public function get_chart_of_accounts(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/chart_of_accounts', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/chart_of_accounts', 'footer_js'=>'fragments/footer_js/docprosettings/chart_of_accounts', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings']);
	}
	
	public function get_banks(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/banks', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/banks', 'footer_js'=>'fragments/footer_js/docprosettings/banks', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings']);
	}
}