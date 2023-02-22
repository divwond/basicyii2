<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_cutter_width}}".
 *
 * @property int $id
 * @property int $width ширина
 */
class CutterWidth extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_cutter_width}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['width'], 'required'],
            [['width'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'width' => 'Width',
        ];
    }
}
