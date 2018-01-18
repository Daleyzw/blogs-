<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%diary}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $cover
 * @property string $content
 */
class Diary extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%diary}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'cover', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'cover' => 'Cover',
            'content' => 'Content',
        ];
    }
}
