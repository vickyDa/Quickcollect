﻿<!DOCTYPE html>
<html lang="en" class="page">
<head>
<title>Biz Time</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Amaranth_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">
	.button1, #ContactForm a {behavior:url(js/PIE.htc)}
</style>
<![endif]-->
<!--[if lt IE 7]>
<div style=' clear:both;text-align:center;position:relative'>
	<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
</div>
<![endif]-->
</head>
<body class="body">
<div class="body1">
	<div class="body2">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
					<nav>
						<ul id="top_nav">
							<li class="bg_none"><a href="#page_Home" class="icon1"></a></li>
							<li><a href="#page_Contacts" class="icon2"></a></li>
							<li><a href="#" class="icon3"></a></li>
						</ul>
					</nav>
				</div>
				<div class="wrapper">
					<h1><a href="index.html" id="logo">Biz Time Business Company</a></h1>
					<ul id="icons">
						<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon_1.png" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Rss"><img src="images/icon_2.png" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon_3.png" alt=""></a></li>
					</ul>
				</div>
			</header>
<!-- / header -->
		</div>
	</div>
</div>
<div class="wrapper">
	<div class="main">
		<nav>
			<ul id="menu">
				<li class="menu_active nav1"><a href="#page_Contacts">Connexion </a></li>
			</ul>
		</nav>
<!-- content -->
		<section id="content">
		  <div id="page_Contacts">
	    <h2>Connexion Administrateur</h2>
				<div class="wrapper">
					<div class="col3">
						<div class="box1_bot">
							<div class="box1_left">
								<div class="box1_right">
									<div class="box1">
										<div class="pad">
<form id="ContactForm"  name="ContactForm" method="post" action="fichier.php?action=connexion">
												<div>
													<div class="wrapper"><span>Login:</span>
							            <input name="lg" type="text" class="input" id="lg" ></div>
													<div class="wrapper"><span>Mot de passe:</span>
											      <input name="pwd" type="password" class="input" id="pwd" ></div>
												  <div class="wrapper"></div>
													<p><a href="#" class="button" onClick="document.getElementById('ContactForm').submit()"><span class="shadow"></span>Send</a>
													  <a href="#" class="button" onClick="document.getElementById('ContactForm').reset()"><span class="shadow"></span>Clear</a>												    </p>
<p>
						    <?php if($_GET['valid'] != null){if($_GET['valid'] == 'faut'){ echo "Compte inconnu.<br> Vérifier bien votre login et mot de passe"; } }?>
						    </p>
                                                </div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<!-- / content -->
	</div>
</div>
<div class="body3">
	<div class="body4">
		<div class="main">
<!-- footer -->
			<footer>
				<a href="#page_Home" id="footer_logo">Biz Time</a>
				<div><a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a></div>
			</footer>
<!-- / footer -->
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>