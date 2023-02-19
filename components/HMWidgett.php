<?php 

namespace app\components;

use yii\base\Widget;

class HMWidgett extends Widget
{

    public function run()
    {
        return $this->render('headermenu');
    }
}


?>