<?php

use app\models\CutterType;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Cutter Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cutter-type-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cutter Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ru_title',
            'en_title',
            'ua_title',
            'ru_description:ntext',
            //'en_description:ntext',
            //'ua_description:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CutterType $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
