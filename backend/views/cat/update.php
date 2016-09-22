<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cat */

$this->title = '更新 : ' . $model->catid;
$this->params['breadcrumbs'][] = ['label' => '栏目管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->catid, 'url' => ['view', 'id' => $model->catid]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="cat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
