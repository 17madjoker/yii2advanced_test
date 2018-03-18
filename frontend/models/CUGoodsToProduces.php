<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "CUGoodsToProduces".
 *
 * @property int $id
 * @property int $goods_id
 * @property int $producer_id
 */
class CUGoodsToProduces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CUGoodsToProduces';
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'goods_id' => 'Goods ID',
            'producer_id' => 'Producer ID',
        ];
    }
}
