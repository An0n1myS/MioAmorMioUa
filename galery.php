<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/Style.css">
	<link rel="stylesheet" href="css/Style-galery.css">
	<title>Mio Amor Mio*Ua</title>
	<script type="text/javascript" src="http://livejs.com/live.js"></script>
	<script src="//code.jivosite.com/widget/bMTILrxuRa" async></script>
</head>
<body>
<a href="#regclose" class="form-reg-bg" id="formregbg"></a>
<a href="#authclose" class="form-auth-bg" id="formauthbg"></a>

<!-- Header -->
	<header class="header">

		<div class="header__content">
			
			<div class="header__logo">
				
				<img src="img/Logo.png" alt="#" width="90%" height="90%">

			</div>

			<div class="header__text">
				
				<nav class="menu">
					
					<ul class="menu__list">
						<li>
							<a href="index.php" class="menu__link mn1">Главная</a>
						</li>
						<li>
							<a  class="menu__link mn2">Наши питомцы</a>
							<span class="menu__arrow arrow"></span>
							<ul class="sub-menu__list">
								
								<li class="sub-menu__li">
									<a href="cats_boy.php" class="sub-menu__link">Наши коты</a>
								</li>

								<li class="sub-menu__li">
									<a href="catsgirl.php" class="sub-menu__link">Наши кошки</a>
								</li>

								<li class="sub-menu__li">
									<a href="kittens.php" class="sub-menu__link">Наши котята</a>
								</li>

							</ul>
						</li>
						<li>
							<a href="buyers.php" class="menu__link mn3">Покупателям</a>
						</li>
						<li>
							<a href="galery.php" class="menu__link mn3">Галерея</a>
						</li>
						<li>
							<a href="Publication.php" class="menu__link mn4">Статьи</a>
						</li>
					</ul>

				</nav>

				<div class="lang">

					<div class="lang__icons">
						
						<a href="" class="lang__icon">En</a>
						<a href="" class="lang__icon">Ru</a>
						<a href="" class="lang__icon">Uk</a>

					</div>
				
				</div>


			 	<div class="form-logo" >
					<img  class="form-logo__image" src="img/standart-avatar-logo.jpg" alt="#">
					

					

					<div class="panel" id="panel">

						<div class="panel__open form-panel">

							
							<ul class="form-panel__list">

								<?php
								if ($_COOKIE['user'] == ''):  
								?>
								<li>
									<a class="form-panel__link" id="auth-btn">Авторизация</a>
								</li>
								<li>
									<a class="form-panel__link" id="reg-btn">Регистрация</a>
								</li>
								<li>
									<a class="form-panel__link exit-link" id="exit-link">Закрыть</a>
								</li>

								<?php else: ?>
										
									<li>
										<a class="form-panel__link" href="profile.php" id="auth-btn"><?= $_COOKIE['user']  ?></a>
									</li>
									<li>
										<a href="php/exit.php" class="form-panel__link" id="reg-btn">Выход</a>
									</li>
				
								<?php endif; ?>

							</ul>	

						</div>
					</div>

				</div> 

			</div>				

		</div> 

	</header>

<!-- Page content -->
	<div class="content">
		
		<div class="wrapper">
			
			<div class="page_title">
				<h1>Галерея</h1>
			</div>

			<div class="container">
				
				<div class="categories">
					

					<div class="categories__1 category">
						
						<a href="category-cats.php" class="category__title"> Наши Коты</a>
						<div class="category__content">
							<a href="category-cats.php"><img src="/img/Cats_old/Timmy.jpg" alt=""></a>
						</div>

					</div>
					
					<div class="categories__2 category">
						
						<a href="category-girls.php" class="category__title">Наши Кошки</a>
						<div class="category__content">
							<a href="category-girls.php"><img src="/img/Cats_old/Felicia.jpg" alt=""></a>
						</div>

					</div>
					
					<div class="categories__3 category">
						
						<a href="" class="category__title">Наши котята</a>
						<div class="category__content">
							<a href=""><img src="/img/kittens/cayenne.png" alt=""></a>
						</div>

					</div>
					
					<div class="categories__4 category">
						
						<a href="" class="category__title">Наши выпускники</a>
						<div class="category__content">
							<a href=""><img src="img/vupysk.png" alt=""></a>
						</div>

					</div>
					
					<div class="categories__5 category">
						
						<a href="" class="category__title"></a>
						<div class="category__content">
							<a href=""><img src="" alt=""></a>
						</div>

					</div>



				</div>



			</div>	






			
			
		
		</div>
		
	</div>

<!-- Footer -->

	<footer class="footer">
			
			<div class="footer__text">
				
				C нашими кошками и котами производителями Вы можете познакомиться на страничках "Коты" и "Кошки. Новости о котятах, которые ищут новых хозяев,а так же о содержании котят и уходе за ними можно узнать на страничке "Покупателям". В нашей "Галерее" представлены Вашему вниманию фото наших производителей, котят, а также фоторепортаж с различных выставок. На страничке "Статьи" можно узнать очень много полезной и интересной информации о британских кошках и т.д.

			</div>

			<div class="footer__contacts">
				
				<div class="footer__contact contact">
					<div class="contact__element contact_1">
						<span class="contact_title">Контакты:</span>		
						<div class="phone">
							
							<a href="tel:+380667467184" class="contact-link">+38(066)-746-71-84</a> 
							<br>
							<a href="tel:+380631598602" class="contact-link">+38(063)-159-86-02</a>

						</div> 
						
					</div>
				</div>
				
				<div class="footer__logo ">
					
					<img src="img/Logo.png" alt="#" c>

				</div>
				
				<div class="footer__contact contact">
					<div class="contact__element">e-mail: <a href="mailto:amormiocats@rambler.ru" class="contact-mail">amormiocats@rambler.ru</a> </span>
				</div>
				
			</div>
			
		<br>
		<br>
		<br>
		<br>

	</footer>

<div class="auth-and-reg">

	<form action="/php/check.php" class="form-reg" id="form-reg" method="post">
		
		<div class="form-reg__close ppc" id="regclose">
			
		</div>
		<div class="form-reg__title">
			<span>Регистрация</span>
		</div>
		<div class="form-reg__input">
			<div class="form-reg__block">
				<label class="reg-input-name" for="login">Логин</label>
				<input type="text" class="form-reg__control" name="login" id="login" placeholder="  Введите логин">
			</div>

			<div class="form-reg__block">
				<label class="reg-input-name" for="name">Ф.И.О</label>
				<input type="text" class="form-reg__control" name="name" id="name" placeholder="  Введите имя">
			</div>
			
			<div class="form-reg__block">

				<label class="reg-input-name" for="mail">Почта</label>
				<input type="email" class="form-reg__control1" name="mail" id="mail" placeholder="  Введите почту">
		
				<label class="reg-input-name" for="pass">Пароль</label>
				<input type="password" class="form-reg__control1" name="pass" id="pass" placeholder="Введите пароль">

			</div>
			
		</div>

		<button class="btn btn-reg" type="submit" >Зарегистрироваться</button>
	</form>


	<form action="/php/auth.php" class="form-auth" id="form-auth" method="post">
		
		<div class="form-auth__close ppc" id="authclose">
			
		</div>
		<div class="form-auth__title">
			<span>Авторизация</span>
		</div>
		<div class="form-auth__input">
			<label class="auth-input-name" for="login-auth">Логин</label>
			<input type="text" class="form-auth__control" name="login-auth" id="login-auth" placeholder="Введите логин">

			<label class="auth-input-name" for="pass-auth">Пароль</label>
			<input type="password" class="form-auth__control" name="pass-auth" id="pass-auth" placeholder="Введите пароль">

			<button type="submit" class="btn-auth btn">Авторизироваться</button>
		</div>
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
	