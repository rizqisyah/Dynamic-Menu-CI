<?php
require APPPATH . '/libraries/BaseController.php';
class Header extends BaseController{
    protected $_Ci;
    
    function __construct() {
        parent::__construct();
        $this->_CI =&get_instance();        
        $this->load->model('header_model','menu_model',TRUE);
        $this->isLoggedIn();   
    }
    
    function index() {   
        $this->global['pageTitle'] = 'NavBar'; 
        $this->load->model('header_model');
        $data['record']=$this->menu_model->header_menu();
         $this->loadviews('menu/header',$this->global,$data);

    }
    function add() {
        $this->global['pageTitle'] = 'Add';
        if(isset($_POST['submit'])) {
            $data=   array(  'm_item_name' =>  $_POST['nama'],
                             'm_item_url'  =>  $_POST['link'],
                             'm_id'=>$_POST['m_id'],

                              );
            $this->db->insert('menu_item',$data);
            redirect('FrontEnd/tambah');
        }
        else {
            $data['record']=$this->db->get_where('menu')->result();            
            $this->loadviews('FrontEnd/tambah',$this->global,$data);
        }
    }
    function delete($id){
        $this->db->where('m_item_id',$id);
        $this->db->delete('menu_item');
        redirect('header');
    }
    
}