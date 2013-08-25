<?php

class m130407_173629_create_auth extends CDbMigration
{
	public function up()
	{
		$this->createTable('authitem', array(
				'name' => 'VARCHAR(255) not null',
				'type' => 'INTEGER not null',
				'description' => 'TEXT',
				'bizrule' => 'TEXT',
				'data' => 'TEXT',
				'PRIMARY KEY (name)'
		));
		
		$this->createTable('authitemchild', array(
				'parent' => 'VARCHAR(255) NOT NULL',
				'child' => 'VARCHAR(255) NOT NULL',
				'PRIMARY KEY (parent, child)'
		));
		
		//$this->addForeignKey('fk_authitemchild_parent', 'authitemchild', 'parent', 'authitem', 'name', 'CASCADE', 'CASCADE');
		//$this->addForeignKey('fk_authitemchild_child', 'authitemchild', 'child', 'authitem', 'name', 'CASCADE', 'CASCADE');
		
		$this->createTable('authassignment', array(
				'itemname' => 'VARCHAR(255) NOT NULL',
				'userid' => 'VARCHAR(255) NOT NULL',
				'bizrule' => 'TEXT',
				'data' => 'TEXT',
				'PRIMARY KEY (itemname, userid)'
		));
		
		//$this->addForeignKey('fk_authassignment_item', 'authitemchild', 'itemname', 'authitem', 'name', 'CASCADE', 'CASCADE');
		
		$this->createTable('user', array(
				'id' => 'INTEGER NOT NULL AUTO_INCREMENT',
				'name' => 'VARCHAR(255) NOT NULL',
				'email' => 'VARCHAR(255) NOT NULL',
				'login' => 'VARCHAR(255) NOT NULL',
				'password' => 'VARCHAR(255) NOT NULL',				
				'PRIMARY KEY (id)'
		));
	}

	public function down()
	{
		$this->dropTable('authitemchild');
		$this->dropTable('authassignment');
		$this->dropTable('authitem');
	}

}