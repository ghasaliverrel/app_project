<?php

/*
Add Transaction Booking Table 20180608170500
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_tr_booking_table extends CI_Migration{
	public function up(){
		$this->dbforge->add_field(array(
			'id_booking'=>array(
				'type'=>'INT',
				'constraint'=>5,
				'unsigned'=>TRUE
			),
			'user_id'=>array(
				'type'=>'VARCHAR',
				'constraint'=>5
			),
			'partner_id'=>array(
				'type'=>'VARCHAR',
				'constraint'=>15
			),
			'booking_time'=>array(
				'type'=>'TIMESTAMP'
			),
			'booking_count'=>array(
				'type'=>'INT',
				'constraint'=>4
			),
			'created TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
		));
		$this->dbforge->add_key('id_booking', TRUE);
		$this->dbforge->create_table('tr_booking',TRUE);

		$queryAlter="ALTER TABLE `tr_booking` ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT, ADD FOREIGN KEY (`partner_id`) REFERENCES `partner_tenant`(`id_partner`) ON DELETE RESTRICT ON UPDATE RESTRICT;";
		$this->db->query($queryAlter);
	}

	public function down(){
		$this->dbforge->drop_table('tr_booking',TRUE);
	}
}