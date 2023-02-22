<?php 

namespace app\components;

use yii\base\Widget;
use app\models\Categorylist;

class HMWidget extends Widget
{
   
    
    
 //   $query = Country::find();
    public function run(){
        $model = Categorylist::findAll(['pearent_id'=>0,]);
        
        return $this->render('headermenu',[
            'model' => $model,
        ]);
    }
}


?>