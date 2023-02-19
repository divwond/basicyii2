<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorylist".
 *
 * @property int $id
 * @property string $en_name
 * @property string $ru_name
 * @property string|null $ukr_name
 * @property int $pearent_id
 */
class Categorylist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categorylist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['en_name', 'ru_name'], 'required'],
            [['pearent_id'], 'integer'],
            [['en_name', 'ru_name', 'ukr_name'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'en_name' => 'En Name',
            'ru_name' => 'Ru Name',
            'ukr_name' => 'Ukr Name',
            'pearent_id' => 'Pearent ID',
        ];
    }

    public static function getAll()
    {
        $data = self::find()->all();
        return $data;
    }
}
