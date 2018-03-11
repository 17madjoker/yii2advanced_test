<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m180311_174956_create_news_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'content' => $this->text(),
            'status' => $this->integer(3),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
