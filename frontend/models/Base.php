<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yii_base".
 *
 * @property integer $id
 * @property string $name
 * @property string $domain
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $uploadtype
 * @property string $email
 */
class Base extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii_base';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'domain', 'title', 'keywords', 'description', 'uploadtype', 'email', 'phone', 'address'], 'required'],
            [['description', 'uploadtype'], 'string'],
            [['name', 'domain', 'title', 'keywords', 'email'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '站名',
            'domain' => '域名',
            'title' => '标题',
            'keywords' => '关键字',
            'description' => '描述',
            'uploadtype' => '支持的上传类型(用 , 分割)',
            'email' => '邮箱',
            'phone' => '电话',
            'address' => '地址',
        ];
    }
}
