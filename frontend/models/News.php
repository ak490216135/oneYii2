<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yii_news".
 *
 * @property integer $id
 * @property string $title
 * @property string $pic
 * @property string $description
 * @property string $content
 * @property integer $date
 * @property integer $catid
 * @property integer $order
 */
class News extends \yii\db\ActiveRecord
{
    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content', 'catid', 'order'], 'required', 'message' => '不能为空!'],
            [['description','pic', 'content'], 'string'],
            [['catid', 'order'], 'integer'],
            [['title'], 'string', 'max' => 64],
            //[['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, txt'],
            [['file'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'file' => '封面图',
            'pic' => '封面图',
            'description' => '简介',
            'content' => '内容',
            'date' => '日期',
            'catid' => '所属栏目',
            'order' => '排序(越大越靠前)',
        ];
    }

}
