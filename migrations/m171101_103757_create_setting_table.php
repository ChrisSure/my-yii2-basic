<?php

use yii\db\Migration;

/**
 * Handles the creation of table `setting`.
 */
class m171101_103757_create_setting_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('setting', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'keywords' => $this->text(),
            'address' => $this->string(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('setting');
    }
}
