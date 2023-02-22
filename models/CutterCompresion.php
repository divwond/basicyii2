<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_cutter_compresion}}".
 *
 * @property int $id
 * @property string $type_compresion тип прижима
 */
class CutterCompresion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_cutter_compresion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_compresion'], 'required'],
            [['type_compresion'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_compresion' => 'тип прижима',
        ];
    }
}
