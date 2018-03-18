<?php

use yii\db\Migration;

/**
 * Class m180318_093659_add_index_news_content
 */
class m180318_093659_add_index_news_content extends Migration
{

    public function safeUp()
    {
        $this->execute("ALTER TABLE news ADD FULLTEXT INDEX idx_content (content)");
    }

    public function safeDown()
    {
        $this->dropIndex('idx_content','news');
    }
}
