<?php 
	require_once 'class/ui.class.php';
	$UI = new UI;
	
	$img = 'img/';
	$icon = $img.'icon/';
	$stock = $icon.'stock/';
?>
<form id='add' action="create">
	<input type="text" name="stockText" placeholder="Текст (кратко)">
	<input type="text" name="stockText" placeholder="Текст (условия)">
	<label><input type="checkbox"/>Бесплатно</label>
	<div class='selection'>
		<p>Категория</p>
		<select>
			<option selected disabled>Выберите категорию</option>
			<option value=''>Кино</option>
			<option value=''>Еда</option>
		</select>
	</div>
	<div class='selection'>
		<p>Начало</p>
		<input type="date" value="2017-05-20" min="2017-05-20" max="2017-05-26">
		</div>
	<div class='selection'>
		<p>Конец</p>
		<input type="date" value="2017-05-20" min='2017-05-26' max="2017-06-28">
	</div>
	<div class='add-bottom'>
		<button>Опубликовать</button>			
	</div>
</form>

<div class='content'>
	<div class='entry'>
		<div class='buttonAction'>
			<button><img alt='' src="img/icon/msg/clear-button.png"></button>
		</div>
		<div class='title'>
			<img alt='' src="<?=$stock?>3.png">
		</div>
		<div class='info'>
			
			<div class='text two'>
				<p>Ужин на двоих со скидкой 20%</p>
			</div>
			<a href="stock_page" name='buttonInfo'>Побробнее</a>
		</div>
	</div>
	<div class='entry'>
		<div class='buttonAction'>
			<button><img alt='' src="img/icon/msg/clear-button.png"></button>
		</div>
		<div class='title'>
			<img alt='' src="<?=$stock?>3.png">
		</div>
		<div class='info'>
			<div class='text two'>
				<p>Ужин на двоих со скидкой 20%</p>
			</div>
			<a href="stock_page" name='buttonInfo'>Побробнее</a>
		</div>
	</div>
	<div class='entry'>
		<div class='buttonAction'>
			<button><img alt='' src="img/icon/msg/clear-button.png"></button>
		</div>
		<div class='title'>
			<img alt='' src="<?=$stock?>3.png">
		</div>
		<div class='info'>
			
			<div class='text two'>
				<p>Ужин на двоих со скидкой 20%</p>
			</div>
			<a href="stock_page" name='buttonInfo'>Побробнее</a>
		</div>
	</div>
	<div class='entry'>
		<div class='buttonAction'>
			<button><img alt='' src="img/icon/msg/clear-button.png"></button>
		</div>
		<div class='title'>
			<img alt='' src="<?=$stock?>3.png">
		</div>
		<div class='info'>
			
			<div class='text two'>
				<p>Ужин на двоих со скидкой 20%Ужин на двоих со скидкой 20% Ужин на двоих со скидкой 20% Ужин на двоих со скидкой 20% Ужин на двоих со скидкой 20%Ужин на двоих со скидкой 20% Ужин на двоих со скидкой 20% Ужин на двоих со скидкой 20%</p>
			</div>
			<a href="stock_page" name='buttonInfo'>Побробнее</a>
		</div>
	</div>
	<div class='entry'>
		<div class='buttonAction'>
			<button><img alt='' src="img/icon/msg/clear-button.png"></button>
		</div>
		<div class='title'>
			<img alt='' src="<?=$stock?>3.png">
		</div>
		<div class='info'>
			
			<div class='text two'>
				<p>Ужин на двоих со скидкой 20%</p>
			</div>
			<a href="stock_page" name='buttonInfo'>Побробнее</a>
		</div>
	</div>
</div>
<?php
	$UI->bottom();
?>