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
		'pageSize' => 20,
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
							<h2><?php echo $item->ru_name ?></h2> 
							<!-- // Имы ячейки в таблице должно быть соответственно blog_title -->                   
						</div>
					</li> 
				<?php endforeach ?>				
				</ul>				
			</div>
