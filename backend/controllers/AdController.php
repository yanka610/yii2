<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\AdForm;
use common\models\Ad;
use yii\web\UploadedFile;
use yii\db\Query;


/**
 * Ad controller
 */
class AdController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {              
        $ad = Ad::find()->all();
       return $this->render('index',[ 'model' => $ad]);

    }

    public function actionCreate()  {
        $model=new AdForm();
        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                
                $ad=new Ad();
                $ad->content=$model->content;
                $ad->link=$model->link;
                $ad->image=$model->imageFile->baseName. '.' . $model->imageFile->extension;
                $ad->save();
                return $this->refresh();
  
            }
        }
        return $this->render('create',[ 'model' => $model]);
    }

    public function actionDelete($id)
    {          
        Ad::find()->where(['id'=>$id])->one()->delete();
        return $this->render('delete');

    }

    public function actionEdit($id)
    {
        $model=new AdForm();
        $old_ad=Ad::find()->where(['id'=>$id])->one();            
            $model->content=$old_ad->content;
            $model->link=$old_ad->link;
            $model->imageFile=$old_ad->image;
        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {         
            $imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($imageFile!==NULL) {
                $model->imageFile=$imageFile;
                $model->upload();
            }
            $ad=$old_ad;
            $ad->content=$model->content;
            $ad->link=$model->link;             
            $ad->save();
            return $this->refresh();
        }
        else
        {
            return $this->render('edit',[ 'model' => $model]);
        }
    }
}


