<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '推荐位内容管理';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
    .news_pic{
        width: 60px;
        height: 60px;
    }
</style>

<div class="post-list-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加文章', YII_ROOT.'index.php/'.Yii::$app->controller->id.'/create?pid='.(int)$_GET['pid'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pid',
            'title',
            'url:url',
            [
                'attribute' => 'pic',     //要显示的字段
                'format' => 'html',         //生车的代码显示格式 html格式
                'value' => function($data){
                    if (empty($data->pic)) {
                        return '没有图片';
                    } else {
                        return Html::a( Html::tag('img','',['src' => '/'.$data->pic, 'class' => 'news_pic',]), '/'.$data->pic);
                    }
                },
            ],
            // 'date',
            // 'order',
            // 'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
