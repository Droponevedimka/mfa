
<html>
<head>
<link rel="stylesheet" href="style/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MFA</title>
</head>

<body>
<div class="bbody">
<div class="team1">
<p class="logot">MFA</p>
<img class="logob" src="pic/logo.png"/>
</div>

<ul class="ca-menu">
                   <li><div>
                       <button class="md-trigger" data-modal="modal-12">
                          <img src="pic/pwr.png">   
                          <h3 class="ca-sub">MultiFactor <br> Authentication</h3>
                       </button> 
                       </div>                 
                   </li>
</ul>

<div class="team2">
</div>
</div>


<!--Модальное окно -->
<div class="md-modal md-effect-12" id="modal-12">
			<div class="md-content">
				<h3>MFA</h3>
				<div>
				    <div class="window">
					<?php include($_SERVER['DOCUMENT_ROOT']. '/pages/'.$view.'.php'); ?>
					</div>
					<button class="md-close" onclick="stopweb();">Закрыть!</button>
				</div>
			</div>
</div>

		<div class="md-overlay"></div><!-- overlay элемент -->


		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>
		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// для работы в IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		  
</body>
</html>
