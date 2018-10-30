<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;


/**
 * Ad form
 */

class OrderProductForm extends Model{
  

    public $idproduct;
    public $idorder;


  
    public function rules()
    {
        return [           
            [['idproduct','idorder'], 'required'],      
            [['idproduct','idorder'], 'int'], 

        ];
    }

   
}