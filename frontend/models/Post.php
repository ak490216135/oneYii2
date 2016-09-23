<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yii_post".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $pic
 * @property integer $order
 */
class Post extends \yii\db\ActiveRecord
{
    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'order'], 'required'],
            [['description'], 'string'],
            [['order'], 'integer'],
            [['title', 'pic'], 'string', 'max' => 100],
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
            'description' => '简介',
            'pic' => '推荐位示意图',
            'file' => '推荐位示意图',
            'order' => '排序',
        ];
    }
}
