<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PostList */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Post Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-list-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
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
            'id',
            'pid',
            [
                'attribute' => 'pname',
                'format' => 'html',
                'value' => $onePost->title,
            ],
            'title',
            'url:url',
            [
                'attribute' => 'pic',
                'format' => 'html',
                'value' => Html::a( Html::tag('img', '', ['src' => '/'.$model->pic, 'class' => 'news_pic']), '/'.$model->pic ),
            ],
            'date',
            'order',
            'description:ntext',
        ],
    ]) ?>

</div>
