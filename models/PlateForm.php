<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_plate_form}}".
 *
 * @property int $id
 * @property string $plate_form форма пластины
 */
class PlateForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_plate_form}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['plate_form'], 'required'],
            [['plate_form'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'plate_form' => 'Plate Form',
        ];
    }
}
