<?php
class User_model extends CI_Model{
	public function get_user($where=array()){
        if(!empty($where)) $this->db->where($where);
		$this->db->select('*');
		$this->db->from('user');
		$query=$this->db->get();
		return $query->result();
	}

	public function insert_data($data){
		$this->db->insert("user",$data);
	}

	public function update_data($data,$id=NULL){
		$this->db->where("id_user",$id);
		$this->db->update("user",$data);
	}

	public function get_roles() { 
        $result=$this->db->select('id_role, role_name')->get('user_role')->result_array();
 
        $role_name = array(); 
        foreach($result as $r) {
            $role_name[$r['id_role']] = $r['role_name']; 
        } 
        $role_name[''] = 'Select role name..'; 
        return $role_name; 
    }
}