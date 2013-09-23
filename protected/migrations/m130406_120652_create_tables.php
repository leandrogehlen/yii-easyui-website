<?php


class m130406_120652_create_tables extends CDbMigration
{
	
	public function safeUp()
	{
		$this->createTable('category', array(
			'id' => 'INTEGER NOT NULL AUTO_INCREMENT',
			'name' => 'VARCHAR(255)',			
			'PRIMARY KEY (id)'
		));
		
		for ($i = 1; $i <= 10; $i++)		
			$this->insert('category', array("name"=> "Category {$i}"));
		
		
		$this->createTable('product', array(
			'id' => 'INTEGER NOT NULL AUTO_INCREMENT',
			'name' => 'VARCHAR(255)',
			'price' => 'NUMERIC(15,2) NOT NULL',			
			'status' => 'CHAR(1)',
			'description' => 'TEXT',
			'category_id' => 'INTEGER',
			'PRIMARY KEY (id)'
		));
		
		for ($i = 1; $i <= 200; $i++)
		{ 	
			$category = $i % 10; 
			$this->insert('product',array(
				"name"=> "Product {$i}", 
				"price" => 10+$i, 
				"status" => "P", 
				"description" => "Description {$i}",
				"category_id" => $category == 0 ? 1 : $category 
			));
		}
	}

	public function safeDown()
	{
		$this->dropTable('category');
		$this->dropTable('product');
	}
	
}