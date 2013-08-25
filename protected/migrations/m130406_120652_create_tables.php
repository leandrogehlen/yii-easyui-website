<?php


class m130406_120652_create_tables extends CDbMigration
{
	/*public function up()
	{
													
	}

	public function down()
	{
				
	}*/

	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('product', array(
			'product_id' => 'INTEGER NOT NULL AUTO_INCREMENT',
			'name' => 'VARCHAR(255)',
			'price' => 'NUMERIC(15,2) NOT NULL',			
			'status' => 'CHAR(1)',
			'description' => 'TEXT',
			'PRIMARY KEY (product_id)'
		));
		
		for ($i = 1; $i <= 200; $i++)
		{ 		 
			$this->insert('product', array("name"=> "Product {$i}", 'price' => 10+$i, 'status' => 'P','description' => "Description {$i}"));
		}
	}

	public function safeDown()
	{
		$this->dropTable('product');
	}
	
}