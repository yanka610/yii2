<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<head>

<?= Html::csrfMetaTags() ?>

</head>

<div class="container">
<a href="create"  type="button" class="btn btn-success">Add</a>
  <h2>All blurbs:</h2>
  
  <table class="table">
    <thead>
      <tr>
        <th>Image</th>
        <th>Content</th>
        <th>Link</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
   <?php 
foreach($model as $ad)
{?>
      <tr>

        <td><img style="height: 120px;width: 180px;" src="../../../uploads/<?=Html::encode("{$ad->image}")?>"></td>      
        <td><?=Html::encode("{$ad->content}")?></td>
        <td><?=Html::encode("{$ad->link}")?></td>
      <!-- <form  method="POST"> -->
        <input class="d-none" type="number" name="id" value="<?php echo $ad["id"];?>">
        <td><a href="<?php echo Url::toRoute(['ad/edit','id'=>$ad->id]); ?>"  type="button" ><img style="height: 32px;width: 32px;" src="../../../edit_delete/edit.png"></button></td>
        <td><a href="<?php echo Url::toRoute(['ad/delete','id'=>$ad->id]); ?>"  type="button"><img style="height: 32px;width: 32px;" src="../../../edit_delete/delete.png"></button></td>
        
      <!-- </form> -->
    </tr>   
      
      <?php

}
?>        
    </tbody>
  </table>

</div>
