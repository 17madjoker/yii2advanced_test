<?php

namespace frontend\models;

use Yii;
use frontend\models\CUGoods;
use frontend\models\CUCategory;

/**
 * This is the model class for table "CUGoodsToCategory".
 *
 * @property int $id
 * @property int $goods_id
 * @property int $category_id
 */
class CUGoodsToCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CUGoodsToCategory';
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'goods_id' => 'Goods ID',
            'category_id' => 'Category ID',
        ];
    }
    
    public function getIdGoods()
    {
        return $this->hasOne(CUGoods::className(),['id' => 'good_id']);
    }
    
    public function getIdCategory()
    {
        return $this->hasOne(CUCategory::className(),['id' => 'category_id']);
    }
}
