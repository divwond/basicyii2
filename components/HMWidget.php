<?php 

namespace app\components;

use yii\base\Widget;

class HMWidget extends Widget
{

    public function run()
    {
        return $this->render('headermenu');
    }
}


?>