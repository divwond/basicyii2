<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;
use yii\widgets\Menu;
use app\components\HMWidgett;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="/css/gefest.css?ver=<?php echo rand(1, 999);?>.0" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body >

<?php $this->beginBody() ?>
    

<div class="all">
		<div class="header">
			<div class="title-header">
				telephone : +6 (315) 9379992 / +6 (871) 4556312
			</div>
			<?php 
				echo '22';
				HMWidgett::widget([]);
				echo '33';
				?>
		
			<div class="menu-styles">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
    
	    <!-- Dropdown -->
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
	  Товары и услуги
      </a>
      <div class="dropdown-menu">		
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">О нас</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Отзывы</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Доставка и оплата</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Договор оферты</a>
    </li>


  </ul>
</nav> 
				<div class="menu">	
					
				
					<!-- <ul>
						<li><a href="/index.html">Главная</a></li> 
						<li><a href="/index.html">Товары и услуги</a></li> 
						<li><a href="/index.html">О нас</a></li> 
						<li><a href="/index.html">Контакты</a></li> 
						<li><a href="/index.html">Доставка и оплата</a></li> 
						<li><a href="/index.html">Возврат и обмен</a></li> 					
					</ul> -->
				</div>

			</div>
		</div>



		<!-- MAIN -->
		<div class="main">
			<div class="main-menu">
				MENU
				<li>Товары и услуги</li>
				<li>О нас</li>
				<li>Отзывы</li>
				<li>Доставка и оплата</li>
				<li>Договор оферты</li>
				
			</div>

			<main role="main" class="flex-shrink-0">
				<div class="container">
					<?= Breadcrumbs::widget([
						'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
					]) ?>
					<?= Alert::widget() ?>
					<?= $content ?>
				</div>
			</main>
					
		</div>
		<div class="footer">
			footer
		</div>
	</div>
	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
