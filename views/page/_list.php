<?php
    use yii\helpers\Html;
    use yii\helpers\HtmlPurifier;
    ?>
     
    <div class="news-item">
        <h2><?= Html::encode($model->en_name) ?></h2>    
        <?= HtmlPurifier::process($model->ru_name) ?>    
    </div>