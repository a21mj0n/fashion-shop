<?php

use yii\grid\GridView;
use yii\widgets\DetailView;


?>
<div class="container">
  <div class="wrapper" style="margin: 10rem 0;">

      <? if (isset($order)) : ?>
        <span class="alert alert-info" role="alert" style="margin: 0 0 2rem 0;">
          Your order accepted ! Our operator will call you soon
        </span>

        <h2 class="text-center" style="margin: 2rem 0;">Order Information</h2>
          <?
          echo DetailView::widget([
              'model' => $order,
              'attributes' => [
                  //'id',
                  'name',
                  'user_id',
                  'amount',
                  'sum',
                  'shipment_address',
                  'status'
              ],
          ]);
          ?>
      <? else : ?>
        <span class="alert alert-info" role="alert">You have some errors ! &empty;</span>
      <? endif; ?>

    <a href="/" class="btn btn-info">Go HomePage</a>
  </div>

</div>
