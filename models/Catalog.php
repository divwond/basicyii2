<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_catalog}}".
 *
 * @property int $id
 * @property string $en_name
 * @property string $ru_name
 * @property string $ukr_name
 * @property int $article
 * @property string $description
 * @property string $param
 * @property int $price
 * @property int $p_id
 * @property string $image
 *
 * @property Categorylist $p
 */
class Catalog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_catalog}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['en_name', 'ru_name', 'ukr_name', 'article', 'description', 'param', 'price', 'p_id', 'image'], 'required'],
            [['article', 'price', 'p_id'], 'integer'],
            [['description', 'param', 'image'], 'safe'],
            [['en_name'], 'string', 'max' => 30],
            [['ru_name', 'ukr_name'], 'string', 'max' => 50],
            [['article'], 'unique'],
            [['p_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categorylist::class, 'targetAttribute' => ['p_id' => 'id']],
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
            'article' => 'Article',
            'description' => 'Description',
            'param' => 'Param',
            'price' => 'Price',
            'p_id' => 'P ID',
            'image' => 'Image',
        ];
    }

    /**
     * Gets query for [[P]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getP()
    {
        return $this->hasOne(Categorylist::class, ['id' => 'p_id']);
    }

    public static function getAll()
    {
        $data = self::find()->all();
        return $data;
    }




}
