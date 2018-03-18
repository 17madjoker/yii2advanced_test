<?php

namespace frontend\models;
use yii\base\Model;
use Yii;
use yii\helpers\ArrayHelper;
/**
 * Description of Employee
 *
 * @author Kirilloid
 */
class Employee extends Model {
    
    const SCENARIO_EMPLOYEE_REGISTER = 1;
    const SCENARIO_EMPLOYEE_UPDATE = 2;
    
    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;
    
    // New
    public $birthday;
    public $hiringDate;
    public $city;
    public $position;
    public $idCode;
    
    public function scenarios() {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName','lastName','middleName'
                ,'birthday','hiringDate','city','position','idCode','email'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName','lastName','middleName']
        ];
    }
    
    public function rules() {
        return [
            [['firstName','lastName','email','birthday'],'required'],
            [['firstName'],'string','min' => 2],
            [['lastName'],'string','min' => 3],
            [['email'],'email'],
            [['middleName'],'required','on' => self::SCENARIO_EMPLOYEE_UPDATE],
            // New
            [['birthday','hiringDate'],'date','format' => 'php:Y-m-d'],
            [['city'],'integer'],
            [['idCode'],'string','length' => 10],
            [['hiringDate','position','idCode'],'required','on' => self::SCENARIO_EMPLOYEE_REGISTER]
        ];
    }
    
    public function getCitiesList(){
        $sql = 'SELECT * FROM city';
        $result = Yii::$app->db->createCommand($sql)->queryAll();        
        return ArrayHelper::map($result,'id','name');
    }
}
