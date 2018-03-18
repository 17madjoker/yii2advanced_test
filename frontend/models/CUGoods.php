<?php

namespace frontend\models;

use Yii;
use frontend\models\CUGoodsToProduces;
use frontend\models\CUProduces;
use frontend\models\CUCategory;
use frontend\models\CUGoodsToCategory;

/**
 * This is the model class for table "CUGoods".
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property int $category_id
 * @property int $producer_id
 */
class CUGoods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CUGoods';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'category_id' => 'Category ID',
            'producer_id' => 'Producer ID',
        ];
    }
    
    public function getProducer()
    {
        return $this->hasOne(CUProduces::className(), ['id' => 'producer_id'])->one();
    }
    
    public function getProducerName()
    {
        return self::getProducer()->producer_name;
    }
    
    public function getCategory()
    {
        return $this->hasOne(CUCategory::className(), ['id' => 'category_id'])->one();
    }
    
    public function getCategoryName()
    {
        return self::getCategory()->category_name;
    }
        
}
