<?

	$types = array('alfaromeo' => array('img' => 'i/b-1/car/alfaromeo.png', 'logo' => "i/b-1/logo/alfaromeo.png", 'text' => 'Alfa Romeo','class' => 'alfa_romeo'),
			  'chevrolet' => array('img' => 'i/b-1/car/chevrolet.png', 'logo' => "i/b-1/logo/chevrolet.png", 'text' => 'Chevrolet','class' => 'chevrolet'),
			  'ford' => array('img' => 'i/b-1/car/ford.png', 'logo' => "i/b-1/logo/ford.png", 'text' => 'Ford','class' => 'ford')
			);
	$rand = rand(0,2);

	if($rand==0) {
		$type = $types['alfaromeo'];
	}
	if($rand==1) {
		$type = $types['chevrolet'];
	}
	if($rand==2) {
		$type = $types['ford'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">

	<meta name="viewport" content="width=1000">

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/jssor.js"></script>
	<script type="text/javascript" src="js/jssor.slider.js"></script>
	<script type="text/javascript" src="js/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/swipe.js"></script>
	<script type="text/javascript" src="js/carousel.lite.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/KitProgress.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/device.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body>
	<ul class="ps-lines">
		<li class="v" style="margin-left:-501px"></li>
		<li class="v" style="margin-left:500px"></li>
		<li class="v" ></li>
	</ul>
	<div class="b b-1">
		<div class="b-video-cont">
			<video class="b-video" poster="i/b-1/video.jpg" autoplay loop muted id="bgvideo">
		   		<source src="video/5.mp4" type="video/mp4"></source>
		  	</video>
		</div>
		<div class="b-back">
		 	<div class="b-block">
		 		<div class="head clearfix">
		 			<img src="i/b-1/motors.png">
		 			<p>Немецкий чип-тюнинг 
					   с гарантией результата 
					   в Москве
					</p>
					<div class="clearfix right tel">
						<h2>Есть вопрос? Звоните - поможем!</h2>
						<div class="clearfix">
							<img class="left" src="i/b-1/tel.png">
							<h3 class="right">+7 (499) 399 3509</h3>
						</div>
						<a href="#" class="fancy" data-block="#callback">Заказать звонок</a>
					</div>
		 		</div>
		 		<div class="content">
		 			<p>Сделайте ваш <b><?=$type['text']?></b> мощнее<br>на <b>32%</b> за <b>20</b> минут</p>
					<h2>Вернем деньги, если не почувствуете результат</h2>
		 		</div>
		 		<div class="clearfix bot">
		 			<div class="car-wrap left">
		 				<div class="car">
		 					<h2>С сохранением дилерской гарантии</h2>
		 					<p>Современный немецкий чип-тюнинг блок + усилитель педали газа раскроет заложенные производителем мощности автомобиля.</p>
		 				</div>
		 				<img class="<?=$type['class']?>" src="<?=$type['img']?>">
		 			</div>
					
					<div class="clearfix right typecar">
						<div>
							<div class="tc">
								<h2>Получите 4 варианта чип тюнинга <?=$type['text']?> прямо сейчас!</h2>
							</div>
							<div class="tc">
								<img class="<?=$type['class']?>" src="<?=$type['logo']?>">
							</div>
						</div>
						<form action="kitsend.php" method="post" data-block="#b-popup-2">
							<select name="1" data-brand="<?=$type['class']?>" required>
							 	<option value="" disabled selected>Марка</option>
							    <option value="alfa_romeo">Alfa Romeo</option>
							    <option value="chevrolet">Chevrolet</option>
							    <option value="ford">Ford</option>
						   	</select>
						   	<input type="hidden" name="1-name" value="Марка"/>
						   	<select name="2" required>
							    <option value="" disabled selected>Модель</option>
						   	</select>
						   	<input type="hidden" name="2-name" value="Модель"/>
						   	<select name="3" required>
							    <option value="" disabled selected>Двигатель</option>
						   	</select>
						   	<input type="hidden" name="3-name" value="Двигатель"/>
							<input type="text" name="phone" placeholder="Введите ваш телефон" required>

							<input type="hidden" name="subject" value="Заявка на чип-тюнинг"/>
							<input type="submit" class="b-green-button ajax" value="Получить 4 варианта чип тюнинга!">
						</form>
						<p>Сегодня рассчитали уже <b>132</b> варианта чип-тюнинга</p>
					</div>		 			
		 		</div>
		 		<div class="sale-cont">
		 			<img src="i/b-1/triangle.png">
		 			<div class="sale clearfix">
		 				<img class="left" src="i/b-1/key.png">
		 				<div class="left">
			 				<h2>Акция!</h2>
			 				<h3>При заявке до 29 мая монтаж - в подарок!</h3>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
		 </div>
	</div>
	<div class="b b-1-1">
		<div class="clearfix b-block">
			<div>
				<img class="lock left" src="i/lock.png">
				<p class="left">Для продолжения заполните форму</p>
			</div>
			<!-- <img class="arrow left" src="i/b-1/arrow.png"> -->
		</div>
	</div>
	<div class="b b-3">
		 <div class="b-block">
		 	<h2>Представьте, что Ваш автомобиль<br>
		 	срывается с места, как только<br>Вы нажали на педаль</h2>
		 	<div class="clearfix">
			 	<div class="describe left">
			 		<p>Двойное ускорение: <b>Усилитель педали газа +<br> 
					блок увеличения мощности</b></p>
					<img class="arrow-1" src="i/b-2/arrow-1.png">
					<img class="arrow-2" src="i/b-2/arrow-2.png">
			 	</div>
			 	<ul class="left">
			 		<li class="clearfix">
			 			<div class="part left"></div>
			 			<div class="left">
				 			<h3>Легкий и мощный старт</h3>
				 			<p>Усилитель педали газа снимает<br>
							"врожденную" задержку<br> 
							при нажатии</p>
						</div>
			 		</li>
			 		<li class="clearfix">
			 			<div class="part left"></div>
			 			<div class="left">
				 			<h3>До +32% к лошадиным силам<br> 
							и крутящему моменту</h3>
				 			<p>чип-тюнинг блок подает более богатую<br> 
							топливную смесь в моменты<br> 
							интенсивной работы двигателя</p>
				 		</div>
			 		</li>
			 	</ul>
			 </div>
		 </div>
	</div>
	<div class="b b-4">
		<div class="b-block">
			<div class="triangle"><a href="#"></a></div>
			<h2>Ощутимый прирост мощности</h2>
			<h3>Чип-тюнинг - это новые впечатления от вождения</h3>
			<ul>
				<li class="clearfix">
					<div class="left"></div>
					<p class="left">Резкое ускорение на старте. 
					На низких оборотах двигатель реагирует на педаль <b>в 2 
					раза быстрее</b></p>
				</li>
				<li class="clearfix">
					<div class="left"></div>
					<p class="left">АКПП принимает
					решение <b>на 19% быстрее</b> при<br> переключении передачи</p>
				</li>
				<li class="clearfix">
					<div class="left"></div>
					<p class="left">Эффект непрерывного
					разгона без провалов<br> при переключении передач</p>
				</li>
					<li class="clearfix">
					<div class="left"></div>
					<p class="left">Снижение расхода топлива <b>до 2л на 100км</b><br> передач </p>
				</li>
			</ul>
		</div>
	</div>
	<div class="b b-5">
		<div class="b-block">
			<a class="b-green-butt" href="#">Рассчитать прибавку мощности для Вашего %Марка авто%</a>
			<h2>Абсолютно безопасно для двигателя</h2>
			<h3>Никакого дополнительного износа. Узнайте, как работает чип-тюнинг</h3>
			<div class="content clearfix">
				<div class="b-form typecar left">
					<p>Выберите Ваше авто:</p>
					<form action="kitsend.php" method="post" data-block="#b-popup-2">
						<select name="1" data-brand="<?=$type['class']?>" required>
						 	<option value="" disabled selected>Alfa Romeo</option>
						    <option value="alfa_romeo">Alfa Romeo</option>
						    <option value="chevrolet">Chevrolet</option>
						    <option value="ford">Ford</option>
					   	</select>
					   	<input type="hidden" name="1-name" value="Марка"/>
					   	<select name="2" required>
						    <option value="" disabled selected>Alfa Romeo</option>
					   	</select>
					   	<input type="hidden" name="2-name" value="Модель"/>
					   	<select name="3" required>
						    <option value="" disabled selected>Alfa Romeo</option>
					   	</select>
					   	<input type="hidden" name="3-name" value="Двигатель"/>

						<input type="hidden" name="subject" value="Заявка на чип-тюнинг"/>
						<input type="submit" class="b-blue-button ajax" value="Попробовать!">
					</form>
				</div>
				<div class="b-tuning left">
					<h3>ЧИП-ТЮНИНГ:</h3>
					<div class="on clearfix">
						<p class="left">on</p>
						<div class="left"></div>
					</div>
				</div>
				<ul class="describe left">
					<li>
						<p>После чип-тюнинга:</p>
					</li>
					<li>
						<p>Мощность:</p>
					</li>
					<li>
						<b>выберите марку</b>
					</li>
					<li>
						<p>Крутящий момент:</p>
					</li>
					<li>
						<b>Выберите модель</b>
					</li>
					<li>
						<p>Расход:</p>
					</li>
					<li>
						<b>Выберите двигатель</b>
					</li>
				</ul>
				<ul class="advantages left">
					<li class="clearfix">
						<img class="left" src="i/b-4/check.png">
						<p class="left">Резкое ускорение на старте.</p>
					</li>
					<li class="clearfix">
						<img class="left" src="i/b-4/check.png">
						<p class="left">АКПП принимает решение<br>на 19% быстрее </p>
					</li>
					<li class="clearfix">
						<img class="left" src="i/b-4/check.png">
						<p class="left">+25 км/ч максимальная скорость </p>
					</li>
					<li class="clearfix">
						<img class="left" src="i/b-4/check.png">
						<p class="left">Эффект непрерывного разгона без </p>
					</li>
				</ul>
			</div>
			<img class="car" src="i/b-4/car.png">
		</div>
	</div>
	<div class="b b-6">
		<div class="b-block clearfix">
			<div class="radio left">
			    <input id="male" type="radio" name="block" value="with">
			    <label for="male">С блоком</label>
			    <input id="female" type="radio" name="block" value="without">
			    <label for="female">Без блока</label>
			</div>
			<div class="left">
				<ul class="steps clearfix">
					<li class="step left">
						<div class="clearfix">
							<div class="clearfix top left">
								<h3 class="left">1</h3>
								<p class="left">При сильном<br> нажатии на<br> педаль</p>
								<img class="arrow" src="i/b-5/arrow-1.png">
							</div>
							<div class="pedalt left"></div>
						</div>
					</li>
					<li class="step left">
						<div class="clearfix">
							<div class="clearfix top">
								<h3 class="left">2</h3>
								<p class="left">Сигнал поступает<br> в блок</p>
								<img class="arrow" src="i/b-5/arrow-2.png">
							</div>
						</div>
					</li>
					<li class="step left">
						<div class="clearfix">
							<div class="clearfix top">
								<h3 class="left">3</h3>
								<p class="left">Блок оптимизирует сигнал</p>
								<img class="arrow" src="i/b-5/arrow-3.png">
							</div>
							<div class="b-orange-border left">
								<div class="text">
									<p>Внутри<br> программа<br> под Ваше авто</p>
								</div>
							</div>
						</div>
					</li>
					<li class="step left">
						<div class="clearfix">
							<div class="clearfix top">
								<h3 class="left">4</h3>
								<p class="left">ЭБУ выбирает<br>более мощный<br>режим</p>
								<img class="arrow" src="i/b-5/arrow-4.png">
							</div>
							<div class="b-orange-border left">
								<ul class="b-profile">
									<li>
										<a href="#">Задушенный режим</a>
									</li>
									<li>
										<a href="#">Мощный режим</a>
									</li>
									<li>
										<a href="">ЭБУ Вашего авто</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="step left">
						<div class="clearfix">
							<div class="clearfix top">
								<h3 class="left">5</h3>
								<p class="left">Результат</p>
							</div>
							<div class="b-orange-border">
								<ul class="characteristics">
									<li class="clearfix">
										<p>Мощность:</p>
									</li>
									<li class="clearfix">
										<img class="left" src="i/b-5/mini-1.png">
										<p>177 л.с +23% </p>
									</li>
									<li class="clearfix">
										<p>Крутящий момент: </p>
									</li>
									<li class="clearfix">
										<img class="left" src="i/b-5/mini-1.png">
										<p>144 Нм +19%  </p>
									</li>
									<li class="clearfix">
										<p>Расход  </p>
									</li>
									<li class="clearfix">
										<img class="left" src="i/b-5/mini-2.png">
										<p>11л/100км -11%</p>
									</li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div style="display:none;">
		<div id="callback">
			<div class="b-popup">
				<div class="clearfix">
					<h2>Заказать обратный звонок</h2>
				</div>
				<form action="kitsend.php" method="post" data-block="#b-popup-2">
					<input type="text" name="name" placeholder="Введите ваше имя" required>
					<input type="text" name="phone" placeholder="Введите ваш телефон" required>
					<input type="hidden" name="subject" value="Обратный звонок"/>
					<input type="submit" class="b-green-button ajax" value="Заказать звонок">
				</form>
				<!-- <p>Сегодня рассчитали уже <b>132</b> варианта чип-тюнинга</p> -->
			</div>
		</div>
		<div id="b-popup-2">
			<div class="b-thanks b-popup">
				<h2>Спасибо!</h2>
				<p>Ваша заявка успешно отправлена.<br/>Наш менеджер свяжется с Вами в течение часа.</p>
				<input type="submit" class="b-green-button" onclick="$.fancybox.close(); return false;" value="Закрыть">
			</div>
		</div>
		<div id="b-popup-error">
			<div class="b-thanks b-popup">
				<h2>Ошибка отправки!</h2>
				<p>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</p>
				<input type="submit" class="b-green-button" onclick="$.fancybox.close(); return false;" value="Закрыть">
			</div>
		</div>
	</div>
</body>
</html>