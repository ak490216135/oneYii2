<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PostList */

$this->title = '更新推荐位内容: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Post Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'onePost' => $onePost,
    ]) ?>

</div>
