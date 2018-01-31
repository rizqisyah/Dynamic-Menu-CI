<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class ikan_model extends CI_Model{

	public function __construct(){

		parent::__construct();
	}
  function getAll($config){  
        $hasilquery=$this->db->get('dataikan', $config['per_page'], $this->uri->segment(3));
        if ($hasilquery->num_rows() > 0) {
            foreach ($hasilquery->result() as $value) {
                $data[]=$value;
            }
            return $data;
        }      
    }
	
}