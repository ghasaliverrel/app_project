<?php
class Partner_model extends CI_Model{
	public function get_category(){
        $this->db->order_by('name asc');
		$query=$this->db->get('partner_category');
		return $query->result();
	}

	public function get_tenant($where=array()){
        if(!empty($where)) $this->db->where($where);
		$this->db->select('*');
		$this->db->from('partner_tenant');
		$query=$this->db->get();
		return $query->result();
	}
}