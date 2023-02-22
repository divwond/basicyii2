<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18.01.2023
 * Time: 23:42
 */
namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord{
}
//use app\models\Country;

// получаем все строки из таблицы "country" и сортируем их по "name"
$countries = Country::find()->orderBy('name')->all();

// получаем строку с первичным ключом "US"
$country = Country::findOne('US');

// отобразит "United States"
echo $country->name;

// меняем имя страны на "U.S.A." и сохраняем в базу данных
$country->name = 'U.S.A.';
$country->save();