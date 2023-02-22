<?php

use app\models\Cutter;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Cutters');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cutter-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Cutter'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type',
            'compresion',
            'plate_form',
            'cutter_corner',
            //'plate_corner',
            //'direction',
            //'height',
            //'width',
            //'lenght',
            //'size_plate',
            //'category_id',
            //'img',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Cutter $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
