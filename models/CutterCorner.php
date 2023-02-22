<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_cutter_corner}}".
 *
 * @property int $id
 * @property string $cutter_corner угол в плане
 */
class CutterCorner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_cutter_corner}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cutter_corner'], 'required'],
            [['cutter_corner'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cutter_corner' => 'угол в плане',
        ];
    }
}
