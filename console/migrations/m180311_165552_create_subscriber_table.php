<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subscriber`.
 */
class m180311_165552_create_subscriber_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('subscriber', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->unique(),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('subscriber');
    }
}
