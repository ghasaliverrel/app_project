<?php

/*
Add Categories Table 20180607211200
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_partner_category_table extends CI_Migration{
	public function up(){
		$this->dbforge->add_field(array(
			'id_category'=>array(
				'type'=>'INT',
				'constraint'=>5,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE
			),
			'name'=>array(
				'type'=>'VARCHAR',
				'constraint'=>50
			),
			'picture'=>array(
				'type'=>'VARCHAR',
				'constraint'=>100
			),
			'description'=>array(
				'type'=>'TEXT'
			),
			'created TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
		));
		$this->dbforge->add_key('id_category', TRUE);
		$this->dbforge->create_table('partner_category',TRUE);

 		$queryInsertCategory="INSERT INTO `partner_category` (`name`,`description`,`picture`) VALUES 
 		('Street Food','Street food is ready-to-eat food or drink sold by a hawker, or vendor, in a street or other public place, such as at a market or fair. It is often sold from a portable food booth, food cart, or food truck and meant for immediate consumption','http://127.0.0.1/app_project/assets/img/product-streetfood.jpg'),
 		('Restaurant','A restaurant or an eatery, is a business which prepares and serves food and drinks to customers in exchange for money. Meals are generally served and eaten on the premises, but many restaurants also offer take-out and food delivery services','http://127.0.0.1/app_project/assets/img/product-restaurant.jpg'),
 		('Breakfast','Breakfast is the first meal of a day, most often eaten in the early morning before undertaking the day\'s work.','http://127.0.0.1/app_project/assets/img/product-breakfast.jpg'),
 		('Grilled Food','Barbecue or barbeque (informally BBQ or barbie) is both a cooking method and an apparatus/machine. Barbecuing is done slowly over low, indirect heat and the food is flavored by the smoking process','http://127.0.0.1/app_project/assets/img/product-bbq.jpg'),
 		('Fresh Seafood','Seafood is any form of sea life regarded as food by humans. Seafood prominently includes fish and shellfish. Shellfish include various species of molluscs, crustaceans, and echinoderms','http://127.0.0.1/app_project/assets/img/product-seafood.jpg'),
 		('Snack','A snack is a portion of food, smaller than a regular meal, generally eaten between meals. Snacks come in a variety of forms including packaged snack foods and other processed foods','http://127.0.0.1/app_project/assets/img/product-snack.jpg');";

       	$this->db->query($queryInsertCategory);

		$this->dbforge->add_field(array(
			'id_partner'=>array(
				'type'=>'VARCHAR',
				'constraint'=>15
			),
			'category_id'=>array(
				'type'=>'INT',
				'constraint'=>5,
				'unsigned'=>TRUE
			),
			'name_partner'=>array(
				'type'=>'VARCHAR',
				'constraint'=>100
			),
			'address_partner'=>array(
				'type'=>'TEXT'
			),
			'description'=>array(
				'type'=>'TEXT'
			),
			'phone_partner'=>array(
				'type'=>'VARCHAR',
				'constraint'=>15
			),
			'picture'=>array(
				'type'=>'VARCHAR',
				'constraint'=>100
			),
			'created TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
		));
		$this->dbforge->add_key('id_partner', TRUE);
		$this->dbforge->create_table('partner_tenant',TRUE); 

		$queryInsertTenant="INSERT INTO `partner_tenant` (`id_partner`,`category_id`,`name_partner`,`address_partner`,`description`,`phone_partner`,`picture`) VALUES 
 		('BE01','3','La Brasserie Restaurant','Jl. Jendral Sudirman Kav 18-20, Le Meridien, Jakarta','Perfect place for breakfast and enjoy the luxury','0212513131','http://127.0.0.1/app_project/assets/img/be01.jpg'),
 		('BE02','3','Sana Sini Restaurant','Jl. MH Thamrin no. 59, Pullman Hotels and Resorts, Jakarta','Drawing inspiration from the Indonesian phrase \'Sana Sini\', which means \'here and there\', Pullman Jakarta Indonesia offers you an unrivaled culinary excursion into the different corners of Europe and Asia through 4 individually designed spacious counters','02131921111','http://127.0.0.1/app_project/assets/img/be02.jpg'),
 		('SF01','1','Warung Wakaka','Jl. Muara Karang, Blok P2 Selatan No. 78-80, Muara Karang, Jakarta 14450','Enjoy bread, instant noodle, and another \'kekinian\' foods','02166602919','http://127.0.0.1/app_project/assets/img/sf01.jpg'),
 		('SF02','1','Nasi Goreng Kambing Kebon Sirih','Pasaraya Grande, Lantai Lower Ground, Dapuraya, Jl. Iskandarsyah II, Melawai, Jakarta','The best street food fried rice and lamb in town!','085945040267','http://127.0.0.1/app_project/assets/img/sf02.jpg'),
 		('RS01','2','Signatures Restaurant - Hotel Indonesia ','Hotel Indonesia Kempinski, Jl. MH. Thamrin, Thamrin, Jakarta','Enjoy weekend brunch by Signatures Restaurant at Hotel Indonesia Kempinski. Package includes non alcoholic beverages.','02121889061','http://127.0.0.1/app_project/assets/img/rs01.jpg'),
 		('RS02','2','Eastern Opulence','Jl. Cipaku 1 No. 85, Dharmawangsa, Jakarta 12170','Bring your loved one to enjoy one of the most luxury place to eat!','021 21889061','http://127.0.0.1/app_project/assets/img/rs02.jpg'),
 		('BQ01','4','Gyukaku Restaurant BBQ','Citywalk Sudirman, Lantai 1, Jl. KH Mas Mansyur, Sudirman, Jakarta','Eat until pass out! Don\'t sacrifice the freshness of the meat, we always serve the best!','02129704058','http://127.0.0.1/app_project/assets/img/bq01.jpg'),
 		('BQ02','4','Kintan Buffet','Gandaria City, Lantai Upper Ground, Jl. Sultan Iskandar Muda, Gandaria, Jakarta','Bring your loved one to enjoy one of the most luxury place to eat!','02122774785','http://127.0.0.1/app_project/assets/img/bq02.jpg'),
 		('SE01','5','Bandar Djakarta','Taman Impian Jaya Ancol, Jl. Lodan Timur 14430','Fish jump right into your table! That\'s the motto!','021 6455472','http://127.0.0.1/app_project/assets/img/se01.jpg'),
 		('SE02','5','Fish Streat','Jl. Tanjung Duren Utara III, Blok M Kav. 32, Tanjung Duren, Jakarta','Cheap and delicious usually do not come side by side. In here you can taste both of them!','0813 17275287','http://127.0.0.1/app_project/assets/img/se02.jpg'),
 		('SN01','6','Bakerzin','Plaza Senayan, Lantai 2, Jl. Asia Afrika, Senayan, Jakarta','Sweet your tooth here!','02157900408','http://127.0.0.1/app_project/assets/img/sn01.jpg'),
 		('SN02','6','Pancious','Senayan City, Lantai 5, Jl. Asia Afrika, Senayan, Jakarta','Cakes, cakes, cakes! This is for you who can\'t enough of cakes!','021 72781459','http://127.0.0.1/app_project/assets/img/sn02.jpg');";

 		$queryAlter="ALTER TABLE `partner_tenant` ADD FOREIGN KEY (`category_id`) REFERENCES `partner_category`(`id_category`) ON DELETE RESTRICT ON UPDATE RESTRICT;";

 		$this->db->trans_start();
 		$this->db->query($queryAlter);		
 		$this->db->query($queryInsertTenant);
 		$this->db->trans_complete();		
	}

	public function down(){
		// $this->dbforge->drop_table('product_type',TRUE);
		// $this->dbforge->drop_table('product_detail',TRUE);
	}
}