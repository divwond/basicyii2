<?php

namespace app\controllers;

use app\models\Categorylist;

class PageController extends \yii\web\Controller
{
    public $layout = 'gefestlayouts';

    public function actionIndex()
    {
        // return $this->render('index');
        $array = CategoryList::getAll();
         return $this->render('index',['category' => $array]);
    }

}
