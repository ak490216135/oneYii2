<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yii_page".
 *
 * @property integer $id
 * @property string $catdir
 * @property string $title
 * @property string $content
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catdir', 'title', 'content'], 'required'],
            [['content'], 'string'],
            [['catdir', 'title'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'catdir' => '路径名称(英文)',
            'title' => '标题',
            'content' => '内容',
        ];
    }
}
