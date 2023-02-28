<?php 

namespace app\components;

use yii\base\Widget;
use app\models\Categorylist;

class LICWidget extends Widget
{

    public function run()

    {
        $model = Categorylist::findAll(['pearent_id'=>0,]);
        
        return $this->render('listcatalogwidget',[
            'model' => $model,
        ]);
    }    
}


?>