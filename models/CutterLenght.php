<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_cutter_lenght}}".
 *
 * @property int $id
 * @property int $lenght
 * @property string $title_lenght
 */
class CutterLenght extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_cutter_lenght}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lenght', 'title_lenght'], 'required'],
            [['lenght'], 'integer'],
            [['title_lenght'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lenght' => 'Lenght',
            'title_lenght' => 'Title Lenght',
        ];
    }
}
