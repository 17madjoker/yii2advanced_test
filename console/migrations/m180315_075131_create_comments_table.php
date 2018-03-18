<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m180315_075131_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'email' => $this->string()->defaultValue(null),
            'comment' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comments');
    }
}
