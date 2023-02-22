<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_cutter_height}}".
 *
 * @property int $id
 * @property int $height высота
 */
class CutterHeight extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_cutter_height}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['height'], 'required'],
            [['height'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'height' => 'Height',
        ];
    }
}
