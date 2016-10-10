<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yii_cat".
 *
 * @property integer $catid
 * @property string $catname
 * @property integer $fcatid
 * @property integer $order
 */
class Cat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii_cat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catname'], 'required'],
            [['fcatid', 'order'], 'integer'],
            [['catname'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'catid' => '栏目id',
            'catname' => '栏目名称',
            'fcatid' => '父栏目id',
            'order' => '排序',
        ];
    }

    // 输入栏目id获取名称
    public static function getCatName($id){
        if ($id == 0 or (!isset($id))) {
            return '顶级栏目';
        }
        $catFindOne = Cat::findOne($id);
        if($catFindOne){
            $catname = $catFindOne->catname;
            return $catname;
        }else{
            return '栏目不存在';
        }
    }

    // 输入栏目id 返回栏目地址
    public static function getCaturl($id){
        if ($id == 0 or (!isset($id))) {
            return YII_ROOT.'index.php/cat/';
        }
        $catFindOne = Cat::findOne($id);
        if($catFindOne){
            return YII_ROOT.'index.php/cat/view?id='.$catFindOne->catid;
        }else{
            return YII_ROOT.'index.php/cat/';
        }
    }
}
