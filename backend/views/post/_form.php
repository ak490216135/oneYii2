<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

<?php
    if(isset($model->id)){
        echo $form->field($model, 'file')->fileInput();
        echo '<div><a href="'.'/'.$model->pic.'" target="_blank"><img src="'.'/'.$model->pic.'" class="news_pic"/></a></div>';
    }else{
        echo $form->field($model, 'file')->fileInput();
    }
?>

<?php
    if(isset($model->id)){  //是update
        echo $form->field($model, 'order')->textInput();
    }else{  //是create
        echo $form->field($model, 'order')->textInput(['value' => '0']);
    }
?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
