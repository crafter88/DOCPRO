<?php

class Adjustments extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
	}
	
	public function get_adjustments_journal(){
		return $this->load->view($this->layout,  ['head_css'=>'fragments/head_css/journals/journals', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/journals/adjustments_journal', 'footer_js'=>'fragments/footer_js/journals/adjustments_journal', 'back_button'=>'home', 'title'=>'Adjustments Journal', 'active_nav'=>'journals']);
	}
}