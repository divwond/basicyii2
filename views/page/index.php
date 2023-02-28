<?php
/** @var yii\web\View $this */

use app\models\Categorylist;
use yii\helpers\Html;
use app\components\LICWidget;


echo 'INDEX-PAGE';

?>

<?php

// use yii\widgets\ListView;
// use yii\data\ActiveDataProvider;



 
// $dataProvider = new ActiveDataProvider([
// 	'query' => Categorylist::find()->where(['pearent_id'=>0]),
// 	'pagination' => [
// 		'pageSize' => 3,
// 	],
// ]);
 
// echo ListView::widget([
// 	'dataProvider' => $dataProvider,
// 	'itemView' => '_list',
// ]);

?>

<div class="main-body">   
				<?php
				echo LICWidget::widget();
				?>


<?php
$arr =['опис', 'описание', 'descr'];
$jsvar = json_encode($arr);
var_dump ( $jsvar);
echo '</br>';
var_dump (json_decode($jsvar));
echo ' konec';

?>



				<ul style="display: flex;">
                	<?php foreach ($catalog as $key=>$item): 
											
						if (($key%4)==0) echo '</ul><ul style="display: flex;">';						
					?>
						
                    
					<!-- <li>
						<div class="main-menu-item">
							РУ название : <?php echo $item->ru_name ?> </br>
							EN name :<?php echo $item->en_name ?> </br>
							УКР назва :<?php echo $item->ukr_name ?></br>
							IDшник :<?php echo $item->id ?> </br>
							descr :<?php 
								$jsarvar = $item->description;
								//var_dump($jsarvar);
								// $bufjs = json_decode($jsarvar);
								echo $jsarvar[1] ;

							 ?>						
						</div>
					</li>  -->
				<?php endforeach ?>	

							
				</ul>
				
			</div>
