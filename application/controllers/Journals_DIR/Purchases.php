<?php

class Purchases extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
	}
	
	public function get_purchases_journal(){
		return $this->load->view($this->layout,  ['head_css'=>'fragments/head_css/journals/journals', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/journals/purchases_journal', 'footer_js'=>'fragments/footer_js/journals/purchases_journal', 'back_button'=>'home', 'title'=>'Purchases Journal', 'active_nav'=>'journals']);
	
	}
}