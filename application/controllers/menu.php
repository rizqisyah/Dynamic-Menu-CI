<?php
require APPPATH . '/libraries/BaseController.php';
class Menu extends BaseController{
    protected $_Ci;
    
    function __construct() {
        parent::__construct();
        $this->_CI =&get_instance();        
        $this->load->model('user_model');
        $this->isLoggedIn();   
    }
    
    function index() {   
        $this->global['pageTitle'] = 'NavBar'; 
        $data['record']= $this->db->get('tb_menu')->result();
        $this->loadviews('menu/view',$this->global,$data);

    }
    
    function add() {
        $this->global['pageTitle'] = 'Add';
        if(isset($_POST['submit'])) {
            $data=   array(  'nama_menu' =>  $_POST['nama'],
                                'link'      =>  $_POST['link'],
                                'icon'      =>  $_POST['icon'],
                                'kat_menu'  =>  $_POST['kat_menu']);
            $this->db->insert('tb_menu',$data);
            redirect('Menu/tambah');
        }
        else {
            $data['record']=$this->db->get_where('tb_menu', array('kat_menu' =>0))->result();            
            $this->loadviews('Menu/tambah',$this->global,$data);
        }
    }
    
    function edit()
    {
        $this->global['pageTitle'] = 'Add';
        if(isset($_POST['submit']))
        {
            $data   =   array(  'nama_menu' =>  $_POST['nama'],
                                'link'      =>  $_POST['link'],
                                'icon'      =>  $_POST['icon'],
                                'kat_menu'  =>  $_POST['kat_menu']);
            
            $this->db->where('id_menu',$_POST['id']);
            $this->db->update('tb_menu',$data);
            redirect('menu',$data);
        }
        else {
            $id= $this->uri->segment(3);
            $data['record']=  $this->db->get_where('tb_menu',array('id_menu'=> $id))->row_array();
            $data['katmenu']=$this->db->get_where('tb_menu', array('kat_menu' =>0))->result(); 
            $this->loadviews('menu/edit',$this->global,$data);
        }
    }
    
    
    function delete($id){
		$this->db->where('id_menu',$id);
		$this->db->delete('tb_menu');
       	redirect('menu');
    }
}