<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '推荐管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('添加推荐位', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'order',
            [
                'label' => '推荐位内容操作',
                'format' => 'html',
                'value' => function($data){
                    $p  = Html::a('添加内容', YII_ROOT.'index.php/post-list/create?pid='.$data->id, ['class' => 'btn btn-success']).' ';
                    $p .= Html::a('查看内容', YII_ROOT.'index.php/post-list/index?pid='.$data->id, ['class' => 'btn btn-success']);
                    return $p;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
