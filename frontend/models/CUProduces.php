<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "CUProduces".
 *
 * @property int $id
 * @property string $producer_name
 */
class CUProduces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CUProduces';
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'producer_name' => 'Producer Name',
        ];
    }
}
