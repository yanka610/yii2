<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Ad form
 */

class Ad extends ActiveRecord{


    public static function tableName(){
        return "{{blurb}}";
    }

    public function getData(){
        return array("image"=>$this->image,"content"=>$this->content,"link"=>$this->link);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [           
            [['image', 'content','link'], 'required'],      
            [['image', 'content','link'], 'string'], 
           
        ];
    }
}