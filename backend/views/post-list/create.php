<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PostList */

$this->title = '添加推荐位内容';
$this->params['breadcrumbs'][] = ['label' => 'Post Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'onePost' => $onePost,
    ]) ?>

</div>
