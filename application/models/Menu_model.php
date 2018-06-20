<?php
class Menu_model extends CI_Model{
	public function get_menu($where=array()){
        if(!empty($where)) $this->db->where($where);
		$this->db->select('*');
		$this->db->from('partner_menu');
		$query=$this->db->get();
		return $query->result();
	}

	public function get_tenant_names() { 
        $result=$this->db->select('id_partner, name_partner')->get('partner_tenant')->result_array();
 
        $tenant_name = array(); 
        foreach($result as $r) { 
            $tenant_name[$r['id_partner']] = $r['name_partner']; 
        } 
        $tenant_name[''] = 'Select partner name..'; 
        return $tenant_name; 
    }

	public function get_position_names() { 
        $result=$this->db->select('id_position, position_name')->get('partner_position')->result_array();
 
        $position_name = array(); 
        foreach($result as $r) { 
            $position_name[$r['id_position']] = $r['position_name']; 
        } 
        $position_name[''] = 'Select menu position..'; 
        return $position_name; 
    }

	public function insert_data($data){
		$this->db->insert("partner_menu",$data);
	}

	public function update_data($data,$id=NULL){
		$this->db->where("id_menu",$id);
		$this->db->update("partner_menu",$data);
	}

	public function delete_data($id=NULL){
		$this->db->where("id_menu",$id);
		$this->db->delete("partner_menu");
	}
}