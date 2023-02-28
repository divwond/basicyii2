<ul style="display: flex;">
                	<?php foreach ($model as $key=>$item): 
											
						if (($key%4)==0) echo '</ul><ul style="display: flex;">';						
					?>
<?php
$imgarray =['"https://images.prom.ua/3669088835_w238_h250_ccgt09t308-alyuminij-tverdosplavna.jpg"',
			'"https://images.prom.ua/3669164773_w238_h250_ccmt060204-stalnerzh-stal.jpg"',
			'"https://images.prom.ua/3669093827_w238_h250_ccgt060204-ak-k10-alyuminij.jpg"',
			'"https://images.prom.ua/3669173500_w238_h250_ccmt060204-p9035-prospect.jpg"',
			'"https://images.prom.ua/3669216762_w238_h250_ccmt060208-ybc251stal-tverdosplavna.jpg"',
			'"https://images.prom.ua/3669167475_w238_h250_ccmt060204-op1215-oke.jpg"'
			]
?>						
                    
					<li>
						<div class="main-menu-item">
							<div>
								<img class="b-product-gallery__image" 
									src=<?php 
											echo $imgarray[rand(0,5)];
										?>>
							</div>
							<div>
								РУ название : <?php echo $item->ru_name ?> </br>
								EN name :<?php echo $item->en_name ?> </br>
								УКР назва :<?php echo $item->ukr_name ?></br>
								IDшник :<?php echo $item->id ?> </br>
								P-Id :<?php echo $item->pearent_id ?>						
							</div>
						</div>
					</li> 
				<?php endforeach ?>				
				</ul>	