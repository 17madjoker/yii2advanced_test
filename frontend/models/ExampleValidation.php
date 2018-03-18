<?php

namespace frontend\models;
use Yii;
use yii\base\Model;
/**
 * Description of ExampleValidation
 *
 * @author Kirilloid
 */
class ExampleValidation extends Model {
    
    const STATUS_ACTIVE = 1;
    const STATUS_DISABLED = 2;
    public $testAttribute;
    public $startValue;
    public $endValue;
    public $options;


    public function rules() {
        return [
            [['testAttribute'],'match','pattern' => '/^[A-Z]/'],
            [['startValue'],'compare',
                'compareAttribute' => 'endValue',
                'operator' => '<',
                ],
            ['endValue','safe'],
            [['options'],'required'],
            [['options'],'each','rule' => ['integer']]
        ];        
    }
}
