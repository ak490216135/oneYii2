<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cat */

$this->title = $model->catid;
$this->params['breadcrumbs'][] = ['label' => '栏目管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->catid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->catid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确认删除?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'catid',
            'catname',
            [
                'attribute' => 'fcatid',
                'label' => '所属栏目',
                'format' => 'html',
                'value' =>  $model->fcatid == 0 ? '顶级栏目' : Html::a($model->getCatName($model->fcatid), $model->getCatUrl($model->fcatid)),
            ],
            [
                'attribute' => 'order',
                'label' => '排序(越大越靠前)'
            ],
        ],
    ]) ?>

</div>
