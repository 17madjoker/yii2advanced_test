<?php

use yii\db\Migration;

/**
 * Class m180316_085608_CUexample
 */
class m180316_085608_CUexample extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createCUGoods();
        $this->createCUCategory();
        $this->createCUProducer();
        $this->createCUGoodsToCategory();
        $this->createCUGoodsToProduces();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('CUGoods');
        $this->dropTable('CUCategory');
        $this->dropTable('CUProduces');
        $this->dropTable('CUGoodsToCategory');
        $this->dropTable('CUGoodsToProduces');
    }
    
    private function createCUGoods()
    {
        $this->createTable('CUGoods', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'price' => $this->integer(),
            'category_id' => $this->integer(),
            'producer_id' => $this->integer(),            
        ]);
        
        $this->insert('CUGoods', [
            'id' => 1,
            'name' => 'core i7 8700k',
            'price' => 40000,
            'category_id' => 1,
            'producer_id' => 2,
        ]);
        
        $this->insert('CUGoods', [
            'id' => 2,
            'name' => 'ryzen 1500x',
            'price' => 3000,
            'category_id' => 1,
            'producer_id' => 1,
        ]);
        
        $this->insert('CUGoods', [
            'id' => 3,
            'name' => 'GTX 1060',
            'price' => 25000,
            'category_id' => 2,
            'producer_id' => 3,
        ]);
        
        $this->insert('CUGoods', [
            'id' => 4,
            'name' => 'GTX 1080',
            'price' => 40000,
            'category_id' => 2,
            'producer_id' => 5,
        ]);
        
        $this->insert('CUGoods', [
            'id' => 5,
            'name' => 'chipset b420',
            'price' => 7000,
            'category_id' => 3,
            'producer_id' => 4,
        ]);
        
        $this->insert('CUGoods', [
            'id' => 6,
            'name' => 'chipset z220',
            'price' => 15000,
            'category_id' => 3,
            'producer_id' => 5,
        ]);
    }
    
    private function createCUCategory()
    {
        $this->createTable('CUCategory', [
            'id' => $this->primaryKey(),
            'category_name' => $this->string(),
        ]);
        
        $this->insert('CUCategory', [
            'id' => 1,
            'category_name' => 'Processors',
        ]);
        
        $this->insert('CUCategory', [
            'id' => 2,
            'category_name' => 'GPU',
        ]);
        
        $this->insert('CUCategory', [
            'id' => 3,
            'category_name' => 'MotherBoards',
        ]);
    }
    
    private function createCUProducer()
    {
        $this->createTable('CUProduces', [
            'id' => $this->primaryKey(),
            'producer_name' => $this->string(),
        ]);
        
        $this->insert('CUProduces', [
            'id' => 1,
            'producer_name' => 'AMD',
        ]);
        
        $this->insert('CUProduces', [
            'id' => 2,
            'producer_name' => 'Intel',
        ]);
        
        $this->insert('CUProduces', [
            'id' => 3,
            'producer_name' => 'Nvidia',
        ]);
        
        $this->insert('CUProduces', [
            'id' => 4,
            'producer_name' => 'AsRock',
        ]);
        
        $this->insert('CUProduces', [
            'id' => 5,
            'producer_name' => 'Gigabyte',
        ]);
    }
    
    private function createCUGoodsToCategory()
    {
        $this->createTable('CUGoodsToCategory', [
            'id' => $this->primaryKey(),
            'goods_id' => $this->integer(),
            'category_id' => $this->integer(),
        ]);
        
        $this->insert('CUGoodsToCategory', [
            'id' => 1,
            'goods_id' => 1,
            'category_id' => 1,
        ]);
        
        $this->insert('CUGoodsToCategory', [
            'id' => 2,
            'goods_id' => 2,
            'category_id' => 1,
        ]);
        
        $this->insert('CUGoodsToCategory', [
            'id' => 3,
            'goods_id' => 3,
            'category_id' => 2,
        ]);
        
        $this->insert('CUGoodsToCategory', [
            'id' => 4,
            'goods_id' => 4,
            'category_id' => 2,
        ]);
        
        $this->insert('CUGoodsToCategory', [
            'id' => 5,
            'goods_id' => 5,
            'category_id' => 3,
        ]);
        
        $this->insert('CUGoodsToCategory', [
            'id' => 6,
            'goods_id' => 6,
            'category_id' => 3,
        ]);
    }
    
    private function createCUGoodsToProduces()
    {
        $this->createTable('CUGoodsToProduces', [
            'id' => $this->primaryKey(),
            'goods_id' => $this->integer(),
            'producer_id' => $this->integer(),
        ]);
        
        $this->insert('CUGoodsToProduces', [
            'id' => 1,
            'goods_id' => 1,
            'producer_id' => 2,
        ]);
        
        $this->insert('CUGoodsToProduces', [
            'id' => 2,
            'goods_id' => 2,
            'producer_id' => 1,
        ]);
        
        $this->insert('CUGoodsToProduces', [
            'id' => 3,
            'goods_id' => 3,
            'producer_id' => 3,
        ]);
        
        $this->insert('CUGoodsToProduces', [
            'id' => 4,
            'goods_id' => 4,
            'producer_id' => 5,
        ]);
        
        $this->insert('CUGoodsToProduces', [
            'id' => 5,
            'goods_id' => 5,
            'producer_id' => 4,
        ]);
        
        $this->insert('CUGoodsToProduces', [
            'id' => 6,
            'goods_id' => 6,
            'producer_id' => 5,
        ]);
    }

}
