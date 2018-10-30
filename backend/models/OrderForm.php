<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;


/**
 * Ad form
 */

class OrderForm extends Model{
  

    public $iduser;

    public function rules()
    {
        return [           
            [['iduser'], 'required'],      
            [['iduser'], 'int'], 

        ];
    }

}