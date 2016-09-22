<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '单页管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加单页', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


<?php
    foreach($pageList as $value){
?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="t<?= $value->id?>">
                <h4 class="panel-title">
                    <a class="collapsed" style="width: 100%;display: block;" role="button" data-toggle="collapse" data-parent="#accordion" href="#ct<?= $value->id?>" aria-expanded="true" aria-controls="ct<?= $value->id?>">
                        <?= $value->title?>
                    </a>
                </h4>
            </div>
            <div id="ct<?= $value->id?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="t<?= $value->id?>">
                <div class="panel-body">
                    <?php $form = ActiveForm::begin([
                        'action' => ['update'],
                        'method' => 'post',
                    ]); ?>

                    <input type="hidden" name="id" value="<?= $value->id?>" />

                    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'value' => $value->title]) ?>

                    <?= $form->field($model, 'catdir')->textInput(['maxlength' => true, 'value' => $value->catdir]) ?>

                    <?= $form->field($model, 'content')->textarea(['rows' => 26, 'value' => $value->content]) ?>

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? '添加单页' : '更改单页', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                        <?= Html::a('删除单页', ['delete', 'id' => $value->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => '确认删除?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
<?php
    }
    unset($value);
    unset($pageList);
?>

    </div>

</div>
