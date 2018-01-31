<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kp extends Ci_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }
 
 
    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
        
        $this->load->view("kp/index");
    }
}