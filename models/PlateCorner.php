<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_plate_corner}}".
 *
 * @property int $id
 * @property string $plate_corner задний угол пластин
 */
class PlateCorner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_plate_corner}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['plate_corner'], 'required'],
            [['plate_corner'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'plate_corner' => 'Plate Corner',
        ];
    }
}
