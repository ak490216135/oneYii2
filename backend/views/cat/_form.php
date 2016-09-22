<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Cat;

// 查找所有fcatid为0的
$where = [
	'fcatid' => 0,
];
$listFCat = Cat::find()
	->where($where)
	->orderBy('order ASC, catid ASC')
	->all();
$arr[0] = '顶级栏目';
foreach ($listFCat as $value) {
	//if($model->catid != $value->catid){
		$arr[$value->catid] = $value->catname;
	//}
}

/* @var $this yii\web\View */
/* @var $model app\models\Cat */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="cat-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'catname')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'fcatid')->dropDownList($arr)?>

<?php
	if(isset($model->catid)){
		echo $form->field($model, 'order')->textInput();
	}else{
		echo $form->field($model, 'order')->textInput(['value' => 0]);
	}
?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
