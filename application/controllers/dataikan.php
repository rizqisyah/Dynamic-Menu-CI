<?php
require APPPATH . '/libraries/BaseController.php';
class dataikan extends BaseController{
    protected $_Ci;
    
    function __construct() {
        parent::__construct();
        $this->_CI =&get_instance();        
        $this->isLoggedIn(); 
        $this->load->model('ikan_model');
        // load Pagination library
        $this->load->library('pagination');
        $this->load->database(); 
        // load URL helper
        $this->load->helper('url');
    }
    
    function index() {   
        $this->global['pageTitle'] = 'Data Ikan'; 
        $data['record']= $this->db->get('dataikan')->result();
        $this->loadviews('data/dataikan',$this->global,$data);
        $config['base_url']=base_url()."data/dataikan";
        $config['total_rows']= $this->db->query("SELECT * FROM dataikan;")->num_rows();
        $config['per_page']=5;
        $config['num_links'] = 3;
        $config['uri_segment']=3;
        //Tambahan untuk styling
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $config['first_link']='< Pertama ';
        $config['last_link']='Terakhir > ';
        $config['next_link']='> ';
        $config['prev_link']='< ';
        $this->pagination->initialize($config);
 
        // konfigurasi model dan view untuk menampilkan data
        $this->load->model('ikan_model');
        $data['record']=$this->ikan_model->getAll($config);
        
    }
        
                            
    
    
   function dataListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('ikan_model');
        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->ikan_model->dataListingCount($searchText);

            $returns = $this->paginationCompress ( "dataListing/", $count, 5 );
            
            $data['userRecords'] = $this->ikan_model->dataListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'CodeInsect : User Listing';
            
            $this->loadViews("data/dataikan", $this->global, $data, NULL);
        }
    }
   
    
    
    function add() {
        $this->global['pageTitle'] = 'Add';
        if(isset($_POST['submit'])) {
            $data=   array(  'jenis_ikan' =>  $_POST['nama'],
                                'makanan' =>  $_POST['icon'],
                                'penangkaran'  =>  $_POST['link'],
                                );
            $this->db->insert('dataikan',$data);
            redirect('dataikan');
        }
        else {
            $data['record']=$this->db->get_where('dataikan')->result();            
            $this->loadviews('data/tambah',$this->global,$data);
        }
    }
    
    function edit()
    {
        $this->global['pageTitle'] = 'Edit';
        if(isset($_POST['submit']))
        {
            $data   =   array(  'jenis_ikan' =>  $_POST['nama'],
                                'makanan'      =>  $_POST['icon'],
                                'penangkaran'      =>  $_POST['link'],
                                );
            $this->db->where('id_ikan',$_POST['id']);
            $this->db->update('dataikan',$data);
            redirect('dataikan',$data);
        }
        else {
            $id= $this->uri->segment(3);
            $data['record']=  $this->db->get_where('dataikan',array('id_ikan'=> $id))->row_array();
            $this->loadviews('data/edit',$this->global,$data);
        }
    }
    
    
    function delete($id){
		$this->db->where('jenis_ikan',$id);
		$this->db->delete('dataikan');
       	redirect('dataikan');
    }
}