<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_cutter_type}}".
 *
 * @property int $id
 * @property string $ru_title
 * @property string $en_title
 * @property string|null $ua_title
 * @property string|null $ru_description
 * @property string|null $en_description
 * @property string|null $ua_description
 */
class CutterType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_cutter_type}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ru_title', 'en_title'], 'required'],
            [['ru_description', 'en_description', 'ua_description'], 'string'],
            [['ru_title', 'en_title', 'ua_title'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ru_title' => 'Ru Title',
            'en_title' => 'En Title',
            'ua_title' => 'Ua Title',
            'ru_description' => 'Ru Description',
            'en_description' => 'En Description',
            'ua_description' => 'Ua Description',
        ];
    }
}
