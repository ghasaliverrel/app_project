<?php

/*
Add Transaction Booking Table 20180608170500
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_tr_booking_table extends CI_Migration{
	public function up(){
		$this->dbforge->add_field(array(
			'id_position'=>array(
				'type'=>'INT',
				'constraint'=>2,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE
			),
			'position_name'=>array(
				'type'=>'VARCHAR',
				'constraint'=>30
			),
			'created TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
		));
		$this->dbforge->add_key('id_position', TRUE);
		$this->dbforge->create_table('partner_position',TRUE);

 		$queryInsertPos="INSERT INTO `partner_position` (`position_name`) VALUES 
 		('Left Menu'),
 		('Right Menu');";

 		$this->db->query($queryInsertPos);

		$this->dbforge->add_field(array(
			'id_booking'=>array(
				'type'=>'INT',
				'constraint'=>5,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE
			),
			'user_id'=>array(
				'type'=>'VARCHAR',
				'constraint'=>5
			),
			'partner_id'=>array(
				'type'=>'VARCHAR',
				'constraint'=>15
			),
			'booking_date'=>array(
				'type'=>'DATE'
			),
			'booking_time'=>array(
				'type'=>'TIME'
			),
			'booking_count'=>array(
				'type'=>'INT',
				'constraint'=>4
			),
			'booking_position_menu'=>array(
				'type'=>'INT',
				'constraint'=>2,
				'unsigned'=>TRUE,
				'null'=>TRUE
			),
			'created TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
		));
		$this->dbforge->add_key('id_booking', TRUE);
		$this->dbforge->create_table('tr_booking',TRUE);

		$queryAlter="ALTER TABLE `tr_booking` ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT, ADD FOREIGN KEY (`partner_id`) REFERENCES `partner_tenant`(`id_partner`) ON DELETE RESTRICT ON UPDATE RESTRICT, ADD FOREIGN KEY (`booking_position_menu`) REFERENCES `partner_position`(`id_position`) ON DELETE RESTRICT ON UPDATE RESTRICT;";
		$this->db->query($queryAlter);
	}

	public function down(){
		$this->dbforge->drop_table('tr_booking',TRUE);
	}
}