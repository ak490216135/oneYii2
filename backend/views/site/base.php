<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '网站基本信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .field-base-id{
        display: none;
    }
</style>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-lg-6">

                    <h4 style="color: #777;">基本配置</h4>

                    <?= $form->field($model, 'id')->hiddenInput(['value' => '1']) ?>

                    <?= $form->field($model, 'name')->textInput(['value' => $base->name]) ?>
                    
                    <?= $form->field($model, 'email')->textInput(['value' => $base->email]) ?>

                    <?= $form->field($model, 'domain')->textInput(['value' => $base->domain]) ?>

            </div>
            
            <div class="col-lg-6">

                    <h4 style="color: #777;">SEO配置</h4>
                    
                    <?= $form->field($model, 'title')->textInput(['value' => $base->title]) ?>

                    <?= $form->field($model, 'keywords')->textInput(['value' => $base->keywords]) ?>

                    <?= $form->field($model, 'description')->textarea(['rows' => 4, 'value' => $base->description]) ?>

            </div>

            <div class="col-lg-6">

                    <h4 style="color: #777;">其他配置</h4>
                    
                    <?= $form->field($model, 'uploadtype')->textarea(['rows' => 4, 'value' => $base->uploadtype]) ?>

            </div>

        </div>

        <div class="row">
            
            <div class="col-lg-6">
                
                    <div class="form-group">
                        <?= Html::submitButton('更改', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

            </div>

        </div>

        <?php ActiveForm::end(); ?>

</div>
