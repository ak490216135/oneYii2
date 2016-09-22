<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yii_post_list".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $title
 * @property string $url
 * @property string $pic
 * @property integer $date
 * @property integer $order
 * @property string $description
 */
class PostList extends \yii\db\ActiveRecord
{

    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii_post_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'title', 'url', 'date', 'order', 'description'], 'required'],
            [['pid', 'order'], 'integer'],
            [['description'], 'string'],
            [['title', 'url', 'pic'], 'string', 'max' => 100],
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
            'pid' => '对应推荐位id',
            'pname' => '对应推荐位名称',
            'title' => '标题',
            'url' => 'url',
            'pic' => '缩略图',
            'file' => '缩略图',
            'date' => '时间',
            'order' => '排序',
            'description' => '简介',
        ];
    }
}
