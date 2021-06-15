<?php
	session_start();
	if ($_SESSION['user']) {
		header('Location: /');
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	<style type="text/css">
	ul li.correct:before {
		content: "\2713";
		color: #35ad79;
	}
	ul li:before {
		content: "\2BBE";
		color: #e25e5e;
	}
	</style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <section id="wrapper" class="new-login-register">
        <div class="lg-info-panel">
            <div class="inner-panel">
                <a href="javascript:void(0)" class="p-20 di"><img src="plugins/images/admin-logo.png"></a>
                <div class="lg-content">
                    <h2>THE ULTIMATE & MULTIPURPOSE ADMIN TEMPLATE OF 2017</h2>
                    <p class="text-muted">with this admin you can get 2000+ pages, 500+ ui component, 2000+ icons, different demos and many more... </p> <a href="#" class="btn btn-rounded btn-danger p-l-20 p-r-20"> Buy now</a> </div>
            </div>
        </div>
        <div class="new-login-box">
            <div class="white-box">
                <h3 class="box-title m-b-0">Регистрация</h3> <small>Введите свои данные ниже</small>
                <form class="form-horizontal new-lg-form" id="loginform" action="scripts/signup.php" method="post">
				    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="email" id="email" required="" maxlength="90" placeholder="Email">
						</div>
						<div class="description" data-group="email" style="display: none; margin-left: 25px;">На него придёт ссылка подтверждения</div>
						<ul data-group="email" style="display: none; margin-bottom: -20px; list-style-type: none; margin-left: -15px;">
							<li id="condition1">Корректность ввода данных</li>
						</ul>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="login" id="login" required="" maxlength="20" placeholder="Логин"> 
						</div>
						<div class="description" data-group="login" style="display: none; margin-left: 25px;">Используется для авторизации на сайте, а также выступает в качестве <u>ссылки Вашего профиля</u></div>
						<ul data-group="login" style="display: none; margin-bottom: -20px; list-style-type: none; margin-left: -15px;">
							<li id="condition2">От 4 до 20 символов;</li>
							<li id="condition3">Первый символ - буква;</li>
							<li id="condition4">Только символы латиницы и цифры</li>
						</ul>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="pass" id="pass" required="" maxlength="20" placeholder="Пароль"> 
						</div>
						<ul data-group="password1" style="display: none; margin-bottom: -20px; list-style-type: none; margin-left: -15px;">
						<li id="condition5">От 5 до 20 символов;</li>
						<li id="condition6">Только латинские буквы любого регистра. По желанию: цифры и символы <span class="symbols">% _ - + =</span></li>
					</ul>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="confirm" id="confirm" required="" maxlength="20" placeholder="Повторите пароль">
						</div>
						<ul data-group="password2" style="display: none; margin-bottom: -20px; list-style-type: none; margin-left: -15px;">
						<li id="condition7">Совпадение паролей</li>
						</ul>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Я согласен с <a href="#">правилами сервиса</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" name="signup" id="signup" disabled="true" type="submit">Зарегистрироваться</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>У Вас уже есть аккаунт? <a href="login" class="text-danger m-l-5"><b>Войти</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
	<!--Registration -->
    <script src="scripts/registration.js"></script>
</body>

</html>