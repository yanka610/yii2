<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;


/**
 * Ad form
 */

class AdForm extends Model{
  
    public $imageFile;
    public $content;
    public $link;

  
    public function rules()
    {
        return [           
            [['content','link'], 'required'],      
            [['content','link'], 'string'], 
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
      
        ];
    }

    public function upload()
    {
       
            $this->imageFile->saveAs('../../uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        
            return false;     
    }
}