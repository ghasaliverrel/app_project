<?php
class Category_model extends CI_Model{
	public function get_category($where=array()){
		if(!empty($where)) $this->db->where($where);
        $this->db->order_by('name asc');
		$query=$this->db->get('partner_category');
		return $query->result();
	}

	public function get_tenant($where=array()){
        if(!empty($where)) $this->db->where($where);
		$this->db->select('*');
		$this->db->from('tr_category_partner AS tr');
		$this->db->join('partner_tenant as pt','tr.partner_id=pt.id_partner');
		$this->db->join('partner_category as pc','tr.category_id=pc.id_category');
		$query=$this->db->get();
		return $query->result();
	}

	public function insert_data($data){
		$this->db->insert("partner_category",$data);
	}

	public function update_data($data,$id=NULL){
		$this->db->where("id_category",$id);
		$this->db->update("partner_category",$data);
	}

	public function delete_data($id){
		$this->db->where("id_category",$id);
		$this->db->delete("partner_category");
	}
}