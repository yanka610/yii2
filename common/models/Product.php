<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Ad form
 */

class Product extends ActiveRecord{


    public static function tableName(){
        return "{{product}}";
    }

    public function getData(){
        return array("name"=>$this->name,"content"=>$this->content,"category"=>$this->category,"price"=>$this->price,"path"=>$this->path);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [           
            [['name','category','content','price','path'], 'required'],      
            [['content','name','category','path'], 'string'], 
            [['price'],'integer'],
            ];
    }
}