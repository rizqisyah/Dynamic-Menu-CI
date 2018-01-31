<?php

class header_model extends CI_Model{

	public function __construct(){

		parent::__construct();
	}
	public function header_menu(){

		$this->db->select('*,menu.m_id as menu_id,menu_item.m_id as menu_item_id');
		$this->db->from('menu');
		$this->db->join('menu_item','menu.m_id = menu_item.m_id');
		$query= $this->db->get();
		return $query->result();
	}
	
}