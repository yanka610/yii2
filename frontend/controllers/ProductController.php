<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\ProductForm;
use common\models\Product;
use yii\web\UploadedFile;
use yii\db\Query;


/**
 * Ad controller
 */
class ProductController extends Controller
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
        $model = Product::find()->all();
        
       return $this->render('index',[ 'model' => $model]);

    }

    // public function actionCreate()  {
    //     $model=new ProductForm();
    //     if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
    //         $model->path = UploadedFile::getInstance($model, 'path');
    //         if ($model->upload()) {               
    //             $ad=new Product();
    //             $ad->content=$model->content;
    //             $ad->name=$model->name;
    //             $ad->category=$model->category;
    //             $ad->price=$model->price;
    //            // $ad->path=$model->path;
    //             $ad->path=$model->path->baseName. '.' . $model->path->extension;
    //             $ad->save();
    //             return $this->refresh();  
    //         }
    //     }
    //     return $this->render('create',[ 'model' => $model]);
    // }

    // public function actionDelete($id)
    // {          
    //     Product::find()->where(['id'=>$id])->one()->delete();
    //     return $this->render('delete');

    // }

    // public function actionEdit($id)
    // {
    //     $model=new ProductForm();
    //     $old_ad=Product::find()->where(['id'=>$id])->one();            
    //         $model->content=$old_ad->content;
    //         $model->name=$old_ad->name;
    //         $model->category=$old_ad->category; 
    //         $model->price=$old_ad->price;
    //         $model->path=$old_ad->path;
    //     if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {         
    //          $imageFile = UploadedFile::getInstance($model, 'path');
    //          if ($imageFile!==NULL) {
    //             $model->path=$imageFile;
    //             $model->upload();
    //          }
    //         $ad=$old_ad;
    //         $ad->content=$model->content;
    //         $ad->name=$model->name;  
    //         $ad->category=$model->category; 
    //         $ad->price=$model->price;  
                
    //         $ad->save();
    //         return $this->refresh();
    //     }
    //     else
    //     {
    //         return $this->render('edit',[ 'model' => $model]);
    //     }
    // }

 

    public function actionBasket()
    {
        
        return $this->render('basket');
    }
}


