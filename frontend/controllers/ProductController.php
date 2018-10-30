<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\OrderForm;
use backend\models\OrderProductForm;
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


    public function actionBasket()
    {           
        return $this->render('basket');
    }

    public function actionOrder()
    {
        $request = Yii::$app->request;
        var_dump($request->post('user')); 
        $model=new OrderForm();
        if (Yii::$app->request->isPost) { 
                                
                $ad=new Order();
                $ad->iduser=$model->iduser;
                $ad->save();
              
              return $this->refresh();  
        }
    }
}


