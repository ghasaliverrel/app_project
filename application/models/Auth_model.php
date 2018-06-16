<?php
class Auth_model extends CI_Model{
	public function validate($username=NULL,$password=NULL){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('user');
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                'id_user' => $row->id_user,
                'name' => $row->name,
                'email' => $row->email,
                'username' => $row->username
            );
            $this->session->set_userdata($data);
            return 1;
        }
        // If the previous process did not validate
        // then return false.
        return 0;
	}

    public function register($data){
        $this->db->insert("user",$data);
    }

    public function getMaxUserId(){
        $this->db->select('MAX(CAST(RIGHT(id_user,1) AS INT))+1 max_id');
        $this->db->from('user');
        $query=$this->db->get();
        return $query->result_array();
    }

    public function checkUserExist(){

    }

    public function checkPasswordExist(){

    }
}