<?php

use yii\helpers\Html;
use yii\grid\GridView;

use app\models\Cat;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
    .news_pic{
        width: 60px;
        height: 60px;
    }
</style>

<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加文章', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            [
                'attribute' => 'pic',     //要显示的字段
                'format' => 'html',         //生车的代码显示格式 html格式
                'value' => function($data){
                    return Html::a( Html::tag('img','',['src' => '/'.$data->pic, 'class' => 'news_pic', ]), '/'.$data->pic);
                },
            ],
            //'description:ntext',
            //'content:ntext',
            [
                'attribute' => 'date',
                'label' => '添加时间',
                'format' => 'html',
                'value' => function($data){
                    return date('Y-m-d H:i:s', $data->date);
                }
            ],
            [
                'attribute' => 'catid',     //要显示的字段
                'label' => '所属栏目',      //显示名称
                'format' => 'html',         //生车的代码显示格式 html格式
                'value' => function($data){ //显示值
                    if ($data->catid == 0) {
                        return '顶级栏目';
                    } else {
                        return Html::a(Cat::getCatname($data->catid), Cat::getCaturl($data->catid));
                    }
                },
            ],
            'order',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
