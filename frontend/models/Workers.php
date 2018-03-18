<?php

namespace frontend\models;
use yii\base\Model;
/**
 * Description of Workers
 *
 * @author Kirilloid
 */
class Workers extends Model
{
    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';
    
    public $firstName;
    public $secondName;
    public $thirdName;
    public $salary;
    public $email;
    
    public function rules() {
        return [
            [['firstName','secondName','email'],'required'],
            [['firstName'],'string','min' => 2],
            [['secondName'],'string','min' => 5],
            [['email'],'email'],
            [['thirdName'],'required','on' => self::SCENARIO_EMPLOYEE_UPDATE]
        ];        
    }
    
    public function scenarios() {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => [
                'firstName','secondName','thirdName','email'
            ],
            self::SCENARIO_EMPLOYEE_UPDATE => [
                'firstName','secondName','thirdName'
            ]
        ];
    }
    
    public function emptysave() {
        return true;
    }
}
