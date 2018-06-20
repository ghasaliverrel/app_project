<?php
class Booking_model extends CI_Model{
	public function get_booking($where=array()){
        if(!empty($where)) $this->db->where($where);
		$this->db->select('*');
		$this->db->from('tr_booking AS tr');
		$this->db->join('user AS ms','tr.user_id=ms.id_user');
		$this->db->join('partner_tenant AS pt','tr.partner_id=pt.id_partner');
		$this->db->order_by('id_booking','asc');
		$query=$this->db->get();
		return $query->result();
	}

	public function get_booking_menu($where=array()){
        if(!empty($where)) $this->db->where($where);
		$this->db->select('*');
		$this->db->from('tr_booking AS tr');
		$this->db->join('partner_tenant AS pt','tr.partner_id=pt.id_partner');
		$this->db->join('partner_menu AS pm','pt.id_partner=pm.partner_id');
		$this->db->order_by('id_booking','asc');
		$query=$this->db->get();
		return $query->result();
	}

	public function insert_data($data){
		$this->db->insert("tr_booking",$data);
	}

	public function update_data($data,$id=NULL){
		$this->db->where("id_booking",$id);
		$this->db->update("tr_booking",$data);
	}

	public function get_partner_names() { 
        $result=$this->db->select('id_partner, name_partner')->order_by('name_partner','asc')->get('partner_tenant')->result_array();
 
        $partner_name = array(); 
        foreach($result as $r) { 
            $partner_name[$r['id_partner']] = $r['name_partner']; 
        } 
        $partner_name[''] = 'Select partner name..'; 
        return $partner_name; 
    }

    public function get_user_names() { 
        $result=$this->db->where('role_id','1')->select('id_user, name')->order_by('name','asc')->get('user')->result_array();
 
        $user_name = array(); 
        foreach($result as $r) { 
            $user_name[$r['id_user']] = $r['name']; 
        } 
        $user_name[''] = 'Select user name..'; 
        return $user_name; 
    }

    public function delete_data($id){
		$this->db->where("id_booking",$id);
		$this->db->delete("tr_booking");
	}

	public function get_last_booking(){
		$this->db->select('id_booking');
		$this->db->from('tr_booking');
		$this->db->order_by('id_booking',"desc");
		$this->db->limit(1);
		$query=$this->db->get();
		return $query->result();
	}
}