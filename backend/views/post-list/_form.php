<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PostList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-list-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?php if (Yii::$app->controller->action->id == 'create') { ?>
    <?= $form->field($model, 'pid')->textInput(['value' => $_GET['pid'], 'readonly' => 'readonly']) ?>
<?php } else { ?>
    <?= $form->field($model, 'pid')->textInput(['readonly' => 'readonly']) ?>
<?php } ?>

    <?= $form->field($model, 'pname')->textInput(['value' => $onePost->title, 'readonly' => 'readonly']) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

<?php
    if(Yii::$app->controller->action->id == 'create'){
        echo $form->field($model, 'file')->fileInput();
        }else{
        echo $form->field($model, 'file')->fileInput();
        echo '<div><a href="/'.$model->pic.'" target="_blank"><img src="/'.$model->pic.'" class="news_pic"/></a></div>';
    }
?>


    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

<?php
    if( Yii::$app->controller->action->id == 'create' ){
        echo $form->field($model, 'order')->textInput(['value' => '0']);
    }else{
        echo $form->field($model, 'order')->textInput();
    }
?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
