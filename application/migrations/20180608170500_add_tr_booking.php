<?php

/*
Add User Table 20180608151200
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user_table extends CI_Migration{
	public function up(){
		$this->dbforge->add_field(array(
			'id_booking'=>array(
				'type'=>'VARCHAR',
				'constraint'=>20
			),
			'role_id'=>array(
				'type'=>'TINYINT',
				'constraint'=>2,
				'unsigned'=>TRUE
			),
			'name'=>array(
				'type'=>'VARCHAR',
				'constraint'=>100
			),
			'address'=>array(
				'type'=>'TEXT',
				'null'=>TRUE
			),
			'phone'=>array(
				'type'=>'VARCHAR',
				'constraint'=>15
			),
			'email'=>array(
				'type'=>'VARCHAR',
				'constraint'=>20
			),
			'username'=>array(
				'type'=>'VARCHAR',
				'constraint'=>15
			),
			'password'=>array(
				'type'=>'VARCHAR',
				'constraint'=>7
			),
			'created TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
		));
		$this->dbforge->add_key('id_user', TRUE);
		$this->dbforge->create_table('user',TRUE);

		$queryInsertUser='INSERT INTO `user` (`id_user`,`name`,`role_id`, `address`, `phone`,`email`,`username`,`password`) VALUES
			("U001","Hartanti Shinta Susanto","1","Jl Kyai Caringin 14,Cideng", "02170079978", "h.shinta@gmail.com","h.shinta","user01"),
			("U002","Indah Sari Gunawan","1","Jl Patra 15, Dki Jakarta", "0215655210", "i.sari@gmail.com","i.sari","user02"),
			("U003","Ary Tri Gunawan", "1", "Jl Letjen South Parman", "075152409","a.tri@gmail.com","a.tri","user03"),
			("U004","Verrel Aprilianto", "2", "Taman Ratu Indah A3/19", "087886478160","vghasali@gmail.com","ghasaliverrel","saya03041997"),
			("U005","Admin", "2", "Jakarta", "123","admin@admin.com","admin","admin");';
		$queryAlter="ALTER TABLE `user` ADD FOREIGN KEY (`role_id`) REFERENCES `user_role`(`id_role`) ON DELETE RESTRICT ON UPDATE RESTRICT;";
		$this->db->trans_start();
		$this->db->query($queryAlter);
		$this->db->query($queryInsertUser);
		$this->db->trans_complete();
	}

	public function down(){
		$this->dbforge->drop_table('user',TRUE);
		$this->dbforge->drop_table('user_role',TRUE);
	}
}