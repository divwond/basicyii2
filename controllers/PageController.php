<?php

namespace app\controllers;

// use app\models\Categorylist;
use app\models\Catalog;

class PageController extends \yii\web\Controller
{
    public $layout = 'gefestlayouts';

    public function actionIndex()
    {
        // return $this->render('index');

        // $array = CategoryList::getAll();
        //  return $this->render('index',['category' => $array]);

        $array = Catalog::getAll();
         return $this->render('index',['catalog' => $array]);
    }

}
