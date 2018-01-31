<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Ci_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dropdown_model','menu_model',TRUE);
    }
 
 
    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
        $data['dropdown']=$this->menu_model->dropdown_menu();
        $data['dropdown_item']=$this->menu_model->dropdown_menu_item();
        $this->load->view("home",$data);
    }
}