<?php

namespace frontend\models;

use Yii;
use frontend\models\CUGoodsToCategory;
use frontend\models\CUGoods;

/**
 * This is the model class for table "CUCategory".
 *
 * @property int $id
 * @property string $category_name
 */
class CUCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CUCategory';
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_name' => 'Category Name',
        ];
    }
    
    public function getGoodsRelations()
    {
        return $this->hasMany(CUGoods::className(), ['category_id' => 'id'])->all();
    }
    
}
