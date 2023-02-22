<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_plate_size}}".
 *
 * @property int $id
 * @property int $size размер пластины
 */
class PlateSize extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_plate_size}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['size'], 'required'],
            [['size'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'size' => 'Size',
        ];
    }
}
