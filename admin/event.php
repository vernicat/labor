<?php 
	require_once 'class/ui.class.php';
	$UI = new UI;
?>
<form id='add' action="create">
	<input type="text" name="eventTitle" placeholder="Заголовок (кратко)">
	<input type="text" name="eventText" placeholder="Текст (условия)">
	<div class='selection'>
		<p>Баллы</p>
		<input type="number" value="30" step="5" name="eventPoints">
	</div>
	<div class='selection'>
		<p>День</p>
		<input type="date" value="2017-05-20" min="2017-05-20" max="2017-05-26" name="eventDate">
	</div>
	<p>Прием заявок</p>
	<div class='selection'>
		<p>Начало</p>
		<input type="date" value="2017-05-20" min="2017-05-20" max="2017-05-26" name="eventStart">
	</div>
	<div class='selection'>
		<p>Конец</p>
		<input type="date" value="2017-05-20" min='2017-05-26' max="2017-06-28" name="eventStop">
	</div>
	<div class='add-bottom'>
		<button>Опубликовать</button>			
	</div>
</form>
<div id='info'>
	<p>Количество мероприятий: 13</p>
	<div class='button'>
		<button>Подтверждение</button>
		<button>В обработке</button>
		<button>Все</button>			
	</div>
</div>
<div class='content'>
	<section class='entry'>
		<div class='buttonAction'>
			<button><img alt='' src="img/icon/msg/clear-button.png"></button>
		</div>
		<div class='title'>
			<p class="point">15</p>
			<img alt='' src="img/Avatar.png">
			<div class='info'>
				<h3>Олимпиада</h3>
				<p>13 октября в 15:30</p>				
			</div>
		</div>
		<div class='text three'>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
		</div>
		<div class='select'>
			<div class="userAvatar">
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
			</div>
			<a href="event_page" name='buttonInfo'>Побробнее</a>
		</div>
	</section>
	<section class='entry'>
		<div class='buttonAction'>
			<button><img alt='' src="img/icon/msg/clear-button.png"></button>
		</div>
		<div class='title'>
			<p class="point">15</p>
			<img alt='' src="img/Avatar.png">
			<div class='info'>
				<h3>Олимпиада gdfgfr Олимпиада Олимпиада Олимпиада</h3>
				<p>13 октября в 15:30</p>				
			</div>
		</div>
		<div class='text three'>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class='select'>
			<div class="userAvatar">
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
			</div>
			<a href="event_page" name='buttonInfo'>Побробнее</a>
		</div>
	</section>
	<section class='entry'>
		<div class='buttonAction'>
			<button><img alt='' src="img/icon/msg/clear-button.png"></button>
		</div>
		<div class='title'>
			<p class="point">15</p>
			<img alt='' src="img/Avatar.png">
			<div class='info'>
				<h3>Олимпиада</h3>
				<p>13 октября в 15:30</p>				
			</div>
		</div>
		<div class='text three'>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur </p>
		</div>
		<div class='select'>
			<div class="userAvatar">
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
			</div>
			<a href="event_page" name='buttonInfo'>Побробнее</a>
		</div>
	</section>
	<section class='entry'>
		<div class='buttonAction'>
			<button><img alt='' src="img/icon/msg/clear-button.png"></button>
		</div>
		<div class='title'>
			<p class="point">15</p>
			<img alt='' src="img/Avatar.png">
			<div class='info'>
				<h3>Олимпиада</h3>
				<p>13 октября в 15:30</p>				
			</div>
		</div>
		<div class='text three'>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class='select'>
			<div class="userAvatar">
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
			</div>
			<a href="event_page" name='buttonInfo'>Побробнее</a>
		</div>
	</section>
	<section class='entry'>
		<div class='buttonAction'>
			<button><img alt='' src="img/icon/msg/clear-button.png"></button>
		</div>
		<div class='title'>
			<p class="point">15</p>
			<img alt='' src="img/Avatar.png">
			<div class='info'>
				<h3>Олимпиада</h3>
				<p>13 октября в 15:30</p>				
			</div>
		</div>
		<div class='text three'>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class='select'>
			<div class="userAvatar">
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
			</div>
			<a href="event_page" name='buttonInfo'>Побробнее</a>
		</div>
	</section>
	<section class='entry'>
		<div class='buttonAction'>
			<button><img alt='' src="img/icon/msg/clear-button.png"></button>
		</div>
		<div class='title'>
			<p class="point">15</p>
			<img alt='' src="img/Avatar.png">
			<div class='info'>
				<h3>Олимпиада</h3>
				<p>13 октября в 15:30</p>				
			</div>
		</div>
		<div class='text three'>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class='select'>
			<div class="userAvatar">
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
			</div>
			<a href="event_page" name='buttonInfo'>Побробнее</a>
		</div>
	</section>
	<section class='entry'>
		<div class='buttonAction'>
			<button><img alt='' src="img/icon/msg/clear-button.png"></button>
		</div>
		<div class='title'>
			<p class="point">15</p>
			<img alt='' src="img/Avatar.png">
			<div class='info'>
				<h3>Олимпиада</h3>
				<p>13 октября в 15:30</p>				
			</div>
		</div>
		<div class='text three'>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class='select'>
			<div class="userAvatar">
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
				<a href=""><img alt='' src="img/Avatar.png"></a>
			</div>
			<a href="event_page" name='buttonInfo'>Побробнее</a>
		</div>
	</section>
</div>
<?php
	$UI->bottom();
?>