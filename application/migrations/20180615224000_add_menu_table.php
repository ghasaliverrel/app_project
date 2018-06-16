<?php

/*
Add Menu Table 20180615224000
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_menu_table extends CI_Migration{
	public function up(){
		$this->dbforge->add_field(array(
			'id_menu'=>array(
				'type'=>'INT',
				'constraint'=>5,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE
			),
			'partner_id'=>array(
				'type'=>'VARCHAR',
				'constraint'=>15
			),
			'name_menu'=>array(
				'type'=>'VARCHAR',
				'constraint'=>200
			),
			'price_menu'=>array(
				'type'=>'INT',
				'constraint'=>7
			),
			'position_menu'=>array(
				'type'=>'INT',
				'constraint'=>2,
				'unsigned'=>TRUE
			),
			'created TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
		));
		$this->dbforge->add_key('id_menu', TRUE);
		$this->dbforge->create_table('partner_menu',TRUE);

 		$queryInsertMenu="INSERT INTO `partner_menu` (`partner_id`,`name_menu`,`price_menu`,`position_menu`) VALUES 
 		('BE01','Traditional Caesar Salad','110000','1'),
 		('BE01','Vegetable Samosa','80000','2'),
 		('BE01','Lemon Pepper Marinated Grilled Chicken Escalopes','210000','1'),
 		('BE01','Grilled Lamb Cutlets with Germolata','310000','2'),
 		('BE01','Fried Banana','60000','1'),
 		('BE01','Ice Cream','40000','2'),
 		('BE02','Tomato Extract','120000','1'),
 		('BE02','Tom Yum Gung','120000','2'),
 		('BE02','American Breakfast','150000','1'),
 		('BE02','Thamrin Egg Frittata','120000','2'),
 		('BE02','Picnic On The Grass','70000','1'),
 		('BE02','Es Campur','65000','2'),
 		('BQ01','Standard Buffet','228000','1'),
 		('BQ01','Standard Buffet','228000','2'),
 		('BQ01','Assorted Kimuchi','36000','1'),
 		('BQ01','Standard Namuru','36000','2'),
 		('BQ01','Coca Cola','18000','1'),
 		('BQ01','Sprite','18000','2'),
 		('BQ02','Special Wagyu Buffet Package','518000','1'),
 		('BQ02','Kintan Buffet & Regular Buffet Package','486000','2'),
 		('SE01','Sup Asparagus Kepiting','25000','1'),
 		('SE01','Sup Jagung Kepiting','25000','2'),
 		('SE01','Bawal Jepang /100gr','25500','1'),
 		('SE01','Kerapu Bulan /100gr','29500','2'),
 		('SE01','Apple Cider Juice','18000','1'),
 		('SE01','Star Fruit Juice','18000','2'),
 		('SE02','Fish n\' Chips','29000','1'),
 		('SE02','Fish n\' Chips with Marinara Sauce','32000','2'),
 		('SE02','Guava Juice','17000','1'),
 		('SE02','Soursop Juice','17000','2'),
 		('SF01','Indomie Kuah Special Wakaka Double','27000','1'),
 		('SF01','Indomie Goreng Sate Maranggi Double','30000','2'),
 		('SF01','Mushroom Grilled Cheese','35000','1'),
 		('SF01','Tuna Grilled Cheese','35000','2'),
 		('SF01','Italian Pink Cream Soda','20000','1'),
 		('SF01','Markisa Slush','20000','2'),
 		('SF02','Nasi Goreng Kambing','40000','1'),
 		('SF02','Nasi Goreng Ayam','40000','2'),
 		('SN01','Zesty Chipotle','58000','1'),
 		('SN01','Earthy Mushroom Soup','58000','2'),
 		('SN01','Oh My Tortellini','98000','1'),
 		('SN01','Seafood Cartoccio','98000','2'),
 		('SN01','Kalamansi Chilled','38000','1'),
 		('SN01','Strawberry Chilled','38000','2'),
 		('SN02','Green Peas Soup','51000','1'),
 		('SN02','Grilled Baby Potato','51500','2'),
 		('SN02','Beef Bacon & Egg','63000','1'),
 		('SN02','BBQ Chicken','55500','2'),
 		('SN02','Green Mojito','48500','1'),
 		('SN02','Mandarin Mojito','48500','2'),
 		('RS01','Bubur Ayam HI','100000','1'),
 		('RS01','Nasi Goreng Gila','130000','2'),
 		('RS01','Vanilla Pannacota','75000','1'),
 		('RS01','Indonesia Vanilla Cheese Cake','80000','2'),
 		('RS02','Tahu Telor Trunojoyo','75000','1'),
 		('RS02','Jagung Melintir','65000','2'),
 		('RS02','Oxtail Lembut Cabe Hijau','159000','1'),
 		('RS02','Rendang Mahadewi','139000','2'),
 		('RS02','Espresso','35000','1'),
 		('RS02','Good Night Tea','40000','2');";

       	$query = 'ALTER TABLE `partner_menu` ADD FOREIGN KEY (`partner_id`) REFERENCES `partner_tenant`(`id_partner`) ON DELETE RESTRICT ON UPDATE RESTRICT, ADD FOREIGN KEY (`position_menu`) REFERENCES `partner_position`(`id_position`) ON DELETE RESTRICT ON UPDATE RESTRICT;';

 		$this->db->trans_start();
 		$this->db->query($query);
       	$this->db->query($queryInsertMenu);
       	$this->db->trans_complete();
	}

	public function down(){
		// $this->dbforge->drop_table('partner_menu',TRUE);
	}
}