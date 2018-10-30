<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<h2>All product:</h2>
<div class="row">
<?php

foreach($model as $ad)
{
?>
<div class="card col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-2">
  <div class="card-body">
    <p><img style="height: 120px;width: 180px;" src="../../../uploads/<?=Html::encode("{$ad->path}")?>"></p>
    <h4>
      <?=Html::encode("{$ad->name}")?>
    </h4>
    <p>
      <?=Html::encode("{$ad->content}")?>
    </p>
    <p>
      <?=Html::encode("{$ad->price}")?>
    </p>
    </div>
    <div class="card-footer">
    <a class="btn btn-success" href="<?php echo Url::toRoute(['product/basket','id'=>$ad->id]); ?>" type="button">Buy</a>
    <button @click="addProdBasket('<?=$ad->id?>', '<?=$ad->name?>', 
                    '<?=$ad->content?>','<?=$ad->category?>', '<?=$ad->price?>')"
                    class="btn btn-success">Buy</button>
  </div>
</div>
<?php
}
?>
</div>