<?php
/** @var yii\web\View $this */

use app\models\Categorylist;
use yii\helpers\Html;

echo 'INDEX-PAGE';

?>

<?php

     
use app\models\News;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
 
$dataProvider = new ActiveDataProvider([
	'query' => Categorylist::find()->where(['pearent_id'=>0]),
	'pagination' => [
		'pageSize' => 3,
	],
]);
 
echo ListView::widget([
	'dataProvider' => $dataProvider,
	'itemView' => '_list',
]);

?>

<div class="main-body">   
				<ul style="display: flex;">
                	<?php foreach ($category as $key=>$item): 
											
						if (($key%4)==0) echo '</ul><ul style="display: flex;">';						
					?>
						
                    
					<li>
						<div class="main-menu-item">
							<h4>РУ название : <?php echo $item->ru_name ?></h4> 
							<h4>EN name<?php echo $item->en_name ?></h4> 
							<h4>УКР назва<?php echo $item->ukr_name ?></h4> 
							<h4>IDшник<?php echo $item->id ?></h4> 
							<h4>P Id<?php echo $item->pearent_id ?></h4> 							
						</div>
					</li> 
				<?php endforeach ?>				
				</ul>				
			</div>
