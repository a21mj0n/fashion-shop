<?php

use yii\grid\GridView;

?>
<div class="container">
  <h2 class="text-center">Order Information</h2>
    <?php
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'name',
            'email',
            'password',
            'phone',
            'address',
        ],
    ]);

    ?>
</div>
