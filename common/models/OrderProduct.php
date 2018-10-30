<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Ad form
 */

class OrderProduct extends ActiveRecord{


    public static function tableName(){
        return "{{orderProduct}}";
    }

    public function getData(){
        return array("idproduct"=>$this->idproduct,"idorder"=>$this->idorder);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [           
            [[ 'idproduct','idorder'], 'required'],      
            [[ 'idproduct','idorder'], 'int'], 
           
        ];
    }
}