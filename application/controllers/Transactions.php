<?php

class Transactions extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
		if(!($this->session->userdata('logged_in'))) redirect('login');
	}
	
	public function get_transactions(){
		return $this->load->view($this->layout, ['head_css'=>'fragments/head_css/transaction', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/transactions', 'footer_js'=>'fragments/footer_js/transactions', 'back_button'=>'home', 'title'=>'Transactions', 'active_nav'=>'transaction']);
	}
}