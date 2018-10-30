<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


//$this->title = 'index';
//$this->params['breadcrumbs'][] = $this->title;
//$this->title = 'My Yii Application';
?>
<p>
<div class="main">
  <h2>New blurbs:</h2>  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
         <?php
          foreach($model as $index=>$ad)
          {
            if ($index==0)
          {
       ?>
        <div class="item active myimg ">   
        <h4><?=Html::encode("{$ad->content}")?></h4>
          <img  src="<?="../../../uploads/" .$ad->image?>" alt="Los Angeles">
      <div ><?=Html::encode("{$ad->link}")?></div>
        </div>
          <?php
          }
          else
          {
            ?>
           <div class="item myimg">
           <h4><?=Html::encode("{$ad->content}")?></h4>
          <img  src="<?="../../../uploads/" .$ad->image?>" alt="Los Angeles">
      <div ><?=Html::encode("{$ad->link}")?></div>
           </div>
            <?php
          }
  }
    ?>
     
    </div>
</div>
</div>
</p>
