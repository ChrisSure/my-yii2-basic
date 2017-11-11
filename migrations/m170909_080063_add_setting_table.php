<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pages`.
 */
class m170909_080063_add_setting_table extends Migration
{
	
	public function up()
    {
		$this->insert('{{%setting}}', array(
			'id' => 1,
			'title'=>'Site title',
			'description' =>'Site description',
			'keywords' => 'Site keywords',
			'address' => 'Site address',
			'phone' => '0970000000',
			'email' => 'admin@gmail.com',
			'created_at' => 1507802191,
			'updated_at' => 1507802191
		));
	}
	
	
	public function down()
    {
        
    }
	
}