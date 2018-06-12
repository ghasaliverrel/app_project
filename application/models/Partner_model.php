<?php
class Partner_model extends CI_Model{
	public function get_category($where=array()){
        if(!empty($where)) $this->db->where($where);
		$this->db->select('*');
		$this->db->from('partner_category');
		$query=$this->db->get();
		return $query->result();
	}	
	public function get_tenant($where=array()){
        if(!empty($where)) $this->db->where($where);
		$this->db->select('*');
		$this->db->from('partner_tenant');
		$query=$this->db->get();
		return $query->result();
	}

	public function insert_data($data){
		$this->db->insert("partner_tenant",$data);
	}

	public function update_data($data,$id=NULL){
		$this->db->where("id_partner",$id);
		$this->db->update("partner_tenant",$data);
	}

	public function delete_data($id){
		$this->db->where("id_partner",$id);
		$this->db->delete("partner_tenant");
	}

	public function get_category_names() { 
        $result=$this->db->select('id_category, name')->get('partner_category')->result_array();
 
        $category_name = array(); 
        foreach($result as $r) { 
            $category_name[$r['id_category']] = $r['name']; 
        } 
        $category_name[''] = 'Select category name..'; 
        return $category_name; 
    }

    public function check_exists_data($id=NULL){
        $this->db->where('category_id',$id);
        $query=$this->db->get('partner_tenant');
        $result=$query->result();
        return $result;
    }
}