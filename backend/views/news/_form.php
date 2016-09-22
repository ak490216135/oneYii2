<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Cat;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */

$where = [
    'fcatid' => 0
];
$list = Cat::find()
    ->where($where)
    ->limit(80)
    ->orderBy('order DESC, catid ASC')
    ->all();
$arr = array();
foreach ($list as $value) {
    //if($model->catid != $value->catid){
        $arr[$value->catid] = $value->catname;
        $where2 = [
            'fcatid' => $value->catid
        ];
        $list2 = Cat::find()
        ->where($where2)
        ->limit(80)
        ->orderBy('order DESC, catid ASC')
        ->all();
        foreach($list2 as $value2){
            $arr[$value2->catid] = '-- '.$value2->catname;
        }
    //}
}
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catid')->dropDownList($arr)?>
    
<?php
    if(isset($model->id)){
        echo $form->field($model, 'file')->fileInput();
        echo '<div><a href="/'.$model->pic.'" target="_blank"><img src="/'.$model->pic.'" class="news_pic"/></a></div>';
    }else{
        echo $form->field($model, 'file')->fileInput();
    }
?>


    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 8]) ?>

<?php
    if(isset($model->id)){
        echo $form->field($model, 'date')->textInput(['value' => date('Y-m-d H:i:s', $model->date), 'disabled' => 'disabled']);
    }else{
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
        <?= Html::submitButton($model->isNewRecord ? '发布文章' : '更改文章', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
