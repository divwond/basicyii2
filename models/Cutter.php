<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_cutter}}".
 *
 * @property int $id
 * @property int $type тип резца
 * @property string $compresion крепление пластины
 * @property int $plate_form форма пластины
 * @property int $cutter_corner угол в плане
 * @property int $plate_corner задний угол пластины
 * @property int $direction направление резца
 * @property int $height высота резца 
 * @property int $width ширина резца
 * @property int $lenght длина резца
 * @property int $size_plate размер пластины
 * @property int $category_id
 * @property string|null $img
 */
class Cutter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_cutter}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'compresion', 'plate_form', 'cutter_corner', 'plate_corner', 'direction', 'height', 'width', 'lenght', 'size_plate'], 'required'],
            [['type', 'plate_form', 'cutter_corner', 'plate_corner', 'direction', 'height', 'width', 'lenght', 'size_plate', 'category_id'], 'integer'],
            [['img'], 'safe'],
            [['compresion'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'compresion' => 'Compresion',
            'plate_form' => 'Plate Form',
            'cutter_corner' => 'Cutter Corner',
            'plate_corner' => 'Plate Corner',
            'direction' => 'Direction',
            'height' => 'Height',
            'width' => 'Width',
            'lenght' => 'Lenght',
            'size_plate' => 'Size Plate',
            'category_id' => 'Category ID',
            'img' => 'Img',
        ];
    }
}
