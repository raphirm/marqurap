<?php

class m131203_170842_create_project_table extends CDbMigration
{
	public function up()
	{
		
	s->createTable('tbl_project', array(
    'id' => 'pk',
     'name' => 'string NOT NULL',
    'description' => 'text NOT NULL',
    'create_time' => 'datetime DEFAULT NULL',
    'create_user_id' => 'int(11) DEFAULT NULL',
    'update_time' => 'datetime DEFAULT NULL',
    'update_user_id' => 'int(11) DEFAULT NULL',
	  ), 'ENGINE=InnoDB');
}

	public function down()
	{
		echo "m131203_170842_create_project_table does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}