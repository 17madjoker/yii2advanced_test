<?php

namespace frontend\models;
use yii\base\Model;

/**
 * Description of Hw11
 *
 * @author Kirilloid
 */
class Hw11 extends Model {
    
    public $width;
    public $height;
    public $camera; // radio
    public $stvorki; // integer
    public $povorotstvorki; // integer <= stvorki
    public $color; // select
    public $podokonnik; // checkbox
    public $email;
    public $name;
    
    public function rules() {
        return [
            [['width','height','camera','stvorki','color','email','name'],'required'],
            [['width'], 'number', 'min' => 70, 'max' => 210],
            [['height'], 'number', 'min' => 100, 'max' => 200],
            [['camera'],'each','rule' => ['integer']],
            [['stvorki'],'integer','min' => 1],
            [['povorotstvorki'],'integer'],
            [['povorotstvorki'],'compare',
                'compareAttribute' => 'stvorki',
                'operator' => '<='                
            ],
            [['podokonnik'],'safe'],
            [['color'],'integer'],
            [['email','name'],'string'],
            [['email'],'email'],
        ];
    }
}
