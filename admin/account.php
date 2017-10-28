<?php 
	require_once 'class/ui.class.php';
	$UI = new UI;
?>
<div id='information'>
	<h3>Информация</h3>
	<p>Специальность: Программирование в компьютерных системах</p>
	<p>Рейтинг: 73 (240 балла)</p>
</div>

<main id='achieve'>
	<div class='info'>
		<h3>Достижения</h3>
		<p>Всего: 16</p>
	</div>
	<div class='table'>
		<section>
			<p>45</p>
			<img src="img/achieve.png">
			<h3>Установил Windows</h3>
		</section>
		<section>
			<p>45</p>
			<img src="img/achieve.png">
			<h3>Установил Windows</h3>
		</section>
		<section>
			<p>45</p>
			<img src="img/achieve.png">
			<h3>Установил Windows</h3>
		</section>
				<section>
			<p>45</p>
			<img src="img/achieve.png">
			<h3>Установил Windows</h3>
		</section>
	</div>
	<div class='bottom'>
		<button>Показать еще</button>
	</div>
</main>


<?php
	$UI->bottom();
?>