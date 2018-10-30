<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>
<div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
               <?= $form->field($model, 'imageFile')->fileInput() ?>
              

                <?= $form->field($model, 'content')->textInput() ?>

                <?= $form->field($model, 'link')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Edit', ['class' => 'btn btn-primary', 'name' => 'add']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div> 