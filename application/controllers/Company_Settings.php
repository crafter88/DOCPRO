<?php

class Company_Settings extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
		$this->load->model('Company_profit_cost_model','procost');
		$this->load->model('Company_departments_model','departments');
        $this->load->model('Company_products_model', 'products');
        $this->load->model('Company_services_model', 'services');
        $this->load->model('Company_trade_discounts_model', 'tdm');
        $this->load->model('Company_chart_of_accounts_model', 'coa');
    }

    public function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['dept'] = $this->procost->get_department();
            $this->load->view('profit_cost_centers',$data);
        }
        else
        {
             //If no session, redirect to login page
           redirect('login', 'refresh');
       }
       $this->load->helper('url');
   }	

   public function get_company_settings(){
      $this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/company_settings', 'back_button'=>'../home', 'active_nav'=>'companysettings']);
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
      $data['dept'] = $this->procost->get_department();
      $this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/profit_cost_centers', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/profit_cost_centers', 'footer_js'=>'fragments/footer_js/companysettings/profit_cost_centers', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'dept' => $this->procost->get_department()]);
  }

  public function get_products(){
    $data['dept'] = $this->products->get_department();
    $data['profit_cost'] = $this->products->get_pcc();
    $this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/products', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/products', 'footer_js'=>'fragments/footer_js/companysettings/products', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'dept' => $this->products->get_department(), 'profit_cost'=>$this->products->get_pcc()]);
}

public function get_services(){
    $data['dept'] = $this->services->get_department();
    $data['profit_cost'] = $this->services->get_pcc();
    $this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/services', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/services', 'footer_js'=>'fragments/footer_js/companysettings/services', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'dept' => $this->services->get_department(), 'profit_cost'=>$this->services->get_pcc()]);
}

public function get_trade_discounts(){
  $this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/trade_discounts', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/trade_discounts', 'footer_js'=>'fragments/footer_js/companysettings/trade_discounts', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
}

public function get_deductions(){
  $this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/deductions', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/deductions', 'footer_js'=>'fragments/footer_js/companysettings/deductions', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
}

public function get_chart_of_accounts(){
  $data['one'] = $this->coa->get_cat1();
  $data['two'] = $this->coa->get_cat2();
  $data['three'] = $this->coa->get_cat3();
  $data['bir'] = $this->coa->get_bir();
  $data['acc'] = $this->coa->get_acc();
  $this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/chart_of_accounts', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/chart_of_accounts', 'footer_js'=>'fragments/footer_js/companysettings/chart_of_accounts', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'one' => $this->coa->get_cat1(), 'two' => $this->coa->get_cat2(), 'three' => $this->coa->get_cat3(), 'bir' => $this->coa->get_bir(), 'acc' => $this->coa->get_acc(),]);
}

public function get_banks(){
  $this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/banks', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/banks', 'footer_js'=>'fragments/footer_js/companysettings/banks', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
}

public function get_others(){
  $this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/others', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/others', 'footer_js'=>'fragments/footer_js/companysettings/others', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings']);
}

// Profit Cost Center CRUD
public function pcc_list()
{

    $list = $this->procost->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $pccList) {
        $no++;
        $row = array();
        $row[] = '<button class="btn btn-sm btn-primary btn-flat" data-hint="Edit" href="javascript:void()" title="Edit" onclick="edit_record('."'".$pccList->profit_cost_id."'".')"><i class="fa fa-pencil"></i></button>
        <button class="btn btn-sm btn-danger btn-flat" data-hint="Delete" href="javascript:void()" title="Delete" onclick="delete_record('."'".$pccList->profit_cost_id."'".')"><i class="glyphicon glyphicon-trash"></i></button>';
        $row[] = $pccList->code;
        $row[] = $pccList->sequence;
        $row[] = $pccList->name;
        $row[] = $pccList->shortName;
        $row[] = $pccList->dept_name;

            //add html for action


        $data[] = $row;
    }

    $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->procost->count_all(),
        "recordsFiltered" => $this->procost->count_filtered(),
        "data" => $data,
        );
        //output to json format
    echo json_encode($output);
}

public function pcc_add()
{
        // $this->_validate();
    $data = array(
        'sequence' => $this->input->post('sequence'),
        'code' => $this->input->post('code'),
        'name' => $this->input->post('name'),
        'shortName' => $this->input->post('shortName'),
        'dept_id' => $this->input->post('dept_id')
        );
    $insert = $this->procost->save($data);
    echo json_encode(array("status" => TRUE));
}

public function pcc_delete($profit_cost_id)
{
    $this->procost->delete_by_id($profit_cost_id);
    echo json_encode(array("status" => TRUE));
}

public function pcc_edit($profit_cost_id)
{
    $data = $this->procost->get_by_id($profit_cost_id);
    echo json_encode($data);
}

public function pcc_update()
{
        // $this->_validate();
    $data = array(
        'sequence' => $this->input->post('sequence'),
        'code' => $this->input->post('code'),
        'name' => $this->input->post('name'),
        'shortName' => $this->input->post('shortName'),
        'dept_id' => $this->input->post('dept_id')
        );
    $this->procost->update(array('profit_cost_id' => $this->input->post('profit_cost_id')), $data);
    echo json_encode(array("status" => TRUE));
}
//END of Profit Cost Center CRUD

// departments CRUD
public function dept_list()
{

    $list = $this->departments->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $deptList) {
        $no++;
        $row = array();
        $row[] = '<button class="btn btn-sm btn-primary btn-flat" data-hint="Edit" href="javascript:void()" title="Edit" onclick="edit_record('."'".$deptList->dept_id."'".')"><i class="fa fa-pencil"></i></button>
        <button class="btn btn-sm btn-danger btn-flat" data-hint="Delete" href="javascript:void()" title="Delete" onclick="delete_record('."'".$deptList->dept_id."'".')"><i class="glyphicon glyphicon-trash"></i></button>';
        $row[] = $deptList->dept_code;
        $row[] = $deptList->seq;
        $row[] = $deptList->dept_name;
        $row[] = $deptList->dept_shortname;
        $data[] = $row;
    }

    $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->departments->count_all(),
        "recordsFiltered" => $this->departments->count_filtered(),
        "data" => $data,
        );
        //output to json format
    echo json_encode($output);
}

public function dept_add()
{
        // $this->_validate();
    $data = array(
        'seq' => $this->input->post('seq'),
        'dept_code' => $this->input->post('dept_code'),
        'dept_name' => $this->input->post('dept_name'),
        'dept_shortname' => $this->input->post('dept_shortname')
        );
    $insert = $this->departments->save($data);
    echo json_encode(array("status" => TRUE));
}

public function dept_delete($dept_id)
{
    $this->departments->delete_by_id($dept_id);
    echo json_encode(array("status" => TRUE));
}

public function dept_edit($dept_id)
{
    $data = $this->departments->get_by_id($dept_id);
    echo json_encode($data);
}

public function dept_update()
{
        // $this->_validate();
    $data = array(
     'seq' => $this->input->post('seq'),
     'dept_code' => $this->input->post('dept_code'),
     'dept_name' => $this->input->post('dept_name'),
     'dept_shortname' => $this->input->post('dept_shortname')
     );
    $this->departments->update(array('dept_id' => $this->input->post('dept_id')), $data);
    echo json_encode(array("status" => TRUE));
}
// END of Departments CRUD

    // Prooducts CRUD
public function prod_list()
{

    $list = $this->products->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $prodList) {
        $no++;
        $row = array();
        $row[] = '<button class="btn btn-sm btn-primary btn-flat" data-hint="Edit" href="javascript:void()" title="Edit" onclick="edit_record('."'".$prodList->prod_id."'".')"><i class="fa fa-pencil"></i></button>
        <button class="btn btn-sm btn-danger btn-flat" data-hint="Delete" href="javascript:void()" title="Delete" onclick="delete_record('."'".$prodList->prod_id."'".')"><i class="glyphicon glyphicon-trash"></i></button>';
        $row[] = $prodList->prod_code;
        $row[] = $prodList->prod_seq;
        $row[] = $prodList->prod_name;
        $row[] = $prodList->prod_shortname;
        $row[] = $prodList->name;
        $row[] = $prodList->dept_name;
        $data[] = $row;
    }

    $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->products->count_all(),
        "recordsFiltered" => $this->products->count_filtered(),
        "data" => $data,
        );
        //output to json format
    echo json_encode($output);
}

public function prod_add()
{
        // $this->_validate();
    $data = array(
        'prod_seq' => $this->input->post('prod_seq'),
        'prod_code' => $this->input->post('prod_code'),
        'prod_name' => $this->input->post('prod_name'),
        'prod_shortname' => $this->input->post('prod_shortname'),
        'profit_cost_id' => $this->input->post('profit_cost_id'),
        'dept_id' => $this->input->post('dept_id'

            )
        );
    $insert = $this->products->save($data);
    echo json_encode(array("status" => TRUE));
}

public function prod_delete($prod_id)
{
    $this->products->delete_by_id($prod_id);
    echo json_encode(array("status" => TRUE));
}

public function prod_edit($prod_id)
{
    $data = $this->products->get_by_id($prod_id);
    echo json_encode($data);
}

public function prod_update()
{
        // $this->_validate();
    $data = array(
     'prod_seq' => $this->input->post('prod_seq'),
     'prod_code' => $this->input->post('prod_code'),
     'prod_name' => $this->input->post('prod_name'),
     'prod_shortname' => $this->input->post('prod_shortname'),
     'profit_cost_id' => $this->input->post('prod_cost_id'),
     'dept_id' => $this->input->post('dept_id')
     );
    $this->products->update(array('prod_id' => $this->input->post('prod_id')), $data);
    echo json_encode(array("status" => TRUE));
}
    // END of Products CRUD 

    // Trade Discount CRUD
public function td_list()
{

    $list = $this->tdm->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $tdList) {
        $no++;
        $row = array();
        $row[] = '<button class="btn btn-sm btn-primary btn-flat" data-hint="Edit" href="javascript:void()" title="Edit" onclick="edit_record('."'".$tdList->trade_disc_id."'".')"><i class="fa fa-pencil"></i></button>
        <button class="btn btn-sm btn-danger btn-flat" data-hint="Delete" href="javascript:void()" title="Delete" onclick="delete_record('."'".$tdList->trade_disc_id."'".')"><i class="glyphicon glyphicon-trash"></i></button>';
        $row[] = $tdList->trade_disc_code;
        $row[] = $tdList->trade_disc_seq;
        $row[] = $tdList->trade_disc_name;
        $row[] = $tdList->trade_disc_shortname;
        $row[] = $tdList->trade_disc_rate;
        $data[] = $row;
    }

    $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->tdm->count_all(),
        "recordsFiltered" => $this->tdm->count_filtered(),
        "data" => $data,
        );
        //output to json format
    echo json_encode($output);
}

public function td_add()
{
        // $this->_validate();
    $data = array(
        'trade_disc_seq' => $this->input->post('trade_disc_seq'),
        'trade_disc_code' => $this->input->post('trade_disc_code'),
        'trade_disc_name' => $this->input->post('trade_disc_name'),
        'trade_disc_shortname' => $this->input->post('trade_disc_shortname'),
        'trade_disc_rate' => $this->input->post('trade_disc_rate')
        );
    $insert = $this->tdm->save($data);
    echo json_encode(array("status" => TRUE));
}

public function td_delete($trade_disc_id)
{
    $this->tdm->delete_by_id($trade_disc_id);
    echo json_encode(array("status" => TRUE));
}

public function td_edit($trade_disc_id)
{
    $data = $this->tdm->get_by_id($trade_disc_id);
    echo json_encode($data);
}

public function td_update()
{
        // $this->_validate();
    $data = array(
     'trade_disc_seq' => $this->input->post('trade_disc_seq'),
     'trade_disc_code' => $this->input->post('trade_disc_code'),
     'trade_disc_name' => $this->input->post('trade_disc_name'),
     'trade_disc_shortname' => $this->input->post('trade_disc_shortname'),
     'trade_disc_rate' => $this->input->post('trade_disc_rate')
     );
    $this->tdm->update(array('trade_disc_id' => $this->input->post('trade_disc_id')), $data);
    echo json_encode(array("status" => TRUE));
}
    // END of Services CRUD 

    // Services CRUD
public function serv_list()
{

    $list = $this->services->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $servList) {
        $no++;
        $row = array();
        $row[] = '<button class="btn btn-sm btn-primary btn-flat" data-hint="Edit" href="javascript:void()" title="Edit" onclick="edit_record('."'".$servList->serv_id."'".')"><i class="fa fa-pencil"></i></button>
        <button class="btn btn-sm btn-danger btn-flat" data-hint="Delete" href="javascript:void()" title="Delete" onclick="delete_record('."'".$servList->serv_id."'".')"><i class="glyphicon glyphicon-trash"></i></button>';
        $row[] = $servList->serv_code;
        $row[] = $servList->serv_seq;
        $row[] = $servList->serv_name;
        $row[] = $servList->serv_shortname;
        $row[] = $servList->name;
        $row[] = $servList->dept_name;
        $data[] = $row;
    }

    $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->services->count_all(),
        "recordsFiltered" => $this->services->count_filtered(),
        "data" => $data,
        );
        //output to json format
    echo json_encode($output);
}

public function serv_add()
{
        // $this->_validate();
    $data = array(
        'serv_seq' => $this->input->post('serv_seq'),
        'serv_code' => $this->input->post('serv_code'),
        'serv_name' => $this->input->post('serv_name'),
        'serv_shortname' => $this->input->post('serv_shortname'),
        'profit_cost_id' => $this->input->post('profit_cost_id'),
        'dept_id' => $this->input->post('dept_id'

            )
        );
    $insert = $this->services->save($data);
    echo json_encode(array("status" => TRUE));
}

public function serv_delete($serv_id)
{
    $this->services->delete_by_id($serv_id);
    echo json_encode(array("status" => TRUE));
}

public function serv_edit($serv_id)
{
    $data = $this->services->get_by_id($serv_id);
    echo json_encode($data);
}

public function serv_update()
{
        // $this->_validate();
    $data = array(
     'serv_seq' => $this->input->post('serv_seq'),
     'serv_code' => $this->input->post('serv_code'),
     'serv_name' => $this->input->post('serv_name'),
     'serv_shortname' => $this->input->post('serv_shortname'),
     'profit_cost_id' => $this->input->post('profit_cost_id'),
     'dept_id' => $this->input->post('dept_id')
     );
    $this->services->update(array('serv_id' => $this->input->post('serv_id')), $data);
    echo json_encode(array("status" => TRUE));
}
    // END of Services CRUD 
    // COA CRUD
public function coa_list()
{

    $list = $this->coa->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $coaList) {
        $no++;
        $row = array();
        /*$row[] = '<button class="btn btn-sm btn-primary btn-flat" data-hint="Edit" href="javascript:void()" title="Edit" onclick="edit_record('."'".$coaList->acc_id."'".')"><i class="fa fa-pencil"></i></button>
        <button class="btn btn-sm btn-danger btn-flat" data-hint="Delete" href="javascript:void()" title="Delete" onclick="delete_record('."'".$coaList->acc_id."'".')"><i class="glyphicon glyphicon-trash"></i></button>';*/
        $row[] = $coaList->account_code;
        $row[] = $coaList->account_name;
        $row[] = $coaList->level1_code;
        $row[] = $coaList->level1_name;
        $row[] = $coaList->level2_code;
        $row[] = $coaList->level2_name;
        $row[] = $coaList->level3_code;
        $row[] = $coaList->level3_name;
        $row[] = $coaList->bir_code;
        $row[] = $coaList->bir_acc_name;
		$row[] = $coaList->mydate;
		$row[] = $coaList->debit;
		$row[] = $coaList->credit;
        $data[] = $row;
    }

    $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->coa->count_all(),
        "recordsFiltered" => $this->coa->count_filtered(),
        "data" => $data,
        );
        //output to json format
    echo json_encode($output);
}

public function coa_add()
{
        // $this->_validate();
    $data = array(
        // 'account_code' => $this->input->post('account_code'),
        // 'account_name' => $this->input->post('account_name'),
        // 'level1_code' => $this->input->post('level1_code'),
        // 'level1_name' => $this->input->post('level1_name'),
        // 'level2_code' => $this->input->post('level2_code'),
        // 'level2_name' => $this->input->post('level2_name'),
        // 'level3_code' => $this->input->post('level3_code'),
        // 'level3_name' => $this->input->post('level3_name'),
        // 'bir_code' => $this->input->post('bir_code'),
        // 'bir_acc_name' => $this->input->post('bir_acc_name')
        'acc_name_id' => $this->input->post('account_name_id'),
        'level1_code_id' => $this->input->post('level1_code_id'),
        'level2_code_id' => $this->input->post('level2_code_id'),
        'level3_code_id' => $this->input->post('level3_code_id'),
        'bir_id' => $this->input->post('bir_id')
        );
    $insert = $this->coa->save($data);
    echo json_encode(array("status" => TRUE));
}

public function coa_delete($acc_id)
{
    $this->coa->delete_by_id($acc_id);
    echo json_encode(array("status" => TRUE));
}

public function coa_edit($acc_id)
{
    $data = $this->coa->get_by_id($acc_id);
    echo json_encode($data);
}

public function coa_update()
{
        // $this->_validate();
    $data = array(
     // 'account_code' => $this->input->post('account_code'),
     //    'account_name' => $this->input->post('account_name'),
     //    'level1_code' => $this->input->post('level1_code'),
     //    'level1_name' => $this->input->post('level1_name'),
     //    'level2_code' => $this->input->post('level2_code'),
     //    'level2_name' => $this->input->post('level2_name'),
     //    'level3_code' => $this->input->post('level3_code'),
     //    'level3_name' => $this->input->post('level3_name'),
     //    'bir_code' => $this->input->post('bir_code'),
     //    'bir_acc_name' => $this->input->post('bir_acc_name')
      'acc_name_id' => $this->input->post('account_name_id'),
        'level1_code_id' => $this->input->post('level1_code_id'),
        'level2_code_id' => $this->input->post('level2_code_id'),
        'level3_code_id' => $this->input->post('level3_code_id'),
        'bir_id' => $this->input->post('bir_id')
     );
    $this->coa->update(array('acc_id' => $this->input->post('acc_id')), $data);
    echo json_encode(array("status" => TRUE));
}
    // END of COA CRUD 
}