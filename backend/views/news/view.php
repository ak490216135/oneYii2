<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use app\models\Cat;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更改文章', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除文章', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            [
                'attribute' => 'catid',     //要显示的字段
                'label' => '所属栏目',      //显示名称
                'format' => 'html',         //生车的代码显示格式 html格式
                'value' => $model->catid == 0?'顶级栏目':Html::a(Cat::getCatname($model->catid), Cat::getCaturl($model->catid)),
            ],
            [
                'attribute' => 'pic',     //要显示的字段
                'format' => 'html',         //生车的代码显示格式 html格式
                'value' => Html::a(Html::tag('img','',['src' => '/'.$model->pic, 'class' => 'news_pic']), '/'.$model->pic),
            ],
            'description:ntext',
            [
                'attribute' => 'content',
                'format' => 'html',
            ],
            [
                'attribute' => 'date',
                'label' => '添加时间',
                'format' => 'html',
                'value' => date('Y-m-d H:i:s', $model->date),
            ],
            
            'order',
        ],
    ]) ?>

</div>
