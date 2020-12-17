<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Oder */

$this->title = 'Create Oder';
$this->params['breadcrumbs'][] = ['label' => 'Oders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
