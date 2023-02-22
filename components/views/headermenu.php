<?php

use yii\bootstrap4\Nav;
use yii\bootstrap4\Html;
// $droplinkarray=[
//                     ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
//                     ['label' => 'Level 2 - Dropdown v', 'url' => '#'],
//                     ['label' => 'Level 3 - Dropdown g', 'url' => '#'],
// ];


foreach ($model as $key=>$item): 
    if ($key >0 ) $droplinkarray[$key]=['label' =>  $item->ru_name, 'url' => 'catalog/'.$item->en_name];
    //$item->ru_name  ;

endforeach;

//print_r($droplinkarray);


echo Nav::widget([
        'options' => [
            'class' => 'navmenu',
            'style' => 'color:red',
        ],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            [
                'label' => 'Товары и услуги',
                'items' => 
                    //    ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
                    //    ['label' => 'Level 2 - Dropdown v', 'url' => '#'],
                    //    ['label' => 'Level 3 - Dropdown g', 'url' => '#'],
                       $droplinkarray,
                'url' => 'catalog',

//
                      //  [$droplinkarray],
//



                        // '<li class="divider">KAKOJ TO DIVIDER</li>',
                        // '<li class="dropdown-header">Dropdown Header</li>',
                        //['label' => 'Level 1 - Dropdown B', 'url' => '#'],
                    
            ],
            ['label' => 'О нас', 'url' => ['/site/contact']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            ['label' => 'Доставка и оплата', 'url' => ['/site/contact']],
            ['label' => 'Возврат и обмен', 'url' => ['/site/contact']],
            
        ],
        
    ]);
// echo Nav::widget([
//     'items' => [
//         [
//             'label' => 'Home',
//             'url' => ['site/index'],
//             'linkOptions' => ['ghfghfg'],
//         ],
//         [
//             'label' => 'Dropdown',
//             'items' => [
//                  ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
//                  '<li class="divider"></li>',
//                  '<li class="dropdown-header">Dropdown Header</li>',
//                  ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
//             ],
//         ],
//         [
//             'label' => 'Login',
//             'url' => ['site/login'],
//             'visible' => Yii::$app->user->isGuest
//         ],
//     ],
//     'options' => ['class' =>'nav-pills'], // set this to nav-tab to get tab-styled navigation
// ]);

?>

